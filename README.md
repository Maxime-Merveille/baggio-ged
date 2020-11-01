
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
Une fois assigné,
il DOIT créer une branche dont le nom commence par le numéro de l'issue.
La branche doit être push aussi vite que possible, afin d'être visible sur Github.
Une pull request doit être créée assez rapidement à partir de cette projet,
mais DOIT être verrouillée (marquée WIP).
Tout le travail doit être réalisé sur cette branche.

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
