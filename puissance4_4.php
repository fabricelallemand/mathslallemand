<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Étape 4 : Positionnement des pions dans la grille" />
  <title>Le jeu de puissance 4 : Programmation web en Python</title>
  <script src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML" type="text/javascript"></script>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Le jeu de puissance 4 : Programmation web en Python</h1>
<h2 class="author">Étape 4 : Positionnement des pions dans la grille</h2>
<h3 class="date">Seconde - 2ISN</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#la-fonction-positionne_pion">La fonction <code>positionne_pion</code></a></li>
<li><a href="#détermination-de-la-colonne-jouée">Détermination de la colonne jouée</a></li>
<li><a href="#positionnement-du-pion-dans-la-colonne">Positionnement du pion dans la colonne</a></li>
</ul>
</div>
<p>À l'étape précédente, nous avons permis le déplacement des pions, mais leur positionnement dans la grille n'est pas encore possible.</p>
<h1 id="la-fonction-positionne_pion">La fonction <code>positionne_pion</code></h1>
<p>Observons le code de la fonction <code>drop</code> :</p>
<pre class="brush: python;">
def drop(ev):
    global pion_mobile
    print("drop")
    if deplacement_valide :
        resultat = positionne_pion(ev.x) 
        if resultat != "echec" :
            if pion_mobile == rouge :
                rouge.draggable = False
                jaune.draggable = True
                pion_mobile = jaune
                print("les rouges ont joué, c'est aux jaunes")
            elif pion_mobile == jaune :
                jaune.draggable = False
                rouge.draggable = True
                pion_mobile = rouge
                print("les jaunes ont joué c'est aux rouges")
    ev.preventDefault()
</pre>
<p>À la ligne 5, la fonction <code>positionne_pion</code> appelée n'est pas encore définie. Cette fonction prend en argument le nombre <code>ev.x</code> égal à l'abscisse de point où le bouton de la souris est relâché lors du déplacement du pion.</p>
<p>Le fonction <code>positionne_pion</code> doit :</p>
<ul>
<li>déterminer, à partir de la valeur de <code>ev.x</code>, dans quelle colonne le pion doit être joué ;</li>
<li>déterminer où dessiner le pions dans la colonne considérée, en fontion des pions qui sont déjà dessinés dans la colonne.</li>
</ul>
<p>Étudions ces deux problèmes séparément.</p>
<h1 id="détermination-de-la-colonne-jouée">Détermination de la colonne jouée</h1>
<p>Le nombre <code>ev.x</code> est égal à l'abscisse de point où le bouton de la souris est relâché lors du déplacement du pion. Mais dans quel repère ? Par rapport à quelle origine ?</p>
<p>Nous avons dans notre page HTML deux systèmes de coordonnées différents (deux repères différents) :</p>
<ul>
<li>l'un repère les points dans toute la page affichée ; son origine est située dans le coin en haut à gauche de la page ;</li>
<li>l'autre repère les points <strong>à l'intérieur du canvas</strong> ; son origine est située dans le coin en haut à gauche <strong>du canvas</strong>.</li>
</ul>
<p>Or l'abscisse <code>ev.x</code> retournée par le système au moment du relâchement du bouton de la souris est relative au <strong>repère de la page affichée</strong> alors que la fonction <code>drawImage</code> (qui sera utilisée pour dessiner le pion au bon endroit) prend en paramètre les coordonnées dans le <strong>repère du canvas</strong>.</p>
<p>La figure ci-dessous illustre la situation. Elle va aussi nous aider à résoudre ce problème.</p>
<center>
<img src="./images/puissance4_reperes_1.png" width="800px">
</center>
<p>Comment passer des coordonnées dans le repère rouge aux coordonnées dans le repère vert ?</p>
<p>Pour y arriver, nous avons accès à plusieurs grandeurs utiles :</p>
<ul>
<li>la largeur en pixel de la fenêtre est donnée par le commande <code>document.documentElement.clientWidth</code> ;</li>
<li>la largeur en pixels du canvas est donnée par <code>canvas.width</code> ;</li>
<li>enfin, on sait que le canvas est centré dans la page.</li>
</ul>
<p>On peut donc compléter le schéma comme ci-dessous. On a simplifié les notations en notant <code>W=document.documentElement.clientWidth</code> et <code>cW=canvas.width</code>.</p>
<center>
<img src="./images/puissance4_reperes_2.png" width="800px">
</center>
<p>M est un point de la fenêtre, d'abscisse \(X\) dans le repère de la fenêtre et \(x\) dans le repère du canvas.</p>
<p>On peut déduire du schéma le calcul suivant : <span class="math">\(X=x+\frac{W-cW}{2}\)</span> et donc <span class="math">\(x=X-\frac{W-cW}{2}\)</span>.</p>
<p>Nous allons donc commencer à écrire notre fonction <code>positionne_pion</code> en programmant ce petit calcul permettant d'obtenir l'abscisse du point où le bouton de la souris est relâche <strong>dans le repère du canvas</strong>.</p>
<pre class="brush: python;">
def positionne_pion(x):
    """ x représente l'abscisse du point
    où le bouton de la souris est relâché"""
    largeur_ecran = document.documentElement.clientWidth
    largeur_plateau = canvas.width
    x = x-(largeur_ecran - largeur_plateau)/2
