sudo apt-get update 
wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.tar.gz
tar -zxvf phpMyAdmin-5.2.1-all-languages.tar.gz
sudo mv phpMyAdmin-5.2.1-all-languages /usr/share/phpmyadmin 
sudo ln -s /usr/share/phpmyadmin /var/www/application/public