% Le jeu de puissance 4 : Programmation web en Python 
% Étape 6 : Qui commence ?
% Seconde - 2ISN

Pour déterminer le joueur qui commence et éviter les disputes, le mieux est de choisir au hasard.

Pour cela, nous utiliserons la fonction `randint(a,b)` du module `random` de Python. Cette fonction retourne un entier pseudo-aléatoire compris au sens large entre a et b.

Pour pouvoir faire appel à cette fonction dans notre programme, nous devons d'abord l'importer en ajoutant la ligne suivante au début du fichier `puissance4.py`. 

<pre class="brush: python">
from random import randint
</pre>

Rechercher ensuite les lignes suivantes, les supprimer et les remplacer par le code donné ci-dessous :

<pre class="brush: python">
rouge.draggable = True
jaune.draggable = True
</pre>

<pre class="brush: python">
### on détermine au hasard qui commence 

n = randint(0,1)
if n == 0:
	pion_mobile = rouge
	rouge.draggable = True
	jaune.draggable = False
	alert("Les Rouges commencent !")
else:
	pion_mobile = jaune
	jaune.draggable = True
	rouge.draggable = False
	alert("Les Jaunes commencent !")
</pre>

A la ligne 3, on choisit un nombre entier au hasard entre 0 et 1 : ce sera donc soit 0, soit 1. Si le nombre choisi est égal à 1, alors les rouges commencent, sinon, ce sont les jaunes.

Plus la peine de discuter, nous pouvons jouer !

Avant de commencer le championnat, l'étape suivante va nous éclairer sur l'utilisation de la commande `print` présente à plusieurs endroits dans le programme. A quoi sert-elle dans ce contexte ?
 
<nav>
<ul class="pager">
<li><a href="puissance4_5.php">Étape précédente</a></li>
<li><a href="puissance4_7.php">Étape suivante</a></li>
</ul>
</nav>