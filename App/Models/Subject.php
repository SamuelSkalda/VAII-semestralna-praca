<?php

namespace App\Models;

use Framework\Core\Model;

/**
 * Class Subject
 * Predmet, ktorý si študent eviduje v aplikácii StudyFlow.
 *
 * Podľa konvencií frameworku (DefaultConventions) sa model mapuje na tabuľku `subjects`
 * a primárny kľúč je stĺpec `id`.
 *
 * @package App\Models
 */
class Subject extends Model
{
    /**
     * Vlastnosti, ktoré je možné nastaviť z formulára cez setFromRequest().
     * Primárny kľúč tu zámerne nie je.
     */
    protected static ?array $fillable = ['name', 'code', 'semester'];

    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $code = null;
    protected ?int $semester = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getSemester(): ?int
    {
        return $this->semester;
    }

    public function setSemester(?int $semester): void
    {
        $this->semester = $semester;
    }
}
