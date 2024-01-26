# LVS-Website

Die Applikation ist mit dem MVC-Framework `Laravel` in Php gebaut. Das Frontend ist mit React.js und Tailwind.css umgesetzt, 
diese werden über Inertia.js mit Laravel verbunden.
Außerdem ist eine PostgreSQL Datenbank vorgesehen, allerdings kann diese beliebig geändert werden (siehe `database.php`). 
Eine E-Mail-Anbindung mit `Brevo` ist auch vordefiniert.

Sämtliche Credentials sind in `.env` definiert.


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
7. [http://localhost:8000/register](http://localhost:8000/register) - Anmeldung
8. [http://localhost:8000/admiin](http://localhost:8000/admin) - Adminpanel
9. 
#### Starten & Stoppen
- `make start` - startet alle Container
- `make stop` - stoppt alle Container



### Deployment
*Currently under construction*

Weitere wichtige Befehle wären:
- `make attach` - an container anhängen, um alle artisan Befehle ausführen zu können
- `make migrate` - Datenbank-Migrationen ausführen
- `php artisan make:[model|migration|controller|component|policy|...]`zum Erstellen neuer Klassen

Überblick für Nicht-Laravel-Nutzer
---
- Tabellen sind in `database/migrations` definiert
- Über *Models* wird mit der Datenbank interagiert `app/Models`
- *Controller* und *Services* beinhalten die eigentliche Logik
- *Views* stellen die UI bereit



Ergo HES! was here :)
