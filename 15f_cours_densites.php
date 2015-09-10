<!DOCTYPE html >
<html lang="fr">
<head>
   <meta charset="utf-8">
  <meta name="generator" content="pandoc" />
  <meta name="author" content="Cours" />
  <title>Chapitre 10 : Lois de probabilités à densités</title>
  <style type="text/css">code{white-space: pre;}</style>
  <script src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML" type="text/javascript"></script>
<style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 
 <?php include "header.php" ?>  
 
<!--Titre de la page -->
<div class="container">
<div class="page-header">
<h1 class="title">Chapitre 10 : Lois de probabilités à densités</h1>
<h2 class="author">Cours</h2>
<h3 class="date">Terminale S</h3>
</div>
<div id="TOC">
<ul>
<li><a href="#loi-à-densité-sur-un-intervalle"><span class="toc-section-number">1</span> Loi à densité sur un intervalle</a></li>
<li><a href="#la-loi-uniforme"><span class="toc-section-number">2</span> La loi uniforme</a></li>
<li><a href="#la-loi-exponentielle"><span class="toc-section-number">3</span> La loi exponentielle</a></li>
<li><a href="#la-loi-normale-centrée-réduite"><span class="toc-section-number">4</span> La loi normale centrée réduite</a></li>
<li><a href="#les-lois-normales"><span class="toc-section-number">5</span> Les lois normales</a></li>
</ul>
</div>
<h1 id="loi-à-densité-sur-un-intervalle"><span class="header-section-number">1</span> Loi à densité sur un intervalle</h1>
<p>Comme nous l'avons déjà observé dans l'activité d'introduction à la notion d'intégrale, la représentation de la répartition des probabilités sous la forme d'un diagramme en bâtons, pour une loi binomiale correspondant à un grand nombre de répétitions conduit à approcher l'aire des rectangles par l'aire sous la courbe d'une fonction continue, comme le suggère la figure ci-dessous.</p>
<p>La situation précédente montre que l'on peut calculer des probabilités à partir des intégrales de fonctions continues et positives.</p>
<div class="alert alert-success">
<p><strong>Définition</strong></p>
<ul>
<li>On appelle <em>fonction de densité</em> de probabilité sur un intervalle <span class="math">\(I\)</span> toute fonction continue et positive sur <span class="math">\(I\)</span> telle que l'intégrale de <span class="math">\(f\)</span> sur <span class="math">\(I\)</span> soit égale à 1.<br></li>
<li>On dit qu'une variable aléatoire <span class="math">\(X\)</span> suit la loi de probabilité de densité <span class="math">\(f\)</span> lorsque la probabilité que <span class="math">\(X\)</span> appartienne à un intervalle <span class="math">\([a;b]\)</span> est égale à l'aire sous la courbe de <span class="math">\(f\)</span> sur <span class="math">\([a;b]\)</span>, c'est-à-dire :<span class="math">\[P(a\leqslant X\leqslant b)=\int_a^bf(x)~dx.\]</span></li>
</ul>
</div>
<div class="alert alert-warning">
<p><strong>Remarques</strong></p>
<ul>
<li>Dans le cas d'une loi de probabilité à densité, la valeur d'une probabilité est la même pour des inégalités strictes ou des inégalités larges : par exemple, <span class="math">\(P(X&lt;a)=P(X\leqslant a)\)</span>.</li>
<li><span class="math">\(P(X=a) = \int_a^a f(x)dx=0\)</span>.</li>
</ul>
</div>
<div class="alert alert-success">
<p><strong>Définition</strong></p>
<p><em>L'espérance mathématique</em> d'une variable aléatoire <span class="math">\(X\)</span> de densité <span class="math">\(f\)</span> sur un intervalle <span class="math">\([a;b]\)</span> est donnée par :</p>
<p><span class="math">\[E(X)=\int_a^b x f(x)~dx\]</span></p>
</div>
<div class="alert alert-warning">
<p><strong>Remarque</strong></p>
<p>Ce théorème est admis. On remarquera néanmoins l'analogie avec la formule donnant l'espérance mathématique pour une variable aléatoire <span class="math">\(X\)</span> de loi de probabilité discrète : <span class="math">\(E(X)=\sum_{k=1}^{k=n}x_i P(X=x_i)\)</span>.</p>
</div>
<div class="alert alert-info">
<p><strong>Méthode</strong></p>
<p>Soit la fonction <span class="math">\(f\)</span> définie sur <span class="math">\([0;2]\)</span> par <span class="math">\(f(x)=\frac{1}{2}x\)</span> dont la représentation graphique est donnée ci-dessous.</p>
<center>
<img src="cours_methode1.png" />
</center>
<ol type="1">
<li>Montrer que cette fonction est une fonction de densité de probabilité sur l'intervalle <span class="math">\([0;2]\)</span>.</li>
<li>Soit <span class="math">\(X\)</span> est une variable aléatoire dont la loi de probabilité a pour densité <span class="math">\(f\)</span>. Calculer <span class="math">\(P(X\leqslant1,7)\)</span>.</li>
<li>Calculer l'espérance mathématique de <span class="math">\(X\)</span>.</li>
</ol>
</div>
<h1 id="la-loi-uniforme"><span class="header-section-number">2</span> La loi uniforme</h1>
<div class="alert alert-success">
<p><strong>Définition</strong></p>
<p>Étant donnés deux réels <span class="math">\(a\)</span> et <span class="math">\(b\)</span>, avec <span class="math">\(a\leqslant b\)</span>, on appelle <em>loi uniforme</em> sur l'intervalle <span class="math">\([a;b]\)</span> la loi dont la fonction de densité est la fonction constante définie par : <span class="math">\[\forall x\in [a;b], f(x)=\frac{1}{b-a}.\]</span></p>
</div>
<div class="alert alert-danger">
<p><strong>Propriété</strong></p>
<p>Si <span class="math">\(X\)</span> est une variable aléatoire de loi uniforme sur un intervalle <span class="math">\([a;b]\)</span>, alors son espérance mathématique est donnée par la formule suivante : <span class="math">\[E(X)=\frac{b+a}{2}\]</span></p>
</div>
<p><strong>Preuve</strong> : voir cahier.</p>
<div class="alert alert-warning">
<p><strong>Remarque</strong></p>
<p>La commande <code>NbrAléat</code> de la calculatrice retourne une nombre décimal choisi au hasard dans l'intervalle <span class="math">\([0;1]\)</span>, avec 10 décimales. En assimilant ce choix au choix d'un nombre réel au hasard dans l'intervalle <span class="math">\([0;1]\)</span>, on peut considérer que cette commande <em>modélise</em> une loi uniforme sur l'intervalle <span class="math">\([0;1]\)</span>.</p>
</div>
<div class="alert alert-info">
<p><strong>Méthode</strong> : Utilisation d'une loi uniforme</p>
<p>Martin arrive tous les matins entre 7:15 et 7:35 à son arrêt de bus. On considère que son heure d'arrivée est une variable aléatoire suivant une loi uniforme, notée <span class="math">\(X\)</span>, sur l'intervalle <span class="math">\([15;35]\)</span>.</p>
<p>Le bus qu'il attend passe à 7:00, puis toutes les 10 minutes.</p>
<ol type="1">
<li>Quelle est la probabilité que Martin attende moins de 5 min le prochain bus ?</li>
<li>S'il rate le bus de 7:30, Martin arrive en retard. Quelle est la probabilité que Martin soit en retard ?</li>
</ol>
</div>
<h1 id="la-loi-exponentielle"><span class="header-section-number">3</span> La loi exponentielle</h1>
<p>Dans ce paragraphe, nous allons étudier un exemple un peu plus général que ceux des paragraphes précédents. La loi exponentielle est en effet une loi de probabilité à densité définie sur l'intervalle $[0;+\infty[ $, et non sur un intervalle du type <span class="math">\([a;b]\)</span>.</p>
<p>Soit <span class="math">\(\lambda\)</span> un réel strictement positif. On a alors, pour tout réel <span class="math">\(t\)</span> : <span class="math">\(\int_0^t \lambda e^{-\lambda x} = [-e^{-\lambda x}]_0^t = 1-e^{-\lambda t}\)</span>.</p>
<p>On a donc : <span class="math">\(\lim_{t\rightarrow +\infty}\int_0^t \lambda e^{-\lambda x} = 1\)</span>.</p>
<p>Par analogie avec les definitions du premier paragraphe, on peut donc dire que la fonction <span class="math">\(f:x\mapsto \lambda e^{-\lambda x}\)</span> est une fonction de densité sur l'intervalle $[0;+\infty[ $.</p>
<div class="alert alert-success">
<p><strong>Définition</strong></p>
<p>Soit <span class="math">\(\lambda\)</span> un réel strictement positif.</p>
<p>On appelle <em>loi exponentielle</em> de paramètre <span class="math">\(\lambda\)</span> la loi de probabilité de densité <span class="math">\(f:x\mapsto \lambda e^{-\lambda x}\)</span> , définie sur $[0;+\infty[ $.</p>
</div>
<div class="alert alert-danger">
<p><strong>Propriété</strong></p>
<p>Si <span class="math">\(X\)</span> est une variable aléatoire de loi exponentielle de paramètre <span class="math">\(\lambda&gt;0\)</span>, alors l'espérance mathématique de <span class="math">\(X\)</span> est donnée par :</p>
<p><span class="math">\[E(X)=\lim_{t\rightarrow+\infty}\int_0^t x \times \lambda e^{-\lambda x} =\frac{1}{\lambda}\]</span></p>
</div>
<p><strong>Preuve</strong> : voir cahier. Attention, cette démonstration est exigible.</p>
<div class="alert alert-info">
<p><strong>Méthode</strong> : Utilisation d'une exponentielle (Pondichéry 2014)</p>
<p>La durée de vie, exprimée en années, d’un moteur pour automatiser un portail fabriqué par une entreprise A est une variable aléatoire <span class="math">\(X\)</span> qui suit une loi exponentielle de paramètre <span class="math">\(\lambda&gt;0\)</span>.</p>
<ol type="1">
<li>On sait que <span class="math">\(P(X\leqslant 2)=0,15\)</span>. Déterminer la valeur exacte de <span class="math">\(\lambda\)</span> (dans la suite de l’exercice on prendra 0,081 pour valeur de <span class="math">\(\lambda\)</span>).</li>
<li>Calculer <span class="math">\(P(X\geqslant 3)\)</span>.</li>
<li>Calculer l’espérance de la variable aléatoire <span class="math">\(X\)</span> et donner une interprétation de ce résultat.</li>
</ol>
</div>
<p>La loi exponentielle a une propriété bien particulière, dite de &quot;durée de vie sans vieillissement&quot;. Cette propriété traduit l'idée que, si la variable aléatoire <span class="math">\(X\)</span> modélise par exemple la durée de vie d'un composant électronique, la probabilité que ce composant fonctionne encore au moins 10 heures sachant qu'il a déjà fonctionné n heures ne dépend pas de <span class="math">\(n\)</span> : elle est égale à la probabilité que ce composant fonctionne au moins 10 heures quand il est neuf.</p>
<div class="alert alert-danger">
<p><strong>Théorème</strong> : durée de vie sans vieillissement</p>
<p>Si <span class="math">\(X\)</span> est une variable aléatoire de loi exponentielle de paramètre <span class="math">\(\lambda&gt;0\)</span>, alors pour tous réels positifs <span class="math">\(t\)</span> et <span class="math">\(h\)</span>, on a :</p>
<p><span class="math">\[P_{X\geqslant t}(X\geqslant t+h)=P(X\geqslant h)\]</span></p>
</div>
<p><strong>Preuve</strong> : Voir cahier. Cette preuve est au programme, non exigible.</p>
<div class="alert alert-info">
<p><strong>Méthode</strong> : Utilisation d'une exponentielle - Suite - (Pondichéry 2014)</p>
<p>La durée de vie, exprimée en années, d’un moteur pour automatiser un portail fabriqué par une entreprise A est une variable aléatoire <span class="math">\(X\)</span> qui suit une loi exponentielle de paramètre <span class="math">\(\lambda&gt;0\)</span>.</p>
<ol start="4" type="1">
<li>Le moteur a déjà fonctionné durant 3 ans. Quelle est la probabilité pour qu’il fonctionne encore 2 ans?</li>
</ol>
</div>
<h1 id="la-loi-normale-centrée-réduite"><span class="header-section-number">4</span> La loi normale centrée réduite</h1>
<h1 id="les-lois-normales"><span class="header-section-number">5</span> Les lois normales</h1>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
