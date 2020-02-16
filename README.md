Exercice USTS
=========================
L'exercice se décompose en deux parties, une obligatoire et une optionnelle. La partie optionnelle comporte plusieurs fonctionnalités que le candidat pourra ne pas réaliser.


**Librairies/Bundles autorisés:** Le candidat pourra utiliser toute librairie ou bundle qui lui semblera pertinent pour la réalisation du test


Cette exercice sert à évaluer les compétences du candidat à la création d'une API.

Livrable
=========
url : https://github.com/FlorianPaumier/exercice-usts.git

Le candidat devra faire un fork puis faire une pull request lors pour la soumission du projet.

Pour vous connectez, il est nécessaire d'envoyer une demande de contribution aux projet. 

Le candidat peut également fournir un fichier d'explications ou d'informations concernant sa réalisation sous la forme d'un README à déposer à la racine du projet.


### Installation

Executer la commande suivante afin d'installer les différents plugins php
Suivez les instructions afin de pré-configurer l'application
```
$ composer install
```
(supprimer `composer.lock` si une erreur survient puis réessayer un `$ composer install`)

Code fourni
=========
Vous trouverez dans ce repository le code de base nécessaire à la réalisation de l'exercice:
- Un projet Symfony 4.3 vide.
- Une jeu de données préparé dans le fichier "src/DataFixtures/ORM/LoadArticlesData.php" que vous devrez charger.

Partie Obligatoire
=========

**Attention: Vous pouvez apporter au jeu de données fourni toute modification que vous jugerez pertinente ou nécessaire. Il n'est fourni que comme base initiale de travail et peut par conséquent être amélioré si besoin.**

**La création de la base de données liée au projet est à la charge du candidat**

La base de données devra se nommer **test-back**.

En partant du projet cloné, vous devez faire fonctionner le projet et développer les fonctionnalités suivantes:

- Ajouter une catégorie aux articles. 
- Règle: un article ne peut être lié qu'à une et une seule catégorie
- Une page d'index listant les articles du site. (en se basant sur le jeu de données fourni)
- Une page de visualisation d'un article. (accessible en cliquant sur l'article dans la page d'index)
- Une gestion simple de connexion / inscription **Si cela n'est pas fait, la logique du traitement seras pris en compte**
- Ajouter une gestion de tags simple sur les articles:
    - un tag dispose au minimum d'un nom et un article peut être associé à aucun, un ou plusieurs tags
- Ajouter une interface d'ajout/édition d'article simple
    
Le partie front est à la charge du candidat (l'utilisation de Twig pour le front est interdit).
Il pourra choisir l'environnement qu'il souhaiteras tant que le back-end est une API.

Partie Optionnelle
=========

**Tous les éléments ci-après sont optionnels, ils ne sont pas ordonnés, vous pouvez les réaliser dans l'ordre que vous souhaitez s'il vous reste du temps après la partie obligatoire**


- Ajouter une gestion de tags plus poussée:
    - un tag dispose toujours au minimum d'un nom et un article peut toujours être associé à aucun, un ou plusieurs tags, mais il faut en plus enregistrer la date à laquelle un tag est ajouté à un article. (pas besoin de créer une interface de gestion d'ajout/édition d'article pour cela, la date pourra être renseignée directement via le jeu de données)
- Ajouter l'envoi d'un mail lors de la sauvegarde d'un article
    - Il n'est pas nécessaire d'avoir codé l'interface d'ajout/édition des articles pour réaliser ce point, une méthode d'envoi de mail simulant l'action de sauvegarde peut suffire.