</pre>
<p>Il faut maintenant déterminer à quelle colonne correspond cette abscisse.</p>
<p>L'image du plateau est une image dont la largeur est fixe, égale à 602 pixels. Cette image est divisée en 7 colonnes de 86 pixels.</p>
<center>
<img src="./images/puissance4_reperes_3.png" width="500px">
</center>
<p>Nous pouvons donc définir une fonction <code>detecte_colonne</code> qui retourne le numéro de la colonne dans laquelle le bouton a été relâché en fonction de <span class="math">\(x\)</span> :</p>
<pre class="brush: python;">
def detecte_colonne(x):
    if x < 86 :
        return 0
    elif x < 86*2:
        return 1
    elif x < 86*3:
        return 2
    elif x < 86*4:
        return 3
    elif x < 86*5:
        return 4
    elif x < 86*6:
        return 5
    elif x < 86*7:
        return 6
</pre>
<p>Nous ajoutons ensuite une ligne supplémentaire à la fonction <code>positionne_pion</code> :</p>
<pre class="brush: python;">
def positionne_pion(x):
    """ x représente l'abscisse du point
    où le bouton de la souris est relâché"""
    largeur_ecran = document.documentElement.clientWidth
    largeur_plateau = canvas.width
    x = x-(largeur_ecran - largeur_plateau)/2
    colonne = detecte_colonne(x)
</pre>
<h1 id="positionnement-du-pion-dans-la-colonne">Positionnement du pion dans la colonne</h1>
<p>Nous savons maintenant dans quelle colonne le pion doit être positionné.</p>
<p>Pour le dessiner, il faut maintenant savoir combien de pions sont déjà entassés dans cette colonne. Il est donc nécessaire de conserver dans le programme une &quot;mémoire&quot; de l'état du plateau à chaque instant du jeu.</p>
<p>Nous allons pour cela définir une <strong>variable</strong> <code>grille</code> sous la forme d'un tableau de nombres entiers, avec la convention de remplissage suivante :</p>
<ul>
<li>une case vide est codée par la valeur <span class="math">\(0\)</span> ;</li>
<li>une case contenant un pion rouge est codée par la valeur <span class="math">\(1\)</span> ;</li>
<li>une case contenant un pion jaune est codée par la valeur <span class="math">\(-1\)</span> ;</li>
</ul>
<p>Pour définir un tel tableau, on entre le code suivant dans le fichier <code>puisance4.py</code> : la grille de départ est vide, la variable <code>grille</code> ne contient donc que des <span class="math">\(0\)</span>.</p>
<pre class="brush: python;">
### Représentation interne de la grille de jeu
grille = [ [0, 0, 0, 0, 0, 0, 0] ,
           [0, 0, 0, 0, 0, 0, 0] ,
           [0, 0, 0, 0, 0, 0, 0] ,
           [0, 0, 0, 0, 0, 0, 0] ,
           [0, 0, 0, 0, 0, 0, 0] ,
           [0, 0, 0, 0, 0, 0, 0] ]
</pre>
<p>Voici maintenant la fonction <code>dessine_pion</code> qui dessinera le pion au bon endroit :</p>
<pre class="brush: python;">
def dessine_pion(col):
    """ Dessine le pion dans la colonne col
    si elle n'est pas pleine """
    # On vérifie que la colonne n'est pas pleine
    if grille[5][col] != 0:
        alert("La colonne est pleine !!!")
        return "echec"
    else:
        # On détermine la première ligne non-vide
        i = 0
        while grille[i][col] != 0:
            i = i+1
        # On met à jour la grille et on dessine le pion
        if pion_mobile == rouge:
            grille[i][col] = 1
            context.drawImage(rouge,85.5*col+5,85.5*(5-i)+5,80,80)
        elif pion_mobile == jaune:
            grille[i][col] = -1
            context.drawImage(jaune,85.5*col+5,85.5*(5-i)+5,80,80)
        return "reussi"
</pre>
<hr />
<p><strong>Explications :</strong></p>
<ul>
<li>Les lignes 5 et 6 permettent d'afficher une petite fenêtre d'erreur si le joueur essaie de jouer dans une colonne qui est déjà pleine. Remarquons que l'instruction <code>grille[5][col]</code> correspond à la sixième ligne de la variable <code>grille</code> et à <strong>la ligne du haut</strong> du plateau.</li>
<li>Les lignes 10, 11 et 12 recherchent la première ligne non-vide dans la colonne : une case non vide a en effet un contenu différent de 0.</li>
<li>Dans les lignes 14 à 19, suivant la couleur du pion mobile, on met à jour la variable <code>grille</code> avec un <span class="math">\(1\)</span> ou un <span class="math">\(-1\)</span> et on utilise la fonction <code>drawimage</code> pour dessiner le pion au bon endroit.</li>
</ul>
<hr />
<p>Pour finir, on complète à nouveau la fonction <code>positionne_pion</code> comme suit :</p>
<pre class="brush: python;">
def positionne_pion(x):
    """ x représente l'abscisse du point
    où le bouton de la souris est relâché"""
    largeur_ecran = document.documentElement.clientWidth
    largeur_plateau = canvas.width
    x = x-(largeur_ecran - largeur_plateau)/2
    colonne = detecte_colonne(x)
    if dessine_pion(colonne) == "echec" :
        return "echec"
</pre>
<p>Tester la page HTML : à ce stade, il est déjà possible de jouer ! Mais le programme ne détecte pas si un des deux joueurs a gagné ...</p>
<nav>
<ul class="pager">
<li>
<a href="./puissance4_3.php">Étape précédente</a>
</li>
<li>
<a href="./puissance4_5.php">Étape suivante</a>
</li>
</ul>
<p></nav></p>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
