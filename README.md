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
1. PhP 8.2.8 installieren
2. Composer (php-package-manager) installieren
3. Im Root-Folder `composer install` ausführen
4. `.env` Datei erstellen (siehe `.env.example`)
5. das docker compose file ausführen `docker compose up` bzw `docker compoose start`
6. In zwei weiteren Terminal sessions `php artisan serve` und  `npm run dev` ausführen
7. [http://localhost:8000](http://localhost:8000) im Browser öffnen

### Deployment
*Currently under construction*




Weitere wichtige Befehle wären:
- `php artisan migrate:fresh`, um die Datenbank zu instanzieren (falls sie noch nicht existiert)
- `php artisan make:[model|migration|controller|component|policy|...]`zum Erstellen neuer Klassen

Überblick für Nicht-Laravel-Nutzer
---
- Tabellen sind in `database/migrations` definiert
- Über *Models* wird mit der Datenbank interagiert `app/Models`
- *Controller* und *Services* beinhalten die eigentliche Logik
- *Views* stellen die UI bereit



Ergo HES! was here :)
