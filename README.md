# Hotel Menton
Site internet du fameux Hotel Bogdanoff

# Pré-Requis 
- PHP 7.3.xx
- MariaDB 10.4.xx
- PHPMyAdmin 4.9.x

# Installation 
○ Clôner le repository : 
```bash
git clone https://github.com/...................
```

○ Créer un config.conf
- Copier 
``` config_sample.conf``` dans le dossier hotel/php
- Renommer ``` config_sample.conf``` en ``` config.conf```
- Remplacer les identifiants de connexion par :

``` 
define('SERVER', 'localhost');
define('NAME', 'joueur2noblat');
define('USER', '[user]');
define('PASSWD', '[mot de passe]');
  $server = 'localhost';
  $name ='joueur2noblat'; 
  $user='[user]';
  $passwd='[mot de passe]';
```
    
○ Dans PHPMyAdmin, importer :
```
create_bdd.sql
...
...

```
