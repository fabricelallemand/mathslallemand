% INITIATION À L’ALGORITHMIQUE ET À PYTHON
% Le monde de Reeborg – épisode 1
% 2ISN - Seconde

# Découverte du monde de Reeborg

Se connecter au monde de Reeborg en cliquant sur l’image ci-dessous.

<center>[<img src="./images/reeborg_01.png" width="600px" />](http://reeborg.ca/monde.html)</center>

L’écran est constitué de deux parties principales : 

* À gauche, le monde de Reeborg proprement dit. Reeborg est le petit robot situé en bas à gauche du quadrillage, il regarde vers la droite. Les segments marron sont des murs : Reeborg ne peut pas les traverser et il ne doit pas se cogner aux murs, car cela le fait souffrir ...
* À droite se trouve la zone de saisie des commandes qui permettront de programmer le déplacement du robot.

<div class="alert alert-info">
Entrer la commande `avance()` dans la zone de saisie, puis cliquer sur le bouton d'exécution situé en haut à gauche.
	
Que se passe-t-il ?
</div>

<div class="alert alert-danger">
Dans la suite, vous aurez besoin des deux commandes suivantes, qui sont propre à Reeborg : 
<ul>
<li> `avance()` : permet à Reeborg d'avancer d'une case ;</li>
<li> `tourne_a_gauche()` : fait tourner Reeborg sur sa gauche.</li>
</ul>
A chaque utilisation de ces commande, n'oubliez pas les parenthèses, sinon elles ne seront pas excéutées !
</div>

# Quelques réglages

Avant de continuer, nous allons effectuer un petit réglage afin que Reeborg évolue dans un monde "carré".

Pour cela, cliquer sur le bouton "Menu additionnel", puis "Edition du monde" et "Taille du monde".

Dans la fenêtre qui s'ouvre, régler les deux valeurs x et y à 12, cliquer sur "OK", puis "Fermer et sauvegarder".

Reeborg est maintenant dans un carré de côté 12 carreaux, délimité par des murs.

<center>![](./images/reeborg_02.png)</center>

# Un premier défi !

<div class="alert alert-info">
Votre premier défi consiste à écrire un programme qui ordonne à Reeborg de faire tout le tout de son monde en longeant les murs jusqu'à ce qu'il revienne à son point de départ, dans la même position.
</div>

Mais attention, il ne s'agit pas d'écrire un programme interminable ...

Lisez attentivement ce qui suit pour vous aider.

Reeborg comprend le language informatique Python. Dans ce language comme dans les autres, il existe une structure algorithmique qui permet de faire répéter un certain nombre de fois une ou plusieurs commande. On parle de **boucle**.

En français, voici ce qui permettrait de répéter 10 fois les commandes indiquées :

<pre>
pour k variant de 1 à 10, faire :
    commande1()
	commande2()
commande3()
</pre>

Dans ce code :
* les commandes nommées `commande1()` et `commande2()` sont répétées 10 fois ;
* la lettre `k` désigne une **variable** qui sert de compteur : elle prend successivement les valeurs entières de 1 à 10 ;
* la commande nommée `commande3()` n'est exécutée qu'une fois, après les 10 répétitions : en effet, seul **le bloc** de commandes matérialisé par l'espacement à droite (on parle d'**indentation**) est répété.

Voici donc maintenant une exigence plus précise pour ce premier défi : 

<div class="alert alert-info">
Votre premier défi consiste à écrire un programme qui ordonne à Reeborg de faire tout le tout de son monde en longeant les murs jusqu'à ce qu'il revienne à son point de départ, dans la même position.

Votre programme ne doit prendre que **quatre lignes** !!!
</div>