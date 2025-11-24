---
title: certificate.htb
type: host
---

### certificate.htb

#### host location

```yaml host
- hostname: certificate.htb
  is_dc: true
  ip: 10.10.11.71
  alias: ["dc01.certificate.htb"] # if is DC, please set the dc hostname as the first alias, such as ["dc01.example.com"]
```

```
set_current_host certificate.htb
```

#### ports

##### 80

#### information

1. Linux/Windows
2. Kernel version
3. ...

##### Nmap

Nmap result 

```
PORT      STATE SERVICE       REASON  VERSION
53/tcp    open  domain        syn-ack Simple DNS Plus
80/tcp    open  http          syn-ack Apache httpd 2.4.58 (OpenSSL/3.1.3 PHP/8.0.30)
|_http-jsonp-detection: Couldn't find any JSONP endpoints.
| vulners: 
|   cpe:/a:apache:http_server:2.4.58: 
|       CVE-2024-38476  9.8     https://vulners.com/cve/CVE-2024-38476
|       CVE-2024-38474  9.8     https://vulners.com/cve/CVE-2024-38474
|       A5425A79-9D81-513A-9CC5-549D6321897C    9.8     https://vulners.com/githubexploit/A5425A79-9D81-513A-9CC5-549D6321897C  *EXPLOIT*
|       CVE-2024-38475  9.1     https://vulners.com/cve/CVE-2024-38475
|       5418A85B-F4B7-5BBD-B106-0800AC961C7A    9.1     https://vulners.com/githubexploit/5418A85B-F4B7-5BBD-B106-0800AC961C7A  *EXPLOIT*
|       2EF14600-503F-53AF-BA24-683481265D30    9.1     https://vulners.com/githubexploit/2EF14600-503F-53AF-BA24-683481265D30  *EXPLOIT*
|       0486EBEE-F207-570A-9AD8-33269E72220A    9.1     https://vulners.com/githubexploit/0486EBEE-F207-570A-9AD8-33269E72220A  *EXPLOIT*
|       B0A9E5E8-7CCC-5984-9922-A89F11D6BF38    8.2     https://vulners.com/githubexploit/B0A9E5E8-7CCC-5984-9922-A89F11D6BF38  *EXPLOIT*
|       CVE-2024-38473  8.1     https://vulners.com/cve/CVE-2024-38473
|       249A954E-0189-5182-AE95-31C866A057E1    8.1     https://vulners.com/githubexploit/249A954E-0189-5182-AE95-31C866A057E1  *EXPLOIT*
|       23079A70-8B37-56D2-9D37-F638EBF7F8B5    8.1     https://vulners.com/githubexploit/23079A70-8B37-56D2-9D37-F638EBF7F8B5  *EXPLOIT*
|       E606D7F4-5FA2-5907-B30E-367D6FFECD89    7.5     https://vulners.com/githubexploit/E606D7F4-5FA2-5907-B30E-367D6FFECD89  *EXPLOIT*
|       CVE-2024-40898  7.5     https://vulners.com/cve/CVE-2024-40898
|       CVE-2024-39573  7.5     https://vulners.com/cve/CVE-2024-39573
|       CVE-2024-38477  7.5     https://vulners.com/cve/CVE-2024-38477
|       CVE-2024-38472  7.5     https://vulners.com/cve/CVE-2024-38472
|       CVE-2024-27316  7.5     https://vulners.com/cve/CVE-2024-27316
|       CNVD-2024-20839 7.5     https://vulners.com/cnvd/CNVD-2024-20839
|       CDC791CD-A414-5ABE-A897-7CFA3C2D3D29    7.5     https://vulners.com/githubexploit/CDC791CD-A414-5ABE-A897-7CFA3C2D3D29  *EXPLOIT*
|       B5E74010-A082-5ECE-AB37-623A5B33FE7D    7.5     https://vulners.com/githubexploit/B5E74010-A082-5ECE-AB37-623A5B33FE7D  *EXPLOIT*
|       4B14D194-BDE3-5D7F-A262-A701F90DE667    7.5     https://vulners.com/githubexploit/4B14D194-BDE3-5D7F-A262-A701F90DE667  *EXPLOIT*
|       45D138AD-BEC6-552A-91EA-8816914CA7F4    7.5     https://vulners.com/githubexploit/45D138AD-BEC6-552A-91EA-8816914CA7F4  *EXPLOIT*
|       CVE-2023-38709  7.3     https://vulners.com/cve/CVE-2023-38709
|       CNVD-2024-36395 7.3     https://vulners.com/cnvd/CNVD-2024-36395
|       95499236-C9FE-56A6-9D7D-E943A24B633A    6.9     https://vulners.com/githubexploit/95499236-C9FE-56A6-9D7D-E943A24B633A  *EXPLOIT*
|       2C119FFA-ECE0-5E14-A4A4-354A2C38071A    6.9     https://vulners.com/githubexploit/2C119FFA-ECE0-5E14-A4A4-354A2C38071A  *EXPLOIT*
|       CVE-2024-24795  6.3     https://vulners.com/cve/CVE-2024-24795
|       CVE-2024-39884  6.2     https://vulners.com/cve/CVE-2024-39884
|_      CVE-2024-36387  5.4     https://vulners.com/cve/CVE-2024-36387
|_http-dombased-xss: Couldn't find any DOM based XSS.
|_http-vuln-cve2017-1001000: ERROR: Script execution failed (use -d to debug)
| http-enum: 
|   /login.php: Possible admin folder
|_  /icons/: Potentially interesting folder w/ directory listing
|_http-litespeed-sourcecode-download: Request with null byte did not work. This web server might not be vulnerable
|_http-server-header: Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30
| http-trace: TRACE is enabled
| Headers:
| Date: Sun, 01 Jun 2025 18:47:42 GMT
| Server: Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.0.30
| Connection: close
| Transfer-Encoding: chunked
|_Content-Type: message/http
|_http-phpself-xss: ERROR: Script execution failed (use -d to debug)
|_http-wordpress-users: [Error] Wordpress installation was not found. We couldn't find wp-login.php
| http-slowloris-check: 
|   VULNERABLE:
|   Slowloris DOS attack
|     State: LIKELY VULNERABLE
|     IDs:  CVE:CVE-2007-6750
|       Slowloris tries to keep many connections to the target web server open and hold
|       them open as long as possible.  It accomplishes this by opening connections to
|       the target web server and sending a partial request. By doing so, it starves
|       the http server's resources causing Denial Of Service.
|       
|     Disclosure date: 2009-09-17
|     References:
|       http://ha.ckers.org/slowloris/
|_      https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2007-6750
| http-fileupload-exploiter: 
|   
|_    Couldn't find a file-type field.
|_http-stored-xss: Couldn't find any stored XSS vulnerabilities.
| http-csrf: 
| Spidering limited to: maxdepth=3; maxpagecount=20; withinhost=bogon
|   Found the following possible CSRF vulnerabilities: 
|     
|     Path: http://bogon:80/
|     Form id: 
|_    Form action: https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01
88/tcp    open  kerberos-sec  syn-ack Microsoft Windows Kerberos (server time: 2025-06-01 18:46:42Z)
135/tcp   open  msrpc         syn-ack Microsoft Windows RPC
139/tcp   open  netbios-ssn   syn-ack Microsoft Windows netbios-ssn
389/tcp   open  ldap          syn-ack Microsoft Windows Active Directory LDAP (Domain: certificate.htb0., Site: Default-First-Site-Name)
445/tcp   open  microsoft-ds? syn-ack
464/tcp   open  kpasswd5?     syn-ack
593/tcp   open  ncacn_http    syn-ack Microsoft Windows RPC over HTTP 1.0
636/tcp   open  ssl/ldap      syn-ack Microsoft Windows Active Directory LDAP (Domain: certificate.htb0., Site: Default-First-Site-Name)
5985/tcp  open  http          syn-ack Microsoft HTTPAPI httpd 2.0 (SSDP/UPnP)
|_http-jsonp-detection: Couldn't find any JSONP endpoints.
|_http-server-header: Microsoft-HTTPAPI/2.0
|_http-dombased-xss: Couldn't find any DOM based XSS.
|_http-stored-xss: Couldn't find any stored XSS vulnerabilities.
|_http-litespeed-sourcecode-download: Request with null byte did not work. This web server might not be vulnerable
|_http-wordpress-users: [Error] Wordpress installation was not found. We couldn't find wp-login.php
|_http-csrf: Couldn't find any CSRF vulnerabilities.
9389/tcp  open  mc-nmf        syn-ack .NET Message Framing
49667/tcp open  msrpc         syn-ack Microsoft Windows RPC
49691/tcp open  ncacn_http    syn-ack Microsoft Windows RPC over HTTP 1.0
49692/tcp open  msrpc         syn-ack Microsoft Windows RPC
49693/tcp open  msrpc         syn-ack Microsoft Windows RPC
49709/tcp open  msrpc         syn-ack Microsoft Windows RPC
49721/tcp open  msrpc         syn-ack Microsoft Windows RPC
49764/tcp open  msrpc         syn-ack Microsoft Windows RPC
Service Info: Hosts: certificate.htb, DC01; OS: Windows; CPE: cpe:/o:microsoft:windows

Host script results:
|_samba-vuln-cve-2012-1182: Could not negotiate a connection:SMB: Failed to receive bytes: ERROR
|_smb-vuln-ms10-061: Could not negotiate a connection:SMB: Failed to receive bytes: ERROR
|_smb-vuln-ms10-054: false
```

#### vulnerabilities / exploits

privsec problem with user xxxx and using exploit 

#### related information

##### services

##### users

#### proof

local proof? machine proof? screenshot?
