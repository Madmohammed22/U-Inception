#!/bin/bash



service mysql start 


echo "CREATE DATABASE IF NOT EXISTS $DB_NAME_s ;" > db.sql
echo "CREATE USER IF NOT EXISTS '$DB_USE_s'@'%' IDENTIFIED BY '$DB_PASSWORD_s' ;" >> db.sql
echo "GRANT ALL PRIVILEGES ON $DB_NAME_s.* TO '$DB_USE_s'@'%' ;" >> db.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '12345' ;" >> db.sql
echo "FLUSH PRIVILEGES;" >> db.sql

mysql < db1.sql

kill $(cat /var/run/mysqld/mysqld.pid)

mysqld