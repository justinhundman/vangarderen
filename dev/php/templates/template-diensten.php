<?php
/*
Template Name: Diensten
*/
?>

<?php get_header(); ?>
	<div class="contentdiensten">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
					<div class="u-gridCol8">
					<div class="accordion">
					    <span><a name="1" href="#1"><h2>>&nbsp;Fiscale administratie</h2></a></span>
					</div>
					<div class="accContent fiscaal">
					    <p>	De boekhouding is de ruggengraat van de onderneming. Niet alleen slechts een fiscale verplichting, maar vooral de weergave van het welzijn van het bedrijf.
							Analyse van de cijfers geeft aan waar de kansen en waar de problemen liggen. Regelmatig geven wij u een kort overzicht van de baten en de lasten. Daarnaast
							kunnen wij U bedrijfseconomische adviezen geven waarmee U zich verder kunt ontplooien. Voor dit alles is een adequate boekhouding de basis waarmee wij werken.
							<br><br>
							<img src="http://vangarderen.lijktmeduidelijk.nl/files/2015/02/fiscaal.png">
							<br><br>
							Natuurlijk bepaalt U zelf welk deel van de administratie U aan ons uitbesteedt.
							<br>
							Voor fiscale dienstverlening bent U bij ons kantoor aan het juiste adres. Wij verzorgen graag onderstaande aangiftes voor U:
							<br>
						</p>
								<ul>
									<li>&bull;&nbsp;&nbsp;Omzetbelasting</li>
									<li>&bull;&nbsp;&nbsp;Loonheffing</li>
									<li>&bull;&nbsp;&nbsp;Loonheffing</li>
									<li>&bull;&nbsp;&nbsp;Inkomstenbelasting</li>
									<li>&bull;&nbsp;&nbsp;Vennootschapsbelasting</li>
									<li>&bull;&nbsp;&nbsp;Dividendbelasting</li>
								</ul>
						<p>
							Tevens kunnen wij op fiscaal gebied nog meer voor U betekenen, zoals het indienen van bezwaar- en beroepschriften.
							<br>
							Dit is een noodzakelijk kwaad, maar vraagt veel tijd en kennis van ondernemers.
							<br>
							Begeleiding bij belastingcontroles behoort ook tot de mogelijkheden.
						</p>
					</div>
					<div class="accordion">
					    <span><a name="2" href="#2"><h2>>&nbsp;Financiele administratie</h2></a></span>
					</div>
					<div class="accContent financieel">
					    <p>	Financiële administratie biedt houvast in uw ondernemingsdynamiek. De boekhouding is de ruggengraat van de onderneming. Niet alleen slechts een fiscale verplichting, maar vooral de weergave van het welzijn van het bedrijf.
					    	<br><br>
					    	<img src="http://vangarderen.lijktmeduidelijk.nl/files/2015/02/financieel.png">
					    	<br><br>
							Analyse van de cijfers geeft aan waar de kansen en waar de problemen liggen. Regelmatig kunnen wij U een kort overzicht van de baten en de lasten. Daarnaast kunnen wij U bedrijfseconomische adviezen geven waarmee U zich 
							verder kunt ontplooien. Voor dit alles is een adequate boekhouding de basis waarmee wij werken.
							<br><br>
							Een betrouwbare financiële administratie is van essentieel belang om inzicht te hebben in het reilen en zeilen van de onderneming. 
							Voor uzelf, maar ook voor externe belanghebbenden en financiële instellingen.</p>
					</div>

					<div class="accordion">
					    <span><a name="3" href="#3"><h2>>&nbsp;Salarisadministratie</h2></a></span>
					</div>
					<div class="accContent salaris">
					    <p>	Een goede salarisadministratie is van belang voor U als ondernemer maar zorgt daarnaast tevens voor tevredenheid bij uw personeel.
					    	<br><br>
					    	<img src="http://vangarderen.lijktmeduidelijk.nl/files/2015/02/salaris.png">
					    	<br><br>
							Door uitbesteding houdt U meer tijd over die U kunt besteden aan uw ondernemingsactiviteiten.
							<br><br>
							Indien U besluit uw salarisadministratie door ons kantoor te laten verzorgen kunnen wij U van dienst zijn met:
							<ul>
								<li>&bull;&nbsp;&nbsp;Loonstroken voor uw personeel</li>
								<li>&bull;&nbsp;&nbsp;Aangiften loonheffing</li>
								<li>&bull;&nbsp;&nbsp;Aanmelden werknemers bij de belastingdienst</li>
								<li>&bull;&nbsp;&nbsp;Jaarloonopgaven</li>
							</ul>
						</p>
					</div>
				</div>
				<div class="u-gridCol4">
						<img src="http://vangarderen.lijktmeduidelijk.nl/files/2015/02/diensten.jpg">
					</div>
				<!-- content-text -->	
			</div>
		</article>
				<div class="u-gridRow">
					<div class="u-gridCol4">

					</div>
				</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
