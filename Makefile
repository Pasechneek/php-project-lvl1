install:
	composer install
	sudo apt install php8.0-gmp

brain-games:
	./bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even:
	./bin/brain-even

dump: 
	composer dump-autoload --optimize

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression

brain-prime:
	./bin/brain-prime