FROM php:8.0.3-fpm-alpine3.13

COPY .docker/php /usr/local/etc/php
COPY . /src
WORKDIR /src

RUN apk add --update --no-cache --virtual .build-deps $PHPIZE_DEPS 
RUN apk add bash
RUN pecl install pcov
RUN docker-php-ext-enable pcov

RUN curl -sS https://getcomposer.org/installer  | php -- --install-dir=/usr/bin --filename=composer 