<?php
/*
Template Name: App page
*/
?>

<?php get_header(); ?>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">
					<article class="Content-article u-gridCol8" id="post-<?php the_ID(); ?>">
					<?php // the_content(); ?>
					<b>Bekijk nu ook de informatie van ons bedrijf vanuit de app!</b>
					<br>
					<br>
					De app is beschikbaar in Google Play voor Android apparaten en als webapp voor iOS van Apple telefoons.

					Voor Apple iPhone gebruikers: scan de QR-code of surf naar de website. 
					<br><br>

					<a href="https://play.google.com/store/apps/details?id=com.wAdministratiekantoorvanGarderen">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplay.jpg" class="App-iphone" />
					</a>
					<br><br>

					<a href="http://www.unitag.io/qreator/generate?setting=%7B%22LAYOUT%22%3A%7B%22COLORBG%22%3A%22ffffff%22%2C%22COLOR1%22%3A%22501934%22%7D%2C%22EYES%22%3A%7B%22EYE_TYPE%22%3A%22Spike%22%7D%2C%22BODY_TYPE%22%3A4%2C%22E%22%3A%22H%22%2C%22LOGO%22%3A%7B%22L_NAME%22%3A%22https%3A%2F%2Fstatic-unitag.com%2Ffile%2Ffreeqr%2F1bbcfdbc035fb4e46120211586209a3d.png%22%2C%22EXCAVATE%22%3Atrue%2C%22L_X_Norm%22%3A0.274%2C%22L_Y_Norm%22%3A0.332%2C%22L_WIDTH%22%3A0.452%2C%22L_LENGTH%22%3A0.336%7D%7D&data=%7B%22DATA%22%3A%7B%22URL%22%3A%22http%3A%5C%2F%5C%2Fopn.to%5C%2Fa%5C%2FIcAaN%22%7D%2C%22TYPE%22%3A%22url%22%7D "><img src="http://www.unitag.io/qreator/generate?setting=%7B%22LAYOUT%22%3A%7B%22COLORBG%22%3A%22ffffff%22%2C%22COLOR1%22%3A%22501934%22%7D%2C%22EYES%22%3A%7B%22EYE_TYPE%22%3A%22Spike%22%7D%2C%22BODY_TYPE%22%3A4%2C%22E%22%3A%22H%22%2C%22LOGO%22%3A%7B%22L_NAME%22%3A%22https%3A%2F%2Fstatic-unitag.com%2Ffile%2Ffreeqr%2F1bbcfdbc035fb4e46120211586209a3d.png%22%2C%22EXCAVATE%22%3Atrue%2C%22L_X_Norm%22%3A0.274%2C%22L_Y_Norm%22%3A0.332%2C%22L_WIDTH%22%3A0.452%2C%22L_LENGTH%22%3A0.336%7D%7D&data=%7B%22DATA%22%3A%7B%22URL%22%3A%22http%3A%5C%2F%5C%2Fopn.to%5C%2Fa%5C%2FIcAaN%22%7D%2C%22TYPE%22%3A%22url%22%7D" alt="QR Code - DvG"></a>

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</article>
					<div class="u-gridCol4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iphone.png" class="App-iphone" />
					</div>
				</div> 
				<!-- content-text -->	
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>


