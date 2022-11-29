# **php**

## **instalar**
``` shell
$ sudo apt install php

$ php -v
PHP 8.1.7-1ubuntu3.1 (cli) (built: Nov  2 2022 13:39:03) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.7, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.7-1ubuntu3.1, Copyright (c), by Zend Technologies


$ sudo apt install php8.1-mbstring 
$ sudo apt install php8.1-xmlrpc 
$ sudo apt install php8.1-soap 
$ sudo apt install php8.1-gd 
$ sudo apt install php8.1-xml 
$ sudo apt install php8.1-cli 
$ sudo apt install php8.1-zip 
$ sudo apt install php8.1-bcmath 
$ sudo apt install php8.1-tokenizer

$ sudo apt install php8.1-sqlite3
$ sudo apt install php8.1-mysql

$ sudo apt-get install php8.1-xdebug
$ php --ini | grep xdebug

$ sudo nano /etc/php/8.1/cli/php.ini

$ sudo nano /etc/php/8.1/apache2/conf.d/20-xdebug.ini
    [xdebug]
    xdebug.mode=develop,debug
    xdebug.discover_client_host=1
    xdebug.client_port = 9003  
    xdebug.start_with_request=yes

$ sudo systemctl restart apache2.service


$ php -v
PHP 8.1.7-1ubuntu3.1 (cli) (built: Nov  2 2022 13:39:03) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.7, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.7-1ubuntu3.1, Copyright (c), by Zend Technologies
    with Xdebug v3.1.2, Copyright (c) 2002-2021, by Derick Rethans

$ php -info


```
<br>

---

## **servidor php**
``` shell
$ php -S 127.0.0.1:8080
```
