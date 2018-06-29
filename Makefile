run:
	php bin/console server:start 0.0.0.0:8000
	yarn run encore dev --watch

stop:
	php bin/console server:stop
