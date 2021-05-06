# PCOV

As adviced on PCOV docs the default is `pcov.enabled=0`.

# Build and enter container bash

```bash
docker build --file .docker/Dockerfile -t bug-phpunit .   # Note final "."
docker run -v ${PWD}:/src -it bug-phpunit bash
```

# Install and run

```bash
composer install
php -d pcov.enabled=1 ./vendor/bin/phpunit
```
