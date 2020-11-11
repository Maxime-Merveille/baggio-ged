
# Baggio GED

## Concepts

Ce projet est un TP à long terme, à participation étendue et collaborative.
Tous les élèves peuvent et devraient y participer.
Même les enseignants peuvent et devraient y participer.
Sur ce projet, nous sommes tous développeurs et clients.

## Objectif de l'application

C'est une GED : une gestion électronique de documents.
En réalité, nous allons gérer tous types de médias.
Ce projet est avant tout pédagogique :
nous allons introduire et analyser toutes sortes de failles,
mauvaises pratiques et autres petites déceptions quotidiennes
afin de les résoudre et d'y remédier.

## Issues

Les issues sont à utiliser pour lister les bugs et améliorations souhaitées.

## Flow de développement

Lorsqu'un développeur souhaite prendre en charge un ticket, il s'assigne dessus.
Le dépôt a été réglé pour ne pas permettre de modifications en direct. Vous DEVEZ donc créer un fork avant tout, pour pouvoir travailler dessus.
Une pull request doit être créée assez rapidement à partir de ce fork,
mais DOIT être verrouillée (marquée WIP).
Tout le travail doit être réalisé sur les forks.
Une fois que vous êtes satisfait, déverrouillez la pull request et demandez une review !

## Installation de l'application

Pour tester et faire tourner ce site web en local, vous aurez besoin:
* soit d'un système (même virtualisé) Linux, avec Apache (ou NGinx), MySQL et PHP d'installé ([un exemple de stack pouvant être utilisé se trouve ici](https://wiki.debian.org/fr/Lamp))
* soit de l'installation d'une stack WAMP ou MAMP sur Windows ou sur MacOSX (par exemple, [WampServer](https://www.wampserver.com/) sur Windows)

Une fois votre stack installée, clonez votre fork en local pour commencer à travailler dessus et à le tester.

## Configuration de l'application

Un fichier config.local.php doit être créé à la racine de l'application,
définissant les constantes suivantes:
MYSQL_HOST : le serveur de base de données (localhost, généralement)
MYSQL_DB : le nom de la base de données
MYSQL_USER : l'utilisateur
MYSQL_PWD : le mot de passe

Rappel : une constante est définie en PHP comme suit:
```php
define('NOM_CONSTANTE', 'valeur de la constante');
```
