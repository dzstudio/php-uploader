# php-uploader

## A simple upload tool to upload file to server.
## Written in PHP.
## Running on Apache or Nginx with PHP.

# Mac
open /etc/apache2
编辑httpd.conf, 去掉#LoadModule ...php.so文件前的#
搜索DocumentRoot将服务器目录"/library/webserver/documents/"替换成自己的目录"/Users/yuangong/Development/Server"(可任意定义)
进入服务器目录, 新建info.php, 内容为<?php phpinfo(); ?>
sudo apachectl start 启动服务器
