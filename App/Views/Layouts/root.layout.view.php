
<?php
/** @var string $contentHTML */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudyFlow</title>
    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
</head>
<body>
<div class="app">

    <header class="header">
        <a class="brand" href="<?= $link->url('home.index') ?>">
            StudyFlow
        </a>
        <span class="account">Študent ▾</span>
    </header>

    <div class="workspace">
        <nav class="sidebar" aria-label="Hlavná navigácia">
            <h2>Navigácia</h2>

            <a class="nav-link"
               href="<?= $link->url('home.index') ?>">
                Dashboard
            </a>

            <a class="nav-link" href="#">Predmety</a>

            <a class="nav-link"
               href="<?= $link->url('home.ulohy') ?>">
                Úlohy
            </a>

            <a class="nav-link" href="#">Kalendár</a>
            <a class="nav-link" href="#">Profil</a>
        </nav>

        <main class="content">
            <?= $contentHTML ?>
        </main>
    </div>

    <footer class="footer">
        StudyFlow · pätička
    </footer>

</div>
</body>
</html>
