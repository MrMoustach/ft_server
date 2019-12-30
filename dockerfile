FROM debian:buster
EXPOSE 80 443
RUN export DEBIAN_FRONTEND=noninteractive
RUN apt-get -y update \
    && apt-get install -y locales \
    && apt-get install -y git curl wget zip unzip \
    && apt-get install -y software-properties-common \
    && add-apt-repository -y ppa:ondrej/php
RUN apt-get install -y nginx wget apt-transport-https ca-certificates gnupg1 gnupg
RUN apt-get install -y  php7.3-cli php7.3-fpm php7.3-json php7.3-pdo php7.3-mysql php7.3-zip php7.3-gd  php7.3-mbstring php7.3-curl php7.3-xml php7.3-bcmath php7.3-json
COPY srcs/nginx.crt /etc/ssl/nginx/
COPY srcs/nginx.key /etc/ssl/nginx/
COPY srcs/wordpress/ /var/www/html/wordpress
COPY srcs/wordpress.sql /wordpress.sql
COPY srcs/default /etc/nginx/sites-available/default
COPY srcs/phpmyadmin /var/www/html/wordpress/phpmyadmin
ADD srcs/mysql-apt-config_0.8.10-1_all.deb /
COPY srcs/config.sh /config.sh
RUN sh config.sh
COPY srcs/start.sh /start.sh
CMD [ "sh", "start.sh" ]