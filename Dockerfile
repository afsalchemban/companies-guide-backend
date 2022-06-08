FROM php:8.1-fpm-alpine

RUN apk add --no-cache nginx wget

RUN apk add icu-dev 

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN apk add --no-cache \
        supervisor

RUN docker-php-ext-configure intl && docker-php-ext-install intl

RUN mkdir -p /run/nginx

COPY docker/nginx.conf /etc/nginx/nginx.conf

ADD supervisor/supervisord.conf /etc/

RUN mkdir -p /app
COPY . /app

RUN sh -c "wget http://getcomposer.org/composer.phar && chmod a+x composer.phar && mv composer.phar /usr/local/bin/composer"
RUN cd /app && \
    /usr/local/bin/composer install

RUN chown -R www-data: /app

CMD ["supervisord", "-c", "/etc/supervisord.conf"]

CMD sh /app/docker/startup.sh