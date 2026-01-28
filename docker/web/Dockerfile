FROM php:8.2-apache

ENV TZ=Asia/Tokyo

RUN apt-get update \
  && apt-get install -y --no-install-recommends \
       libpq-dev \
  && docker-php-ext-install pdo_pgsql pgsql \
  && a2enmod rewrite \
  && apt-get clean \
  && rm -rf /var/lib/apt/lists/*

COPY php.ini /usr/local/etc/php/php.ini
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
