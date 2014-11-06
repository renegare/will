clean:
	rm -rf vendor

uni-test:
	vendor/bin/phpunit

test: clean uni-test
