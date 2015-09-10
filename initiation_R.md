%Initiation à R
%
%Dernière révision : 18 avril 2014

Cette page regroupe les notes prises lors de l'étude du MOOC [Introduction à la Statistique avec R](http://www.france-universite-numerique-mooc.fr/courses/Paris11/15001/Trimestre_2_2014/about) proposé par l'Université Paris-Sud sur la plateforme FUN.

#Bases

* Pour affecter une valeur à une variable on utilise `<-`. Par exemple `a<-sqrt(2)` affecte la valeur $\sqrt{2}$ à la variable `a`.
* Pour accéder à une variable dans un jeu de données, on utilise le symbole `$`. Par exemple, pour afficher un résumé de la variable `prof`, indiquant la profession des détenus, on tapera : `str(donnees$prof)`.

#Import d'un fichier de données

* Le fichier doit être au format .csv
* Chaque colonne correspond aux données relatives à l'un des caractères étudiés (variables) et la première ligne contient le nom des caractères étudiés.
* La commande pour importer les données et les stocker par exemple dans la variable `donnees` est : `donnees <- read.csv2("/home/user/Documents/MOOCS/R/smp1.csv")`.
* La commande `str()` permet d'afficher un résumé des données importées (nombre de variables, nombre de valeurs (observations)). Sur la figure ci-dessous, on a utilisé la commande `str(donnees)'.

![Utilisation de `read.csv2()`](read_csv2.png)

* La commande `read.csv()` diffère de `read.csv2()` au niveau de la nature du séparateur entre les données : il s'agit d'une virgule pour la première et d'un point-virgule pour la seconde.

#Traitement des données

* Pour obtenir un regroupement des valeurs d'une variable dans un tableau d'effectifs, on utilise la fonction `table`. Par exemple : `table(donnees$prof)` donne le résultat ci-dessous.

![Commande `table()`](table.png)

#Représentations graphiques

* Pour une variable qualitative, on peut réaliser un diagramme en bâtons, avec la commande `barplot()`. Voici le graphique obtenu avec la commande `barplot(table(donnees$prof))'.

![Diagramme en bâtons](barplot.png)

* Pour un diagramme circulaire, on tapera `pie(table(donnees$prof))`.

![Diagramme circulaire](pie.png)

* Une variable quantitative peut être représentée par un histogramme avec la commande `hist()`. Par exemple, `hist(donnees$age)` produit la figure suivante.

![Histogramme](hist.png)

* Paramètres pour l'histogramme : `col` permet de régler la couleur, `main` la titre principal, `xlab` le label de l'axe des abscisses, `ylab` celui de l'axe des ordonnées.

![`hist(donnees$age, col = "green", main = "Un bien bel histogramme", xlab = "âge", ylab = "fréquence")`](hist2.png)

* Représentation d'une variable quantitative par une boîte à moustaches : commande `boxplot()`. Par exemple : `boxplot(donnees$age, xlab = "âge")`.

![Boîte à moustaches](boxplot.png)

* On peut aussi facilement représenter par exemple la répartition des âges suivant les niveaux de recherche de sensation : `boxplot(donnees$age~donnees$rs, ylab="âge", xlab="Recherche de sensation")`.

![Boîte à moustaches comparatives](boxplot2.png)

* Pour représenter une variable en fonction d'une autre, on utilise la fonction `plot()`. Par exemple : `plot(donnees$age, donnees$n.enfant)` pour représenter le nombre d'enfants en fonction de l'âge.

![Nuage de points](plot1.png)

* Plusieurs points sont superposés sur le graphique précédent. L'option `jitter` ajoute un petit "bruit" aléatoire aux coordonnées des points afin de bien voir l'accumulation de plusieurs points au même endroit. Exemple : `plot(jitter(donnees$age), jitter(donnees$n.enfant))`.

![Nuage de points](plot2.png)





