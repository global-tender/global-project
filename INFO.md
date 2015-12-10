
# nginx vhost example (using php5-fpm):
```
server {
        listen   80;
        server_name xn----7sbchn4accyekm3a.xn--p1ai www.xn----7sbchn4accyekm3a.xn--p1ai;

        root /path/to/repository/root/;
        index index.php index.html index.htm;

        error_page 404 = /404.php;


        location ~* \.(?:ico|css|js|gif|jpe?g|png)$ {
                expires 10d;
                add_header Pragma public;
                add_header Cache-Control "public";
        }

        gzip on;
        gzip_disable "msie6";

        gzip_comp_level 6;
        gzip_min_length 1100;
        gzip_buffers 16 8k;
        gzip_proxied any;
        gzip_types
            text/plain
            text/css
            text/js
            text/xml
            text/javascript
            application/javascript
            application/x-javascript
            application/json
            application/xml
            application/xml+rss;


        # pass the PHP scripts to FastCGI server listening on /var/run/php5-fpm.sock
        location ~ \.php$ {
                try_files $uri /index.php =404;
                fastcgi_pass unix:/var/run/php5-fpm.sock;
                fastcgi_index index.php;
                fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
                include fastcgi_params;
        }

        error_log /path/to/error.log;
        access_log /path/to/access.log;
}
```
