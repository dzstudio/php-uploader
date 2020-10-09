# php-uploader

## A simple upload tool to upload file to server.
## Written in PHP.
## Running on Apache or Nginx with PHP.

# Mac
1. open /etc/apache2
2. 编辑httpd.conf, 去掉#LoadModule ...php.so文件前的#
3. 搜索DocumentRoot将服务器目录"/library/webserver/documents/"替换成自己的目录"/Users/yuangong/Development/Server"(可任意定义)
4. 进入服务器目录, 新建upload目录, 将本库中的文件复制到该目录下面
5. sudo apachectl start 启动服务器
6. 打开 localhost/upload 进行测试, 页面样式如下。
7. 使用该工具可以让局域网内的任何终端快速的将文件发送至你的电脑，只需将localhost替换成你的局域网IP。

![Example](https://raw.githubusercontent.com/dzstudio/php-uploader/master/example.png)
