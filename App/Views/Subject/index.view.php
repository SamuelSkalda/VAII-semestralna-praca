<?php
/** @var \App\Models\Subject[] $subjects */
/** @var \Framework\Support\LinkGenerator $link */
?>
<section class="subjects-page">

    <div class="page-heading">
        <h1>Moje predmety</h1>
        <a class="primary-button" href="<?= $link->url('subject.add') ?>">
            + Nový predmet
        </a>
    </div>

    <section class="task-section" aria-label="Zoznam predmetov">

        <div class="task-list-heading subject-row">
            <span>Predmet</span>
            <span>Skratka</span>
            <span>Semester</span>
            <span>Akcie</span>
        </div>

        <?php if (empty($subjects)) { ?>
            <p class="empty-state">Zatiaľ nemáš pridané žiadne predmety.</p>
        <?php } ?>

        <?php foreach ($subjects as $subject) { ?>
            <article class="task-row subject-row">
                <div class="task-name">
                    <h3><?= e($subject->getName()) ?></h3>
                </div>

                <div class="task-field">
                    <span class="mobile-label">Skratka:</span>
                    <span class="status"><?= e($subject->getCode()) ?></span>
                </div>

                <div class="task-field">
                    <span class="mobile-label">Semester:</span>
                    <?= e($subject->getSemester()) ?>.
                </div>

                <div class="task-actions">
                    <a class="icon-button"
                       href="<?= $link->url('subject.edit', ['id' => $subject->getId()]) ?>"
                       aria-label="Upraviť predmet" title="Upraviť">✎</a>

                    <form method="post" action="<?= $link->url('subject.delete') ?>"
                          onsubmit="return confirm('Naozaj chceš odstrániť tento predmet?');">
                        <input type="hidden" name="id" value="<?= e($subject->getId()) ?>">
                        <button type="submit" aria-label="Odstrániť predmet" title="Odstrániť">×</button>
                    </form>
                </div>
            </article>
        <?php } ?>

    </section>

</section>
