FROM php:8-fpm

ENV PORT=9000

RUN sed -i 's/9000/${PORT}/g' /usr/local/etc/php-fpm.d/zz-docker.conf \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli