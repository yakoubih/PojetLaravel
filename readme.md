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
composer install
```
4- Copier le fichier .env.example dans .env en tappant la commande suivante:
```
copy .env.example .env
```
5- Créez un fichier database.sqlite dans le répertoire database du projet récuperé

6- Ouvrez le fichier .env et faites les modification suivantes.
```
DB_CONNECTION=sqlite
#DB_HOST=127.0.0.1
#DB_PORT=3306
DB_DATABASE=Votre chemin\PojetLaravel-master\database\database.sqlite
#DB_USERNAME=homestead
#DB_PASSWORD=secret
```
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
Vous pouvez maintenant tester notre application.

## Lancer les tests

Le blog contient en haut une barre de navigation contenant les menus suivant : Home, Articles, Contact, Help, Subscribe, Login

### Le menu Home :

Affiche les quatres premiers Articles présents dans notre base de données. Vous pouvez acceder au contenu de l'Article en clicant sur 
son lien, deux cas sont possibles : 
Si vous etes connecter, vous pouvez modifer ou supprimer le contenu de l'article. Dans ce cas la table article sera mis à jours dans la base de donnée.
Si vous n'etes pas connecté, vous pouvez acceder au contenu de l'article sans pouvoir le modifier ou le supprimer.

### Le menu Articles : 

Affiche tout les Articles présents dans la base de données (dans notre cas 10 articles). 
Si vous etes connecter, vous pouvez modifer ou supprimer le contenu de l'article. Dans ce cas la table article sera mis à jours dans la base de donnée. Vous pouvez acceder au contenu de l'Article en clicant sur son lien, deux cas sont possibles : 
Si vous etes connecter, vous pouvez modifer ou supprimer le contenu de l'article. Dans ce cas la table article sera mis à jours dans la base de donnée.
Si vous n'etes pas connecté, vous pouvez acceder au contenu de l'article sans pouvoir le modifier ou le supprimer.

Pour les commentaire :
Si vous etes connecter, vous pouvez commenter les articles en tapant votre nom, votre email, et votre commentaire.
Si vous n'etes pas connecter, vous pouvez juste voir les commentaires présents en dessous de chaque article.

### Le menu Contact : 

Si vous etes enregistré dans notre base de données et que vous etes connecté, vous pouvez nous contactez en remplissant le formulaire de contact affiché, si vous envoyé votre message vous pouvez acceder à un tableau récaputilatif de tout les messages envoyés sous forme d'un tableau. Dans ce cas la table Contact sera mis à jours dans la base de donnée.
### Le menu Help : 

Ce menu vous dirige vers une assistance d'aide par téléphone ou par mail. Si vous choisissez le mode mail, vous serez dirigé vers la page de contact.

### Le menu Subscribe : 

Permet de s'enregistrer si vous n'etes pas enregistrer sur notre base de donnée en remplissant un formulaire, dans ce cas la table users sera mis à jours dans la base de donnée.

### Le Login : 

Permet de se connecter pour pouvoir effectuer les opérations citées auparavant.

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

* **Hamza DERDJINI**  [LinkedinHamza](https://www.linkedin.com/in/hamza-derdjini-b8a827122/)
                      [GithubHamza](https://github.com/geekhamza)
* **Hocine YAKOUBI**  [GithubHocine](https://github.com/yakoubih)


## Licence

Ce projet est réalisé dans le cadre de la formation Laravel (Master 2 DCISS Grenoble) 
## Remerciements

* On vous remercie pour vos explications
