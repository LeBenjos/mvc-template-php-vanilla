# Hexagonal architecture template for vanilla PHP projects.

## Why ?
---
As part of my web developer studies, we often have the opportunity to code in groups on full-stack projects. For the backend, we are required to use PHP, and for the frontend, we utilize HTML, CSS, and JS, all in vanilla form. To code efficiently as a group and save time by avoiding starting from scratch for each project, I have created an MVC model that evolved into a hexagonal architecture.

## For who ?
---
The goal is for our group and others to be able to reuse this template at the beginning of each new full-stack project. It also serves as a solid starting point for my personal projects.

## After ?
---
This template will continue to evolve as I progress in the field of web development.

## How use this template ?
---
TODO... git clone ...

On startup on your project terminal : 

```bash
    php composer.phar dump-autoload
```

### Config URI :
---
In **/Applications/MAMP/conf/apache/extra/httpd-vhosts.conf** :
```conf
    # Optionnal -> if is not working
    <VirtualHost *:80>
        ServerAdmin webmaster@dummy-host.example.com
        DocumentRoot "/Applications/MAMP/htdocs"
        ServerName localhost
        ErrorLog "logs/localhost-error_log"
        CustomLog "logs/localhost-access_log" common
    </VirtualHost>

    # Write this :
    <VirtualHost *:80>
        ServerAdmin webmaster@dummy-host.example.com
        DocumentRoot "/Applications/MAMP/htdocs/hexagonal-template-php-vanilla/public"
        ServerName template.com
        ErrorLog "logs/template.com-error_log"
        CustomLog "logs/template.com-access_log" common
    </VirtualHost>
```

In **/Applications/MAMP/conf/apache/httpd.conf** :
```conf
    # Virtual hosts
    Include /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf # Uncomment this line
```

Open a terminal and write : "sudo vim /etc/hosts"
```bash
    #Write a new line
    #Local ip       Your fake domain name
    127.0.0.1       template.com
```

Reboot Apache and now you can go on **http://template.com/** or **http://localhost/hexagonal-template-php-vanilla/public/template** or **http://localhost/mvc-template-php-vanilla/public/?p=template** it's same !

## Thanks
Thanks to Renaud Berthier and Hugo Medina for their valuable assistance in both this project and my learning.