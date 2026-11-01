    <section class="tasks-page">

    <div class="page-heading">
        <h1>Moje úlohy</h1>
        <button class="primary-button" type="button">
            + Nová úloha
        </button>
    </div>

    <section class="filters">
        <h2>Filtrovanie úloh</h2>

        <div class="filter-grid">
            <label>
                Predmet:
                <select>
                    <option>Všetky</option>
                    <option>Databázy</option>
                    <option>Vývoj webových aplikácií</option>
                    <option>Matematika</option>
                </select>
            </label>

            <label>
                Stav:
                <select>
                    <option>Všetky</option>
                    <option>Dokončené</option>
                    <option>Rozpracované</option>
                    <option>Nedokončené</option>
                </select>
            </label>

            <label>
                Hľadať:
                <input type="search" placeholder="Hľadať úlohu...">
            </label>
        </div>
    </section>

    <section class="task-section" aria-label="Zoznam úloh">

        <div class="task-list-heading">
            <span>Úloha / predmet</span>
            <span>Termín</span>
            <span>Stav</span>
            <span>Akcie</span>
        </div>

        <article class="task-row">
            <div class="task-name">
                <h3>Semestrálna práca</h3>
                <p>Databázy</p>
            </div>

            <div class="task-field">
                <span class="mobile-label">Termín:</span>
                15. 12. 2026
            </div>

            <div class="task-field">
                <span class="mobile-label">Stav:</span>
                <span class="status">Rozpracované</span>
            </div>

            <div class="task-actions">
                <button type="button" aria-label="Upraviť úlohu">✎</button>
                <button type="button" aria-label="Odstrániť úlohu">×</button>
            </div>
        </article>

        <article class="task-row">
            <div class="task-name">
                <h3>Projekt VAII</h3>
                <p>Vývoj webových aplikácií</p>
            </div>

            <div class="task-field">
                <span class="mobile-label">Termín:</span>
                20. 12. 2026
            </div>

            <div class="task-field">
                <span class="mobile-label">Stav:</span>
                <span class="status">Nedokončené</span>
            </div>

            <div class="task-actions">
                <button type="button" aria-label="Upraviť úlohu">✎</button>
                <button type="button" aria-label="Odstrániť úlohu">×</button>
            </div>
        </article>

        <article class="task-row">
            <div class="task-name">
                <h3>Domáca úloha</h3>
                <p>Matematika</p>
            </div>

            <div class="task-field">
                <span class="mobile-label">Termín:</span>
                10. 12. 2026
            </div>

            <div class="task-field">
                <span class="mobile-label">Stav:</span>
                <span class="status">Dokončené</span>
            </div>

            <div class="task-actions">
                <button type="button" aria-label="Upraviť úlohu">✎</button>
                <button type="button" aria-label="Odstrániť úlohu">×</button>
            </div>
        </article>

    </section>

    <p class="hint">
        Kliknutím na úlohu sa otvorí detail s prílohami.
    </p>

</section>
