<?php

namespace App\Controllers;

use App\Models\Subject;
use Exception;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

/**
 * Class SubjectController
 * CRUD operácie nad entitou Subject (predmety) s využitím ORM frameworku Vaííčko.
 *
 * Akcie:
 *  - index  – zoznam predmetov (Read)
 *  - add    – formulár na pridanie predmetu (Create)
 *  - edit   – formulár na úpravu predmetu (Update)
 *  - save   – uloženie nového / upraveného predmetu (POST)
 *  - delete – odstránenie predmetu (POST)
 *
 * @package App\Controllers
 */
class SubjectController extends BaseController
{
    /**
     * Prihlasovanie sa v tejto úlohe nevyžaduje, všetky akcie sú povolené.
     */
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    /**
     * Read – zobrazí zoznam všetkých predmetov z databázy.
     * @throws Exception
     */
    public function index(Request $request): Response
    {
        $subjects = Subject::getAll(orderBy: '`semester` ASC, `name` ASC');

        return $this->html([
            'subjects' => $subjects,
        ]);
    }

    /**
     * Create – zobrazí prázdny formulár na pridanie predmetu.
     */
    public function add(Request $request): Response
    {
        return $this->html([
            'subject' => new Subject(),
            'errors' => [],
        ], 'form');
    }

    /**
     * Update – zobrazí formulár predvyplnený údajmi existujúceho predmetu.
     * @throws Exception
     */
    public function edit(Request $request): Response
    {
        $subject = $this->findSubject($request);

        return $this->html([
            'subject' => $subject,
            'errors' => [],
        ], 'form');
    }

    /**
     * Uloží nový predmet (bez id) alebo aktualizuje existujúci (s id).
     * Po úspešnom uložení presmeruje na zoznam, aby sa zobrazil aktuálny stav údajov.
     * @throws Exception
     */
    public function save(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('subject.index'));
        }

        $id = (int)$request->value('id');
        if ($id > 0) {
            $subject = Subject::getOne($id);
            if ($subject === null) {
                throw new HttpException(404, 'Predmet nebol nájdený.');
            }
        } else {
            $subject = new Subject();
        }

        $name = trim((string)$request->value('name'));
        $code = trim((string)$request->value('code'));
        $semester = trim((string)$request->value('semester'));

        $subject->setName($name);
        $subject->setCode($code);
        $subject->setSemester(is_numeric($semester) ? (int)$semester : null);

        // Základná kontrola povinných údajov (pokročilá validácia nie je súčasťou úlohy)
        $errors = [];
        if ($name === '') {
            $errors[] = 'Názov predmetu je povinný.';
        }
        if ($code === '') {
            $errors[] = 'Skratka predmetu je povinná.';
        }
        if ($subject->getSemester() === null || $subject->getSemester() < 1 || $subject->getSemester() > 12) {
            $errors[] = 'Semester musí byť číslo od 1 do 12.';
        }

        if (!empty($errors)) {
            return $this->html([
                'subject' => $subject,
                'errors' => $errors,
            ], 'form');
        }

        $subject->save();

        return $this->redirect($this->url('subject.index'));
    }

    /**
     * Delete – odstráni vybraný predmet a presmeruje späť na zoznam.
     * @throws Exception
     */
    public function delete(Request $request): Response
    {
        if (!$request->isPost()) {
            return $this->redirect($this->url('subject.index'));
        }

        $subject = $this->findSubject($request);
        $subject->delete();

        return $this->redirect($this->url('subject.index'));
    }

    /**
     * Načíta predmet podľa parametra `id` z requestu, inak vráti 404.
     * @throws Exception
     */
    private function findSubject(Request $request): Subject
    {
        $subject = Subject::getOne((int)$request->value('id'));
        if ($subject === null) {
            throw new HttpException(404, 'Predmet nebol nájdený.');
        }
        return $subject;
    }
}
