#!/bin/bash
export DEBIAN_FRONTEND=noninteractive

wget http://repo.mysql.com/mysql-apt-config_0.8.15-1_all.deb
echo mysql-apt-config mysql-apt-config/select-server           select mysql-5.7          | debconf-set-selections
dpkg -i mysql-apt-config_0.8.15-1_all.deb
apt update
debconf-set-selections <<< "mysql-community-server mysql-community-server/root-pass password apex"
debconf-set-selections <<< "mysql-community-server mysql-community-server/re-root-pass password apex"
apt install mysql-community-server -y
apt update
service mysql start
mysql --user=root --password=apex -Bse "CREATE DATABASE wp_db; GRANT ALL PRIVILEGES ON *.* to 'apex'@'localhost' IDENTIFIED BY 'apex'; FLUSH PRIVILEGES;"
mysql --user=root --password=apex wp_db < wp_db.sql
mysql < /var/www/html/phpmyadmin/sql/create_tables.sql --user=root --password=apex
mysql --user=root --password=apex -Bse "GRANT ALL PRIVILEGES ON phpmyadmin.* TO 'apex'@'localhost' IDENTIFIED BY 'apex';FLUSH PRIVILEGES;"
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp
chown -R www-data:www-data /var/www/html/phpmyadmin/tmp
service php7.3-fpm start
nginx -g 'daemon off;'