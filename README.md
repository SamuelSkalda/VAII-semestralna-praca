# StudyFlow - systém na správu študentských povinností

Samuel Škalda

5ZYI33

## Stručný opis projektu
StudyFlow bude webová aplikácia určená pre študentov na organizovanie a správu školských povinností. Jej hlavným cieľom je umožniť študentom evidovať jednotlivé predmety, zadania, projekty, skúšky a termíny ich splnenia na jednom mieste. Aplikácia poskytne prehľad o nadchádzajúcich povinnostiach a umožní sledovať stav ich plnenia.

Registrovaní študenti budú môcť pridávať a spravovať svoje predmety a úlohy, nastavovať termíny, označovať úlohy ako dokončené a prikladať k nim súbory. Súčasťou aplikácie bude prehľadová stránka s najbližšími termínmi a jednoduchý kalendár povinností. Administrátor bude zabezpečovať správu používateľov a dohľad nad obsahom aplikácie.

## Role v projekte
**Návštevník (neprihlásený používateľ):** 
Môže si prezrieť úvodnú stránku aplikácie.
Môže sa zaregistrovať a prihlásiť.

**Študent (registrovaný používateľ):**
Spravuje svoje predmety a školské povinnosti.
Vytvára, upravuje a odstraňuje úlohy.
Sleduje termíny a stav dokončenia úloh.
Nahráva a spravuje prílohy k úlohám.
Má prístup iba k vlastným údajom.

**Administrátor:**
Spravuje registrovaných používateľov.
Môže zobrazovať a spravovať údaje v aplikácii.
Zabezpečuje administráciu systému.

## Prípady použitia podľa rolí
**Návštevník:**
Používateľ sa zaregistruje do aplikácie.
Používateľ sa prihlási do svojho účtu.

**Študent:**
Študent si vytvorí nový predmet.
Študent upraví alebo odstráni existujúci predmet, vytvorí novú úlohu a priradí ju k predmetu, upraví alebo odstráni úlohu,  nastaví termín splnenia úlohy, označí úlohu ako dokončenú, filtruje úlohy podľa predmetu alebo stavu, si zobrazí nadchádzajúce povinnosti. Môže nahrať alebo odstrániť prílohu k úlohe. Študent si zobrazí svoje úlohy v kalendári.

**Administrátor:**
Administrátor zobrazí zoznam používateľov, spravuje používateľské účty a môže kontrolovať a odstraňovať nevhodný obsah.

## Plánované entity
**Používateľ (User)**
 - ID používateľa
 - Meno
 - Email
 - Heslo
 - Rola

Predstavuje registrovaného používateľa aplikácie. Každý používateľ môže vlastniť viacero predmetov.

**Predmet (Subject)**
 - ID predmetu
 - Názov
 - Skratka
 - Semester
 - ID používateľa

Predstavuje vyučovací predmet vytvorený študentom. Ku každému predmetu je možné priradiť viacero úloh.

**Úloha (Task)**
 - ID úlohy
 - Názov>
 - Popis
 - Termín splnenia
 - Stav dokončenia
 - ID predmetu

Predstavuje konkrétnu školskú povinnosť, napríklad zadanie, projekt alebo skúšku.

**Príloha (Attachment)**
 - ID prílohy
 - Názov súboru
 - Cesta k súboru
 - ID úlohy

Predstavuje súbor priložený k úlohe, napríklad dokument so zadaním alebo vypracované riešenie.

## Vzťahy medzi entitami
**Používateľ – Predmet (1):** Jeden používateľ môže mať viacero predmetov, pričom každý predmet patrí jednému používateľovi.

**Predmet – Úloha (1):** Jeden predmet môže obsahovať viacero úloh, pričom každá úloha patrí jednému predmetu.

**Úloha – Príloha (1):** Jedna úloha môže obsahovať viacero príloh, pričom každá príloha patrí jednej úlohe.

## Hlavné stránky aplikácie
**1. Úvodná stránka a prihlásenie** – predstavenie aplikácie, registrácia a prihlásenie používateľa.

**2. Dashboard** – prehľad najbližších termínov, nedokončených úloh a základných štatistík.

**3. Predmety** – zoznam predmetov s možnosťou pridávania, úpravy a odstraňovania.

**4. Úlohy** – zoznam úloh s možnosťou vytvárania, úpravy, mazania, filtrovania a zmeny stavu dokončenia.

**5. Detail úlohy** – zobrazenie podrobných informácií o úlohe a správa priložených súborov.

**6. Kalendár** – zobrazenie školských povinností podľa termínov.

**7. Administrácia** – správa používateľských účtov, prístupná iba administrátorovi.

## Rozdelenie funkcionality
**Základné funkcie**
 - Registrácia, prihlásenie a odhlásenie používateľa.
 - Rozlíšenie rolí študent a administrátor.
 - Správa predmetov (CRUD operácie).
 - Správa úloh (CRUD operácie).
 - Priradenie úloh k predmetom.
 - Nastavenie termínov a stavu dokončenia úloh.
 - Dashboard s prehľadom nadchádzajúcich povinností.
 - Filtrovanie úloh podľa predmetu a stavu pomocou AJAX.
 - Zmena stavu dokončenia úlohy pomocou AJAX bez obnovenia stránky.
 - Nahrávanie, zobrazovanie a odstraňovanie príloh k úlohám.
 - Administrácia používateľských účtov.
 - Validácia používateľských vstupov a zabezpečenie prístupu k údajom.
 - Responzívne používateľské rozhranie.
 

 **Rozširujúce funkcie**
 - Kalendár s mesačným zobrazením úloh.
 - Farebné rozlíšenie úloh podľa priority.
 - Grafické štatistiky dokončených a nedokončených úloh.
 - Vyhľadávanie úloh podľa názvu.
 - Upozornenia na blížiace sa termíny.
 - Možnosť prepnutia medzi svetlým a tmavým režimom.
 - Export zoznamu úloh do PDF.
