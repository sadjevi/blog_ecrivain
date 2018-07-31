<?php $title = 'mes posts'; ?><!-- sheet title here -->

<?php ob_start(); ?>  <!-- storing following HTML code with 'ob_start' function-->	

</header>

<div class="empty"></div>

<div class="container fluid">
	<div class="firstelement">
		<div class="row">		
			<div class="col-xs-5">
				<div class= "jfimg">
					<p><img src="public/images/jf.jpg" alt="Jean Forteroche" />
				</div>
			</div>
			<div class="col-xs-7">
				<div class="jfpr">
					<p>
						Auteur de recueils de nouvelles et de romans, Jean FORTEROCHE possède, outre ses nombreuses publications littéraires, un parcours aux avenues multiples. Né à Montréal en 1933, il est engagé, dans les années soixante, comme réalisateur à Radio-Canada, poste qu’il occupera jusqu’en 1992. Il anime également des émissions de jazz et de littérature et participe à l’émission CBF Bonjour de 1988 à 1997 en tant que chroniqueur radiophonique aux côtés de l’animateur Joël Le Bigot. Il signe plusieurs textes pour les quotidiens Le Devoir et La Presse, de même que pour les périodiques L’Actualité, Liberté, Cité libre et Le Livre d’ici. Avec Jacques Brault et François Ricard, il fonde les Éditions du Sentier en 1978. Reconnu pour son travail d’écrivain et d’éditeur, Gilles Archambault signe un oeuvre considérable marquée par la  mélancolie, la simplicité et la sensibilité.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-lg-offset-3">		
			<div class="part2">	
				<h3 style="text-decoration: underline;">Historique des prix reçus:</h3>

				<ul>
					<li>1981 - Prix Athanase-David, pour l’ensemble de son oeuvre</li>
					<li>1987 - Prix du Gouverneur général du Canada, pour le recueil de nouvelles L’Obsédante obèse et autres agressions</li>
					<li>2005 - Prix Fleury-Mesplet, pour son apport au sein du milieu de l’édition québécoise</li>
				</ul>

				<h3 style="text-decoration: underline;">Liens externes :</h3>

				<ul>
					<li>Fiche de l’auteur aux Éditions du Boréal</li>
					<li>Fiche de l’auteur sur le site de l'Île</li>
					<li>Fiche de l’auteur sur le site des Prix du Québec</li>
					<li>Fiche de l’oeuvre Les rives prochaines (2007) sur Orion</li>
					<li>Entretien paru dans Lettres québécoises</li>
					<li>Entretien paru dans Voix et Images</li>
					<li>Dossier élaboré par Geneviève Dufour et Audrey Thériault</li>
				</ul>

				<h3 style="text-decoration: underline;">Documentation critique classée par oeuvre:</h3>

				<ul>
					<li>Parlons de moi (1970)</li>
					<li>La fuite immobile (1974)</li>
					<li>Le voyageur distrait (1981)</li>
					<li>Les choses d'un jour (1991)</li>
					<li>Un après-midi de septembre (1993)</li>
					<li>Tu ne me dis jamais que je suis belle (1994)</li>
					<li>Un homme plein d'enfance (1996)</li>
					<li>Courir à sa perte (2000)</li>
					<li>Comme une panthère noire (2001)</li>
					<li>De si douces dérives (2003)</li>
					<li>L'ombre légère (2006)</li>
					<li>Qui de nous deux? (2011)</li>
					<li>Gilles Archambault - ensemble de l'oeuvre</li>
					<li>Bibliographie complète</li>
					<li>Une suprême discrétion (1963)</li>
					<li>La vie à trois (1965)</li>
					<li>Le tendre matin (1969)</li>
					<li>Parlons de moi (1970)</li>
					<li>La fleur aux dents (1971)</li>
					<li>Enfances lointaines (1972)</li>
					<li>La fuite immobile (1974)</li>
					<li>Le tricycle, suivi de Bud Cole Blues (1974)</li>
					<li>Les pins parasols (1976)</li>
					<li>Stupeurs (1979)</li>
					<li>Les plaisirs de la mélancolie (1980)</li>
					<li>Le voyageur distrait (1981)</li>
					<li>À voix basse (1983)</li>
					<li>Le regard oblique (1984)</li>
					<li>L’obsédante obèse et autres agressions (1987)</li>
					<li>Premiers amours (1988)</li>
					<li>Chroniques matinales (1989)</li>
					<li>Les choses d’un jour (1991)</li>
					<li>Un après-midi de septembre (1993)</li>
					<li>Tu ne me dis jamais que je suis belle (1994)</li>
					<li>Nouvelles chroniques matinales (1994)</li>
					<li>Un homme plein d’enfance (1996)</li>
					<li>Les maladresses du coeur (1998)</li>
					<li>Courir à sa perte (2000)</li>
					<li>Comme une panthère noire (2001)</li>
					<li>De si douces dérives (2003)</li>
					<li>De l’autre côté du pont (2004)</li>
					<li>L’ombre légère (2006)</li>
					<li>Les rives prochaines (2007)</li>
					<li>Nous étions jeunes encore (2009)</li>
					<li>Un promeneur en novembre (2011)</li>
					<li>Qui de nous deux? (2011)</li>
					<li>Lorsque le coeur est sombre (2013)</li>
					<li>Sortir de chez soi (2013)</li>
					<li>Commentaires et suggestions...</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php $content = ob_get_clean(); ?> <!-- retrieve the previous memorized HTML code with 'ob_get_clean'function & and storing it inside '$content' variable -->

<?php require('template.php'); ?> <!--callin of 'template.php' wich retrieve '$title' & '$content' variables we 've just created -->