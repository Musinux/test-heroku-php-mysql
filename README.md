Étapes:

- créer un compte sur heroku
- installer le client CLI de heroku
- heroku login
- clonez ce dépot (test web efrei)
- se déplacer avec powershell dans le dossier du dépot
- heroku create
- git push heroku main

=> ça va planter ici parce qu'on a pas de base de données

- aller sur https://elements.heroku.com/addons/cleardb
- rajouter sa carte de crédit sur heroku
- cliquer sur "install cleardb mysql"
- choisir le projet (se baser sur l'url générée par heroku dans le terminal)

- dans powershell, toujours dans le dossier du projet, utiliser la commande "heroku config" pour récupérer la valeur de CLEARDB_DATABASE_URL

le format est:
mysql://identifiant:mot-de-passe@nom-de-domaine/peu-importe

- Ouvrir C:/wamp/apps/phpmysql<version>/config.inc.php
- modifier la variable $cfg['servers'][$i]['host'] = '127.0.0.1'; et remplacer 127.0.0.1 par le nom de domaine qui sera indiqué dans CLEARDB_DATABASE_URL

- de la même manière, changer les variables ['user'] et ['password'] (lignes 32 à 35)

- probablement redémarrer wamp

- accéder via phpmyadmin à la base de données
- créer les tables comme vous le sentez
- c'est tout.
