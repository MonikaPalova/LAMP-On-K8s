FROM php:8.0-apache

RUN apt-get update \
  && docker-php-ext-install mysqli \
  && apt-get clean \
  && rm -rf /var/cache/apt/archives

COPY src/ /var/www/html/
