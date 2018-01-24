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
- PHP: ≥ *5.3.9*,
- Symfony: *3.0*,
- MySQL: *5.7.19*

### Faire tourner le projet

#### wamp Server

Pour ce test, j'ai fait le choix d'opter pour Wamp pour héberger en localhost mon site web. Si vous désirez faire de même, télécharger Wamp et placer le projet qui se trouve dans mon dépôt Github dans le dossier C:\wamp\www\

#### composer

Pour commencer, notre projet a des « dépendances ». Elles doivent être chargées au travers des gestionnaires dont le projet a besoin. Nous devons ainsi lancer les commandes suivantes sur le cmd (en se  plaçant au préalable dans le dossier du projet : C:\wamp\www\testStagiaireMollier-master\testStagiaireMollier-master):

```
composer install
```

Cette opération peut prendre quelques minutes.
À noter qu'à un moment, on vous demandera des paramètres comme l'hôte de la base de donnée, le port, le nom de la base de données... faites simplement Entrer pour laisser les paramètres par défaut.

### base de données MySQL

Pour que la base de données soit opérationnelle, rendez vous d'abord dans le fichier app/config/parameters.yml et renseignez les lignes suivantes :

```php
database_name: Parking    # à remplacer par le nom de votre db (créer une db si cela n'est pas encore fait)
database_user: root   # à remplacer par l’utilisateur de votre db
database_password: null    # à remplacer par le mot de passe de votre db
```

À noter que l'étape précédente aurait pu très bien se faire dans le cmd lors de l'installation de composer.
Une fois cela fait, vous n'avez plus qu'à créer votre base de données à partir de l'entité Parking stockée dans src/AppBundle/Entity/Parking en tapant la commande suivante (placez-vous au préalable dans le dossier du projet lorsque vous êtes sur le cmd)

```
php bin/console doctrine:schema:create
```
### accès à mon projet

Vous n'avez plus qu'à vous rendre sur votre navigateur web puis de saisir l'URL suivante (n'oubliez pas d'allumer votre serveur Wamp) :

```
http://localhost/testStagiaireMollier-master/testStagiaireMollier-master/web/app_dev.php/formulaire
ou
http://localhost/testStagiaireMollier-master/testStagiaireMollier-master/web/app_dev.php/liste
```
Et voilà, le tour est joué ! Vous devriez avoir accès au projet. Maintenant, lisez bien les commentaires dans le code ! Ils vous aideront à mieux comprendre.
Pour avoir une idée du projet, vous devriez avoir un formulaire de ce type :

![Formulaire](https://i.imgur.com/LVnc2Dx.png)
