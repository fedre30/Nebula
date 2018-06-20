run:
	php bin/console server:start
	yarn run encore dev --watch

stop:
    php bin/console server:stop