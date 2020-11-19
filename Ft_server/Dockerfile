FROM    debian:buster

RUN apt -y update && apt -y upgrade &&\
    apt install -y nginx lsb-release wget tar gnupg openssl php-fpm php-common php-mysql php-mbstring

RUN mkdir /etc/nginx/ssl
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/nginx/ssl/nginx.key -out \
/etc/nginx/ssl/nginx.crt -subj "/C=AP/ST=Apex/L=Apex/O=Apex/OU=Apex/CN=Apex"

COPY srcs/wordpress-5.5.3.tar.gz /
RUN tar -xzvf wordpress-5.5.3.tar.gz
RUN rm /var/www/html/index.nginx-debian.html && mv wordpress/* /var/www/html/
COPY srcs/wp-config.php /var/www/html/

COPY srcs/start.sh /
RUN chmod 755 /start.sh

RUN mkdir /var/www/html/phpmyadmin
COPY srcs/phpMyAdmin-5.0.4-all-languages.tar.gz /
RUN tar -xzvf phpMyAdmin-5.0.4-all-languages.tar.gz --strip-components=1 -C /var/www/html/phpmyadmin
COPY srcs/config.inc.php /var/www/html/phpmyadmin/

RUN chmod 660 /var/www/html/phpmyadmin/config.inc.php
RUN chown -R www-data:www-data /var/www/html/phpmyadmin
RUN chown -R www-data /var/www/html

COPY srcs/default /etc/nginx/sites-available/
COPY srcs/wp_db.sql /

CMD bash /start.sh

EXPOSE 80 443