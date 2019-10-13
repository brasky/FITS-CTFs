service mysql restart
mysql --user="root" --password="root" --database="mysql" --execute="GRANT ALL PRIVILEGES ON *.* TO webserver@localhost IDENTIFIED BY 'demoPass#00';"
mysql --user="webserver" --password="demoPass#00" --database="sqlitrainingctf" < /var/www/html/sqlitraining_ctf.sql
service apache2 restart
/usr/sbin/sshd -D