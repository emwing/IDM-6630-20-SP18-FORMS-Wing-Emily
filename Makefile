.PHONY: data start stop

data:
	docker exec WING-Emily-DB bash -c "mysqldump -u idm6630 pidm6630 --all-databases > /docker-entrypoint-initdb.d/data.sql"

start:
	docker-compose up

stop:
	docker exec WING-Emily-DB bash -c "mysqldump -u idm6630 pidm6630 --all-databases > /docker-entrypoint-initdb.d/data.sql" && docker-compose down
