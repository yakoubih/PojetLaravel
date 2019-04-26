# Titre du projet

Projet de création d’une application web avec le framework PHP Laravel

## Commencer

Ces instructions vous fourniront une copie du projet opérationnel sur votre ordinateur local à des fins de développement et de test. Voir le déploiement pour des notes sur la manière de déployer le projet sur un système actif.

### Conditions préalables

De quoi avez-vous besoin pour installer le logiciel et comment l'installer?

```
Vous devez avoir une version >= PHP 7.2.10
```

### Installation

Pour installer le projet sur votre machine il faut suivre les étapes suivantes : 

1- Télacharger le projet sur votre ordinateur ou vous pouvez cloner le projet en tapant la commande suivante sur le Terminal ou l'Invité de commande selon votre systéme d'exploitation (Windows ou Lunix) si vous avez Git installé sur votre ordinateur.

```
git clone https://github.com/yakoubih/PojetLaravel.git
```

2- Une fois le projet est copié, ouvrez le et ouvrez le Terminal ou l'Invité de commande (selon votre systéme d'exploitation).
3- Installer composer dans le projet en tappant la commande suivante dans le Terminal/Invité de commande ouvert

```
php composer install
```
4- Copier le fichier .env.example dans .env en tappant la commande suivante:
   a- Sous Lunix
```
Copy .env.example .env
```
   b- Sous Windows
```
Cp .env.example .env
```
5- Ouvrez le fichier .env et changer le nom de la base de donnée
6- Dans le Terminal/Invité de commande lancez la commande suivante 
```
php artisan key:generate
```
7- Lancez les migration en tappant la commande suivante 
```
php artisan migrate
```
8- Remplissez les tables de la base de données par des données aléatoires en tappant la commande suivante
```
php artisan migrate:fresh --seed -v
```
8- Lancez le serveur pour tester l'application en tappant la commande suivante
```
php artisan serve
```
Terminez avec un exemple d'extraction de données du système ou d'utilisation pour une petite démonstration.

## Lancer les tests

Expliquer comment exécuter les tests automatisés pour ce système

### Décomposer en tests de bout en bout

Expliquez ce que ces tests testent et pourquoi

`` `
Donne un exemple
`` `

### Et tests de style de codage

Expliquez ce que ces tests testent et pourquoi

`` `
Donne un exemple
`` `

## Déploiement

Ajouter des notes supplémentaires sur la façon de déployer ceci sur un système actif

## Construit avec

* [Dropwizard] (http://www.dropwizard.io/1.0.2/docs/) - Le cadre Web utilisé
* [Maven] (https://maven.apache.org/) - Gestion des dépendances
* [ROME] (https://rometools.github.io/rome/) - Utilisé pour générer des flux RSS

## Contribuant

Veuillez consulter [CONTRIBUTING.md] (https://gist.github.com/PurpleBooth/b24679402957c63ec426) pour obtenir des détails sur notre code de conduite et sur le processus de soumission des demandes d'extraction.

## Versioning

Nous utilisons [SemVer] (http://semver.org/) pour la gestion des versions. Pour les versions disponibles, voir les [balises sur ce référentiel] (https://github.com/your/project/tags).

## Auteurs

* ** Hamza DERDJINI ** - * Travail initial * - [Hamza] (https://www.linkedin.com/in/hamza-derdjini-b8a827122/)

Voir aussi la liste des [contributeurs] (https://github.com/your/project/contributors) ayant participé à ce projet.

## Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE.md] (LICENSE.md) pour plus de détails.

## Remerciements

* Astuce de chapeau à toute personne dont le code a été utilisé
* Inspiration
* etc
