---
title: certificate.htb
tags: service
---

### certificate.htb

#### service alias

- certificate.htb

#### location

[[certificate.htb/certificate.htb]]

On port 80

#### information

register with 

```http
GET / HTTP/1.1
Host: baidu.com
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/
```


```http
POST /register.php HTTP/1.1
Host: certificate.htb
Content-Length: 144
Cache-Control: max-age=0
Origin: http://certificate.htb
Content-Type: application/x-www-form-urlencoded
Upgrade-Insecure-Requests: 1
User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7
Referer: http://certificate.htb/register.php
Accept-Encoding: gzip, deflate, br
Accept-Language: zh-CN,zh;q=0.9
Cookie: PHPSESSID=fuckthisshitphp1234
Connection: keep-alive

first_name=hello&email=elwin.jones2%40corporate.htb&password=password&password-confirm=password&last_name=world&username=fuckyousir&role=student
```

upload zip on /upload.php?s_id=36

upload  change to 1.php

reverse shell! 

[[xamppuser]]


#### vulnerabilities / exploits
