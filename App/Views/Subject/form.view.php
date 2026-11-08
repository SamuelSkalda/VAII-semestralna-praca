<?php
/** @var \App\Models\Subject $subject */
/** @var string[] $errors */
/** @var \Framework\Support\LinkGenerator $link */

$isEdit = $subject->getId() !== null;
?>
<section class="subject-form-page">

    <div class="page-heading">
        <h1><?= $isEdit ? 'Upraviť predmet' : 'Nový predmet' ?></h1>
    </div>

    <?php if (!empty($errors)) { ?>
        <div class="form-errors" role="alert">
            <?php foreach ($errors as $error) { ?>
                <p><?= e($error) ?></p>
            <?php } ?>
        </div>
    <?php } ?>

    <form class="form-card" method="post" action="<?= $link->url('subject.save') ?>">
        <?php if ($isEdit) { ?>
            <input type="hidden" name="id" value="<?= e($subject->getId()) ?>">
        <?php } ?>

        <label>
            Názov predmetu
            <input type="text" name="name" maxlength="100" required
                   value="<?= e($subject->getName()) ?>" placeholder="napr. Vývoj webových aplikácií">
        </label>

        <label>
            Skratka
            <input type="text" name="code" maxlength="20" required
                   value="<?= e($subject->getCode()) ?>" placeholder="napr. VAII">
        </label>

        <label>
            Semester
            <input type="number" name="semester" min="1" max="12" required
                   value="<?= e($subject->getSemester()) ?>" placeholder="napr. 5">
        </label>

        <div class="form-actions">
            <button class="primary-button" type="submit">
                <?= $isEdit ? 'Uložiť zmeny' : 'Pridať predmet' ?>
            </button>
            <a class="secondary-button" href="<?= $link->url('subject.index') ?>">Zrušiť</a>
        </div>
    </form>

</section>
