<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Étape 5 : Vérification de la grille" />
  <title>Le jeu de puissance 4 : Programmation web en Python</title>
  <script src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML" type="text/javascript"></script>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Le jeu de puissance 4 : Programmation web en Python</h1>
<h2 class="author">Étape 5 : Vérification de la grille</h2>
<h3 class="date">Seconde - 2ISN</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#les-différentes-positions-gagnantes">Les différentes positions gagnantes</a></li>
<li><a href="#détection-algorithmique-de-lalignement-de-quatre-pions-de-la-même-couleur">Détection algorithmique de l'alignement de quatre pions de la même couleur</a></li>
<li><a href="#mise-en-place-de-la-vérification">Mise en place de la vérification</a></li>
</ul>
</div>
<p>Notre problème est donc maintenant de programmer un algorithme capable de tester une grille de jeu et de détecter une position gagnante.</p>
<h1 id="les-différentes-positions-gagnantes">Les différentes positions gagnantes</h1>
<p>Comme l'indiquent les figures ci-dessous, la victoire peut être obtenue par un alignement horizontal, vertical ou en diagonal de quatre pions de la même couleur.</p>
<center>
<p><img src="./images/puissance4_victoire1.png" width="500px"></p>
<img src="./images/puissance4_victoire2.png" width="500px">
</center>
<p>Pour les besoins de l'algorithme, nous allons différencier les diagonales &quot;montantes&quot; et les diagonales &quot;descendantes&quot;.</p>
<center>
<p><img src="./images/puissance4_victoire3.png" width="500px"></p>
<img src="./images/puissance4_victoire4.png" width="500px">
</center>
<h1 id="détection-algorithmique-de-lalignement-de-quatre-pions-de-la-même-couleur">Détection algorithmique de l'alignement de quatre pions de la même couleur</h1>
<p>Pour comprendre le fonctionnement de l'algorithme, observons à nouveau le code de la fonction <code>dessine_pion</code> car c'est dans cette fonction que l'on met à jour le contenu de la variable globale <code>grille</code> qui <strong>représente numériquement</strong> le tableau de jeu dans le fichier Python.</p>
<pre class="brush: python; highlight: [15, 18]">
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
<p>Aux lignes 15 et 18, on affecte une valeur à l'élément <code>grille[i][col]</code> de la variable <code>grille</code> : <span class="math">\(1\)</span> si le pion joué est rouge et <span class="math">\(-1\)</span> si le pion joué est jaune.</p>
<p>On aura donc un alignement de quatre pions rouges si les quatre cases correspondantes de la grille contiennent toutes la valeur <span class="math">\(1\)</span>, et donc si <strong>leur somme</strong> est égale à 4.</p>
<p>De même, on aura un alignement de quatre pions jaunes si les quatre cases correspondantes de la grille contiennent toutes la valeur <span class="math">\(-1\)</span>, et donc si <strong>leur somme</strong> est égale à <span class="math">\(-4\)</span>.</p>
<hr />
<p>Nous sommes maintenant en mesure de comprendre la fonction suivante :</p>
<pre class="brush: python;">
def verifie_gagne():
    """Cette fonction retourne True si le dernier joueur
    qui a joué a gagné, False sinon.
    En cas de victoire, elle affiche un message."""
    gagnant=""
    ### Vérification des alignements horizontaux ###
    for i in range(6):
        for j in range(4):
            if grille[i][j] + grille[i][j+1] + grille[i][j+2] + grille[i][j+3] == 4:
                gagnant = "Rouges"
            if grille[i][j] + grille[i][j+1] + grille[i][j+2] + grille[i][j+3] == -4:
                gagnant = "Jaunes"
    ### Vérification des alignements verticaux ###
    for j in range(7):
        for i in range(3):
            if grille[i][j] + grille[i+1][j] + grille[i+2][j] + grille[i+3][j] == 4:
                gagnant = "Rouges"
            if grille[i][j] + grille[i+1][j] + grille[i+2][j] + grille[i+3][j] == -4:
                gagnant = "Jaunes"
    ### Vérification des diagonales montantes ###
    for i in range(3):
        for j in range(4):
            if grille[i][j] + grille[i+1][j+1] + grille[i+2][j+2] + grille[i+3][j+3] == 4:
                gagnant = "Rouges"
            if grille[i][j] + grille[i+1][j+1] + grille[i+2][j+2] + grille[i+3][j+3] == -4:
                gagnant = "Jaunes"
    ### Vérification des diagonales descendantes ###
    for i in range(3):
        for j in range(3,7):
            if grille[i][j] + grille[i+1][j-1] + grille[i+2][j-2] + grille[i+3][j-3] == 4:
                gagnant = "Rouges"
            if grille[i][j] + grille[i+1][j-1] + grille[i+2][j-2] + grille[i+3][j-3] == -4:
                gagnant = "Jaunes"
    ### Affichage du gagnant ###
    if gagnant != "":
        alert('Les ' + gagnant + 'ont gagné !!!')
        return True
    else:
        return False
</pre>
<h1 id="mise-en-place-de-la-vérification">Mise en place de la vérification</h1>
<p>La vérification doit être faite à chaque fois qu'un joueur joue un pion. Nous allons donc faire appel à la fonction <code>verifie_gagne</code> à l'intérieur de la fonction <code>positionne_pion</code> créée précédemment.</p>
<p>Nous modifions également cette fonction <code>positionne_pion</code> afin qu'elle ne s'exécute que si personne n'a encore gagné : c'est le rôle de la ligne 5. Pour cela, on utilise la variable globale <code>jeu_fini</code> et on change éventuellement sa valeur.</p>
<pre class="brush: python;">
def positionne_pion(x):
    """ x représente l'abscisse du point
    où le bouton de la souris est relâché"""
    global jeu_fini
    if not jeu_fini :
        largeur_ecran = document.documentElement.clientWidth
        largeur_plateau = canvas.width
        x = x-(largeur_ecran - largeur_plateau)/2
        colonne = detecte_colonne(x)
        if dessine_pion(colonne) == "echec" :
            return "echec"
        if verifie_gagne() == True:
            rouge.draggable = False
            jaune.draggable = False
            alert("Le jeu est terminé ...\n Pour rejouer, recharger le page (F5)")
            jeu_fini = True
</pre>
<hr />
<p>Le jeu est maintenant complètement fonctionnel et peut être testé.</p>
<p>Le programme doit annoncer la couleur du vainqueur le cas échéant ... Testez par vous même !</p>
<p>Mais au fait, qui commence ? Les rouges ou les jaunes ?</p>
<p>Pour éviter des disputes, il faut encore (un peu) travailler ...</p>
<nav>
<ul class="pager">
<li>
<a href="puissance4_4.php">Étape précédente</a>
</li>
<li>
<a href="puissance4_6.php">Étape suivante</a>
</li>
</ul>
<p></nav></p>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
