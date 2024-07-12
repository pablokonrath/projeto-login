FROM php:7.4-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY ./config /usr/local/etc/php/conf.d/

EXPOSE 80