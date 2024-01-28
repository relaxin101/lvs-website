sail=./vendor/bin/sail
laravel=laravel.test

up:
	$(sail) up
down:
	$(sail) down

start:
	$(sail) start
	$(sail) npm run dev

fe:
	$(sail) npm run dev

attach:
	$(sail) exec $(laravel) bash

stop:
	$(sail) stop

migrate:
	$(sail) artisan migrate:fresh
	$(sail) artisan db:seed

