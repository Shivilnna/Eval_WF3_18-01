<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 18/01/2017
 * Time: 11:22
 *

Supposons les tables SQL suivantes :

_________________________________________________________
Table “users”
● id ● firstname ● lastname ● email ● role
_________________________________________________________
Table “articles”
● id ● title ● content ● picture ● date_publish ● id_user
_________________________________________________________

Dans un fichier à part, écrire la requête SQL permettant d’afficher un article (id = 10) et son auteur à l’aide d’une jointure.
Note : ​N’écrivez que la requête SQL, pas de PHP.
 */


// Je selectionne "title, content, picture, date_publish" de la table articles et "firstname et lastname" de la table users afin d'avoir son auteur

SELECT articles.title, articles.content, articles.picture, articles.date_publish, users.firstname, users.lastname
FROM articles
INNER JOIN users ON articles.id_user = users.id
WHERE articles.id = 10;

// Celle ci nous renvois l'articles de l'id '10' au complet ainsi que le nom et prenom de l'auteur.