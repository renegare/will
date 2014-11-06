clean:
	rm -rf vendor/

setup:
	composer install

uni-test:
	vendor/bin/phpunit

test: clean setup uni-test
