<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>Initiation à R</title>
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
    
<!--Titre de la page -->

<div class="container">
            <div class = "page-header">
                <h1 class="title">Initiation à R</h1>
                                                <h3 class="date">Dernière révision : 18 avril 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->

<nav id="TOC">
<ul>
<li><a href="#bases">Bases</a></li>
<li><a href="#import-dun-fichier-de-données">Import d'un fichier de données</a></li>
<li><a href="#traitement-des-données">Traitement des données</a></li>
<li><a href="#représentations-graphiques">Représentations graphiques</a></li>
</ul>
</nav>

<!-- Contenu -->
            
<p>Cette page regroupe les notes prises lors de l'étude du MOOC <a href="http://www.france-universite-numerique-mooc.fr/courses/Paris11/15001/Trimestre_2_2014/about">Introduction à la Statistique avec R</a> proposé par l'Université Paris-Sud sur la plateforme FUN.</p>
<h1 id="bases"><a href="#TOC">Bases</a></h1>
<ul>
<li>Pour affecter une valeur à une variable on utilise <code>&lt;-</code>. Par exemple <code>a&lt;-sqrt(2)</code> affecte la valeur <math display="inline" xmlns="http://www.w3.org/1998/Math/MathML"><mrow><msqrt><mn>2</mn></msqrt></mrow></math> à la variable <code>a</code>.</li>
<li>Pour accéder à une variable dans un jeu de données, on utilise le symbole <code>$</code>. Par exemple, pour afficher un résumé de la variable <code>prof</code>, indiquant la profession des détenus, on tapera : <code>str(donnees$prof)</code>.</li>
</ul>
<h1 id="import-dun-fichier-de-données"><a href="#TOC">Import d'un fichier de données</a></h1>
<ul>
<li>Le fichier doit être au format .csv</li>
<li>Chaque colonne correspond aux données relative à l'un des caractères étudiés (variables) et la première ligne contient le nom des caractères étudiés.</li>
<li>La commande pour importer les données et les stocker par exemple dans la variable <code>donnees</code> est : <code>donnees &lt;- read.csv2(&quot;/home/user/Documents/MOOCS/R/smp1.csv&quot;)</code>.</li>
<li>La commande <code>str()</code> permet d'afficher un résumé des données importées (nombre de variables, nombre de valeurs (observations)). Sur la figure ci-dessous, on a utilisé la commande `str(donnees)'.</li>
</ul>
<div class="figure"><center>
<img src="read_csv2.png"  width="500" alt="Utilisation de read.csv2()" /><p class="caption">Utilisation de <code>read.csv2()</code></p>
<center>
</div>
<ul>
<li>La commande <code>read.csv()</code> diffère de <code>read.csv2()</code> au niveau de la nature du séparateur entre les données : il s'agit d'une virgule pour la première et d'un point-virgule pour la seconde.</li>
</ul>
<h1 id="traitement-des-données"><a href="#TOC">Traitement des données</a></h1>
<ul>
<li>Pour obtenir un regroupement des valeurs d'une variable dans un tableau d'effectifs, on utilise la fonction <code>table</code>. Par exemple : <code>table(donnees$prof)</code> donne le résultat ci-dessous.</li>
</ul>
<div class="figure"><center>
<img src="table.png" width="500" alt="Commande table()" /><p class="caption">Commande <code>table()</code></p>
</center>
</div>
<h1 id="représentations-graphiques"><a href="#TOC">Représentations graphiques</a></h1>
<ul>
<li>Pour une variable qualitative, on peut réaliser un diagramme en bâtons, avec la commande <code>barplot()</code>. Voici le graphique obtenu avec la commande `barplot(table(donnees$prof))'.</li>
</ul>
<div class="figure"><center>

<img src="barplot.png" width="500" alt="Diagramme en bâtons" /><p class="caption">Diagramme en bâtons</p></center>

</div>
<ul>
<li>Pour un diagramme circulaire, on tapera <code>pie(table(donnees$prof))</code>.</li>
</ul>
<div class="figure"><center>

<img src="pie.png" width="500"  alt="Diagramme circulaire" /><p class="caption">Diagramme circulaire</p></center>

</div>
<ul>
<li>Une variable quantitative peut être représentée par un histogramme avec la commande <code>hist()</code>. Par exemple, <code>hist(donnees$age)</code> produit la figure suivante.</li>
</ul>
<div class="figure"><center>

<img src="hist.png"  width="500" alt="Histogramme" /><p class="caption">Histogramme</p></center>

</div>
<ul>
<li>Paramètres pour l'histogramme : <code>col</code> permet de régler la couleur, <code>main</code> la titre principal, <code>xlab</code> le label de l'axe des abscisses, <code>ylab</code> celui de l'axe des ordonnées.</li>
</ul>
<div class="figure"><center>

<img src="hist2.png"  width="500" alt="hist(donnees$age, col = &quot;green&quot;, main = &quot;Un bien bel histogramme&quot;, xlab = &quot;âge&quot;, ylab = &quot;fréquence&quot;)" /><p class="caption"><code>hist(donnees$age, col = &quot;green&quot;, main = &quot;Un bien bel histogramme&quot;, xlab = &quot;âge&quot;, ylab = &quot;fréquence&quot;)</code></p></center>

</div>
<ul>
<li>Représentation d'une variable quantitative par une boîte à moustaches : commande <code>boxplot()</code>. Par exemple : <code>boxplot(donnees$age, xlab = &quot;âge&quot;)</code>.</li>
</ul>
<div class="figure"><center>

<img src="boxplot.png"  width="500" alt="Boîte à moustaches" /><p class="caption">Boîte à moustaches</p></center>

</div>
<ul>
<li>On peut aussi facilement représenter par exemple la répartition des âges suivant les niveaux de recherche de sensation : <code>boxplot(donnees$age~donnees$rs, ylab=&quot;âge&quot;, xlab=&quot;Recherche de sensation&quot;)</code>.</li>
</ul>
<div class="figure"><center>

<img src="boxplot2.png"  width="500" alt="Boîte à moustaches comparatives" /><p class="caption">Boîte à moustaches comparatives</p></center>

</div>
<ul>
<li>Pour représenter une variable en fonction d'une autre, on utilise la fonction <code>plot()</code>. Par exemple : <code>plot(donnees$age, donnees$n.enfant)</code> pour représenter le nombre d'enfants en fonction de l'âge.</li>
</ul>
<div class="figure"><center>

<img src="plot1.png"  width="500" alt="Nuage de points" /><p class="caption">Nuage de points</p></center>

</div>
<ul>
<li>Plusieurs points sont superposés sur le graphique précédent. L'option <code>jitter</code> ajoute un petit &quot;bruit&quot; aléatoire aux coordonnées des points afin de bien voir l'accumulation de plusieurs points au même endroit. Exemple : <code>plot(jitter(donnees$age), jitter(donnees$n.enfant))</code>.</li>
</ul>
<div class="figure"><center>

<img src="plot2.png"  width="500" alt="Nuage de points" /><p class="caption">Nuage de points</p></center>

</div>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
