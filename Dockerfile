FROM archlinux:latest

RUN pacman -Syy              \
    --noconfirm              \
    php                      \ 
    php-apache  php-gd       \
    apache sqlite php-sqlite \
    php-memcached php-pgsql  \
    mariadb-clients wget     \
    php-intl php-sodium unzip postgresql-libs 


RUN rm -rfv /etc/httpd && mkdir -pv /etc/httpd
ADD ./httpd /etc/httpd/
RUN find /etc/httpd

RUN rm -rfv /etc/php && mkdir -pv /etc/php
ADD ./php /etc/php
RUN find /etc/php

RUN mkdir -pv /srv/http/public
ADD ./code    /srv/http/public

WORKDIR /srv/http

RUN find /srv/http/public

EXPOSE 80
ADD ./entrypoint.sh /entrypoint.sh
RUN chmod 755 /entrypoint.sh 
RUN chown -R http:http /srv/http

ENTRYPOINT  ["/entrypoint.sh"]
