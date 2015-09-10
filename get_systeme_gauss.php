<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
  
<!--Titre de la page -->

<div class="container">
            <div class = "page-header">
                <h1 class="title">Méthode de Gauss</h1>
                                                <h3 class="date">Dernière révision : 29 mai 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->


<!-- Contenu -->

<!--Définition d'un système pour les tests -->

<?php $systeme = array(array(1, 2, 3, 4), array(2, -3, 4, 5), array(3, 4, 5, -6)); ?>

<p>L'objectif de cette page est d'illustrer l'application de la méthode de Gauss pour résoudre un système d'équations linéaires.</p>

<p>En liaison avec le cours de Terminale S sur les équations de plans, on se limite aux systèmes linéaires de trois équations à trois inconnues, correspondant à la recherche de l'intersection de trois plans.</p>

<div class="alert alert-dismissable alert-danger">
<p>Cette page ne vérifie pas la validité des données entrées dans les zones de texte ci-dessous !</p>
<p>Vérifiez bien votre saisie (pas de caractères alphabétiques, pas d'opérations, ...), avant de valider !</p>
</div>

<div class="row">
	<div class="col-lg-6">

<p>Entrer ci-dessous les coefficients du système à résoudre : </p>

<p style="float:left">
	\(\left\{
	\begin{array}{c}
	  \phantom{a}\\
	  \phantom{b}\\
	  \phantom{c} \\
	  \phantom{d} 
	 \end{array}\right.\)
	 </p>
<form style="float:left" method="post" action="gauss.php">
	
   <input type="text" name="a0" size="5" autofocus required />\(x\) + <input type="text" name="b0" size="5" required />\(y\) + <input type="text" name="c0" size="5" required />\(z\) = <input type="text" name="d0" size="5" required /><br/>
   <input type="text" name="a1" size="5" required />\(x\) + <input type="text" name="b1" size="5" required />\(y\) + <input type="text" name="c1" size="5" required />\(z\) = <input type="text" name="d1" size="5" required /><br/>
   <input type="text" name="a2" size="5" required />\(x\) + <input type="text" name="b2" size="5" required />\(y\) + <input type="text" name="c2" size="5" required />\(z\) = <input type="text" name="d2" size="5" required /><br/>
<br/>

<button type="submit" type="button" class="btn btn-danger">Appliquer la méthode de Gauss ...</button>
</form>

</div>

<div class="col-lg-6">

<div class="alert alert-dismissable alert-success" style="float:left">
    <p>Entrer les coefficients du système : les coefficients doivent être des nombres entiers ou décimaux, écrits explicitement.</p>
    <p>Pour la virgule, utiliser le point décimal "." et non le symbole ",".</p>
    <p>Cliquer sur le bouton rouge une fois que toutes les cases sont complétées.</p>
</div>

</div>

</div>

<br/>

<br/>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
