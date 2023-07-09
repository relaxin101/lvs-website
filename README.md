# LVS-Website

Die Applikation ist mit dem MVC-Framework `Laravel` in Php gebaut. 
Außerdem ist eine PostgreSQL Datenbank vorgesehen, allerdings kann diese beliebig geändert werden (siehe `database.php`). 
Eine Email-Anbindung mit `Brevo` ist auch vordefiniert.

Sämtliche Credentials sind in `.env` definiert.


Installation
---
Nach heutigem Stand (09.07.2023), wird Laravel 10.14.1 mit php 8.2.8 benutzt.

1. PhP 8.2.8 installieren
2. Composer (php-package-manager) installieren
3. Im Root-Folder `composer install` ausführen

Danach kann die Applikation mit `php artisan serve` gestartet werden
Weitere wichtige Befehle wären:
- `php artisan migrate:fresh`, um die Datenbank zu instanzieren (falls sie noch nicht existiert)
- `php artisan make:[model|migration|controller|component|policy|...]`zum Erstellen neuer Klassen

Überblick für Nicht-Laravel-Nutzer
---
- Tabellen sind in `database/migrations` definiert
- Über *Models* wird mit der Datenbank interagiert `app/Models`
- *Controller* und *Services* beinhalten die eigentliche Logik
- *Views* stellen die UI bereit
