# php-uploader

## A simple upload tool to upload file to server.
## Written in PHP.
## Running on Apache or Nginx with PHP.

# Mac
1. open /etc/apache2
2. 编辑httpd.conf, 去掉#LoadModule ...php.so文件前的#
3. 搜索DocumentRoot将服务器目录"/library/webserver/documents/"替换成自己的目录"/Users/yuangong/Development/Server"(可任意定义)
4. 进入服务器目录, 新建info.php, 内容为<?php phpinfo(); ?>
5. sudo apachectl start 启动服务器
