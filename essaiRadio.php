<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="pandoc">
        <title>Radiochronologie : les mathématiques au service de la géologie</title>
  <style type="text/css">code{white-space: pre;}</style>
  <style type="text/css">figure { margin-left: auto;  margin-right: auto }</style>
 

  <?php include "header.php" ?>  
 
    
<!--Titre de la page -->

<div class="container">
            <div class = "page-header">
                <h1 class="title">Radiochronologie : les <em>mathématiques</em> au service de la <em>géologie</em></h1>
                                                <h3 class="date">janvier 2014</h3>
                            </div>
<!-- Table des matières (optionnel) -->


<!-- Contenu -->
            
<h1 id="le-couple-rbsr">Le couple Rb/Sr</h1>
<p>La méthode de datation <em>Rb/Sr</em> repose sur la présence d'atomes de <em>rubidium</em> et de <em>strontium</em> dans les roches.</p>
<h2 id="rubidium">Rubidium</h2>
<p>Le <em>rubidium</em> est un métal alcalin. On s'intéresse à un isotope particulier du <em>rubidium</em> : le <span class="math">\(^{87}Rb\)</span>. Cet isotope est radioactif et se désintègre en un isotope stable du <em>strontium</em>, le <span class="math">\(^{87}Sr\)</span>.</p>
<p>La demi-vie du <span class="math">\(^{87}Rb\)</span> est de <span class="math">\(T=48,8\)</span> Ga, soit <span class="math">\(48,8\times 10^9\)</span> années.</p>
<p>La loi de la décroissance radioactive permet d'affirmer que le nombre d'atomes de <span class="math">\(^{87}Rb\)</span> en fonction du temps <span class="math">\(t\)</span> est donné par la formule : <span class="math">\[^{87}Rb_{actuel} = {}^{87}Rb_{initial}\times e^{-\lambda t}\]</span> où <span class="math">\(\lambda\)</span> est la constante radioactive du <span class="math">\(^{87}Rb\)</span>.</p>
<p>De façon équivalente, on peut écrire :</p>
<p><span class="math">\[^{87}Rb_{initial} = {}^{87}Rb_{actuel}\times e^{\lambda t}\]</span></p>
<figure>
<img src="./images/Rb.jpg" title="Source : Wikimedia" alt="Rubidium" /><figcaption>Rubidium</figcaption>
</figure>
<h2 id="strontium">Strontium</h2>
<p>Le <em>strontium</em> est un métal alcalino-terreux présent sous la forme de deux isotopes :</p>
<ul>
<li>le <span class="math">\(^{86}Sr\)</span>, isotope stable, dont la quantité n'a pas varié depuis la formation de la roche ;</li>
<li>le <span class="math">\(^{87}Sr\)</span> qui, soit provient des désintégrations d'atomes de <span class="math">\(^{87}Rb\)</span> survenues depuis la formation de la roche, soit était présent initialement à la formation de la roche. On a donc : <span class="math">\[^{87}Sr_{actuel} = {}^{87}Sr_{initial} + {}^{87}Rb_{désintégré}\]</span> c'est-à-dire : <span class="math">\[^{87}Sr_{actuel} = {}^{87}Sr_{initial} + {}^{87}Rb_{initial}-{}^{87}Rb_{actuel}\]</span> ou encore : <span class="math">\[^{87}Sr_{actuel} = {}^{87}Sr_{initial} + {}^{87}Rb_{actuel}\times e^{\lambda t}-{}^{87}Rb_{actuel}\]</span> soit finalemant : <span class="math">\[^{87}Sr_{actuel} = {}^{87}Sr_{initial} + {}^{87}Rb_{actuel}(e^{\lambda t}-1)\]</span></li>
</ul>
<figure>
<img src="./images/Sr.jpg" title="Source : Wikimedia" alt="Strontium" /><figcaption>Strontium</figcaption>
</figure>
<p>Divisons maintenant l'équation ci-dessus par <span class="math">\(^{86}Sr\)</span> :</p>
<p><span class="math">\[\frac{^{87}Sr_{actuel}}{^{86}Sr} = \frac{{}^{87}Sr_{initial}}{^{86}Sr} + \frac{{}^{87}Rb_{actuel}}{^{86}Sr}(e^{\lambda t}-1)\]</span></p>
<h1 id="datation">Datation</h1>
<h2 id="la-méthode">La méthode</h2>
<p>En utilisant un spectomètre de masse, on peut mesurer les rapports isotopiques <span class="math">\(x=\frac{{}^{87}Rb_{actuel}}{^{86}Sr}\)</span> et <span class="math">\(y=\frac{^{87}Sr_{actuel}}{^{86}Sr}\)</span>.</p>
<p>Pour différents échantillons issus d'un même magma, le rapport isotopique <span class="math">\(b = \frac{{}^{87}Sr_{initial}}{^{86}Sr}\)</span> est le même.</p>
<p>Les mesures <span class="math">\(x\)</span> et <span class="math">\(y\)</span> sont donc liées par une relation de la forme : <span class="math">\[y = b + a x \]</span> avec <span class="math">\(a=e^{\lambda t}-1\)</span></p>
<p>Les points de coordonnées <span class="math">\(\left(\frac{{}^{87}Rb_{actuel}}{^{86}Sr} ; \frac{^{87}Sr_{actuel}}{^{86}Sr}\right)\)</span> correspondant à plusieurs mesures sont donc alignés sur une droite de coefficient directeur <span class="math">\(a=e^{\lambda t}-1\)</span>.</p>
<p>Le procédé de datation est donc le suivant :</p>
<ul>
<li>on place dans un repère les points de coordonnées <span class="math">\(\left(\frac{{}^{87}Rb_{actuel}}{^{86}Sr} ; \frac{^{87}Sr_{actuel}}{^{86}Sr}\right)\)</span> correspondant à plusieurs mesures ;</li>
<li>on détermine l'équation d'une droite d'ajustement pour le nuage de points obtenu (s'agissant de mesures réelles, les points ne sont pas exactement alignés comme ils devraient l'être théoriquement) ;</li>
<li>en notant <span class="math">\(a\)</span> la pente de cette droite, on résout l'équation <span class="math">\(a=e^{\lambda t}-1\)</span> pour trouver le temps <span class="math">\(t\)</span> écoulé depuis la formation des roches.</li>
</ul>
<h2 id="manipulation-effectuée-en-sciences-de-la-vie-et-de-la-terre">Manipulation effectuée en Sciences de la vie et de la Terre</h2>
<p>Une première observation du déroulement du temps avec le logiciel <a href="">Radiochr</a> montre que la pente de la droite augmente avec le temps écoulé depuis la formation de la roche.</p>
<figure>
<img src="./images/radioChr1.jpg" title="Logiciel Radiochr" />
</figure>
<p>Dans un deuxième temps, l'utilisation de mesures de rapports isotopiques effectuées dans différents minéraux du granite intrusif de Brunobre (St Mamet), près d'Aurillac permet d'obtenir un tracé de la droite d'ajustement et une valeur de sa pente ainsi que de l'âge des roches étudiées.</p>
<p>Les données utilisées sont les suivantes :</p>
<p><span class="math">\(\frac{{}^{87}Rb_{actuel}}{^{86}Sr\)</span> | <span class="math">\(\frac{^{87}Sr_{actuel}}{^{86}Sr}\)</span> |<br />31,50 | 0,8622 |<br />43.35 | 0.9146 |<br />15.38 | 0,7816 |<br />23.43 | 0,8224 |</p>
<p>Voici les résultats affichés par le logiciel :</p>
<figure>
<img src="./images/radioChr2.jpg" title="Logiciel Radiochr" />
</figure>
<h2 id="justification-mathématique">Justification mathématique</h2>
<ol type="1">
<li>Résoudre l'équation <span class="math">\(a=e^{\lambda t}-1\)</span> pour exprimer <span class="math">\(t\)</span> en fonction de la pente <span class="math">\(a\)</span>.</li>
<li>Retrrouver le résultat affiché par le logiciel <a href="">Radiochr</a>.</li>
</ol>

<!-- fin de la balise div container dans le footer -->


<?php include "footer.php" ?>
