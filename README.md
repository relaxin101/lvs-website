# LVS-Website

Die Applikation ist mit dem MVC-Framework `Laravel` in Php gebaut. Das Frontend ist mit React.js und Tailwind.css umgesetzt,
diese werden über Inertia.js mit Laravel verbunden. Das Adminpanel wurde mit `Filamentphp` erstellt.
Außerdem ist eine PostgreSQL Datenbank vorgesehen, allerdings kann diese beliebig geändert werden (siehe `database.php`). 
Eine E-Mail-Anbindung mit `Brevo` ist auch vordefiniert.

Sämtliche Configuration & Credentials sind in `.env` definiert.

Todo:
---

- [x] Aufsetzen
- [x] Docker-Container
- [x] Adminpanel & Authentifizierung
- [x] Basics Schulungen, Couleurstudenten, Teilnehmer
- [ ] Teilnehmer mit RelationManager / Anmeldungen
- [ ] Mitarbeiter
- [ ] FileUpload
  nachbauen: [https://www.iankumu.com/blog/laravel-file-upload/](https://www.iankumu.com/blog/laravel-file-upload/)
- [ ] Frontend für Anmeldung
- [ ] Frontend für Fileupload
- [ ] Emails
- [ ] Gruppen
- [ ] 

Installation
---
Nach heutigem Stand (09.07.2023), wird Laravel 10.14.1 mit php 8.2.8 benutzt.

### Development
#### Aufsetzen
1. PhP 8.2.8 installieren
2. Composer (php-package-manager) installieren
3. Im Root-Folder `composer install --ignore-platform-reqs` ausführen
4. `.env` Datei erstellen (`.env.example` duplizieren)
5. Erster Start `make up` ausführen & warten bis alle Container gestartet sind, anschließend `make fe` in anderem Terminal ausführen
6. `make migrate` ausführen
7. [http://localhost/anmeldung](http://localhost/anmeldung) - Anmeldung
8. [http://localhost/admiin](http://localhost:8000/admin) - Adminpanel

#### Starten & Stoppen

- `make start` - startet alle Container und öffnet das Frontend
- `make stop` - stoppt alle Container



### Deployment
*Currently under construction*

Weitere wichtige Befehle wären:
- `make attach` - an container anhängen, um alle artisan Befehle ausführen zu können
- `make migrate` - Datenbank-Migrationen ausführen
- `php artisan make:[model|migration|controller|component|policy|filament-resource...]`zum Erstellen neuer Klassen

Überblick für Nicht-Laravel-Nutzer
---
- Tabellen sind in `database/migrations` definiert
- Über *Models* wird mit der Datenbank interagiert `app/Models`
- In `Filament/Resources` werden die Adminpanel-Views definiert
- Die Anmeldungs-Logik ist in `app/Http/Controllers/AnmeldungController.php` definiert
- Die Anmeldung-Views sind in `resources/js/Pages/Anmeldung` definiert
-

Ergo HES! was here :)
