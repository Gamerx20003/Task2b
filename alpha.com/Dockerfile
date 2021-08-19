FROM php:7.2.1-apache

VOLUME ["/srv/http/"]

RUN pacman -S Syyu
RUN pacman -S apache
RUN pacman -S php


ADD ./creatMOM.php /srv/http/creatMOM.php
ADD ./loginpage.php /srv/http/loginpage.php
ADD ./logoutpage.php /srv/http/logoutpage.php
ADD ./hopage.php /srv/http/hopage.php
ADD ./index.html /srv/http/index.html





