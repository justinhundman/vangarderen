<?php
/*
Template Name: Landingspagina
*/
?>
 
<?php get_header(); ?>
	<div class="u-gridContainer"> 

	 			<div class="Slider-purple"> 
	 				<div class="verdwijn">
	 			 	<div class="diensten_home" style="position: absolute; color:#ffffff; margin-left:20px">
		 			 	<h2>DIENSTEN</h2>
		 			 	<a href="/diensten-2/#fiscaal"><p>>&nbsp;Fiscale administratie</p></a>
						<a href="/diensten-2/#financieel"><p>>&nbsp;Financiële administratie</p></a>
						<a href="/diensten-2/#salaris"><p>>&nbsp;Salarisadministratie</p></a>
					</div>
						</div>
						<div class="verdwijn">
					<div style="position: absolute; color:#ffffff; margin-left:720px; margin-top: 205px;">
		 			 	<h2>ONZE KERNWAARDEN</h2>
		 			 	<p>&bull;&nbsp;&nbsp;Duidelijkheid</p>
						<p>&bull;&nbsp;&nbsp;Nakomen van afspraken</p>
						<p>&bull;&nbsp;&nbsp;Openheid</p> 
						<p>&bull;&nbsp;&nbsp;Transparantie</p> 
						<p>&bull;&nbsp;&nbsp;Eerlijkheid</p>
					</div> 
				</div>
			 			<div class="Slider"> <!-- Dit is de slider in de onderkant header -->
		                   <?php

										$args = array(
											'post_type' => 'slides',
											'posts_per_page'=>999
										);
										$slides = new WP_Query( $args ); 
										$num = count($slides);
										$counter = 0;
										if( $slides->have_posts() ) {
											while( $slides->have_posts() ) {
												$slides->the_post();
												$counter++;
												?>
												<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
													  $image_url = $image[0];
												?>
												<div class="slide">
													<img src="<?php echo $image_url; ?>" >
												</div>
												<?php
											}
										}
									?>
		                </div> 
	         </div>  
    </div>

	<div class="u-gridContainer">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<div class="textscale">
					<h1><?php the_title(); ?></h1>
				<div>
					<?php the_content(); ?>
				</div>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol9 Contentgray">
				<h2>Contact formulier</h2>
					<?php echo do_shortcode('[gravityform id="2" name=""]'); ?>
			</div>
			<div class="u-gridCol3 Contentgray adresgegevens">
				<h2>Adres</h2>
				<br>
				<p>	Standerdmolen 10F <br>
					3995 AA Houten<br>
					<a href="mailto:info@vgarderen.nl" target="_top">info@vgarderen.nl</a><br>
					<a href="/home">www.vgarderen.nl</a><br>
					<br>
     				<a href="tel:+31306371001">030 637 10 01</a><br>
     				<br>
					<b>Postadres:</b><br>
					Postbus 146<br>
					3990 DC Houten<br>
				</p>	
			</div>
		</div>
	</div>


	<div class="u-gridContainer">
		<div class="u-gridRow">
			
		</div>
	</div>

<?php get_footer(); ?>
