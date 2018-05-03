FROM amazonlinux:2

RUN yum -y update

RUN yum -y install git zip unzip

RUN amazon-linux-extras install -y lamp-mariadb10.2-php7.2
RUN yum install -y httpd \
                   php \
                   php-cli \
                   php-gd \
                   php-mbstring \
                   php-mcrypt \
                   php-mysqlnd \
                   php-pdo \
                   php-xml \
                   php-xdebug \
                   php-memcached \
                   php-devel
RUN sed -i -e "s|^;date.timezone =.*$|date.timezone = Asia/Tokyo|" /etc/php.ini

RUN curl -s https://getcomposer.org/installer | php
RUN mv ./composer.phar /usr/local/bin/composer

RUN cp /usr/share/zoneinfo/Japan /etc/localtime

EXPOSE 80
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]
