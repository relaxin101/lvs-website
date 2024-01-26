sail=./vendor/bin/sail

up:
	$(sail) up
down:
	$(sail) down

start:
	$(sail) start
	$(sail) npm run dev &

fe:
	$(sail) npm run dev

attach:
	$(sail) exec lvs bash

stop:
	$(sail) stop

migrate:
	$(sail) artisan migrate:fresh
	$(sail) aritsan db:seed

