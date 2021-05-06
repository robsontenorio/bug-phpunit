# PHPUNIT ISSUE
https://github.com/sebastianbergmann/phpunit/issues/4664

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

# Enable pcov to get coverage
# Coverage report is set on `phpunit.xml`
php -d pcov.enabled=1 ./vendor/bin/phpunit
```
