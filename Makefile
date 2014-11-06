clean:
	rm -rf vendor/

install:
	composer install  --dev --no-interaction --prefer-dist

uni-test:
	vendor/bin/phpunit

test: clean install uni-test
