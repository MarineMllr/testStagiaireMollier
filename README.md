# À propos du test Stagiaire 2018 © CoPark

Étudiante : MOLLIER Marine

L’objectif de ce test est de créer un site web permettant d'afficher les parkings disponibles sur une page et, de proposer un formulaire d'ajout sur une autre page. Tout ce projet sera sur Symfony.

Ce planning présentera à termes les fonctionnalités suivantes:

- Possibilité pour le visiteur d'ajouter un parking dans la base de données
- Affichage des parkings disponibles dans l'application

## Comment le faire tourner ?

### Dépendances

Les dépendances seront installées lors de la configuration du projet, et sont accessibles à partir des fichiers composer.json. Voici les principales dépendances que le projet utilise:

- composer: *latest*,
- PHP: ≥ *7.2*,
- Symfony: *1.0*

### Faire tourner le projet

#### Wamp Server

Pour ce test, j'ai fais le choix d'opter pour Wamp pour héberger en localhost mon site web. Si vous désirez faire de même, télécharger Wamp et placer le projet qui se trouve dans mon dépôt Github dans le dossier C:\wamp64\www\

#### composer

Pour commencer, notre projet a des « dépendances ». Elles doivent être chargées au travers des gestionnaires dont le projet a besoin. Nous devons ainsi lancer les commandes suivantes:

```
php composer.phar install
```

### base de données MySQL

Pour que la base de données soit opérationnelle, rendez vous d'abord dans le fichier app/config/parameters.yml et renseignez les lignes suivantes :

```php
database_name: Parking    # à remplacer par le nom de votre db
database_user: root   # à remplacer par l’utilisateur de votre db
database_password: null    # à remplacer par le mot de passe de votre db
```

Une fois cela fait, vous n'avez plus qu'à créer votre base de données à partir de l'entité Parking stockée dans src/AppBundle/Entity/Parking en tapant la commande suivante (placez-vous au préalable dans le dossier du projet lorsque vous êtes sur le cmd)

```
php app/console doctrine:database:create
```
