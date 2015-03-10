<?php
/*
Template Name: Contentpagina
*/
?>

<?php get_header(); ?>
	<div class="contentdiensten">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">
					<div class="u-gridCol8">
						<?php the_content(); ?>
					</div>
					<div class="u-gridCol4">
						<img src="http://vangarderen.lijktmeduidelijk.nl/files/2015/02/team.jpg">
					</div>
				</div> 
				<!-- content-text -->	
			</div>
		</article>
				<div class="u-gridRow">
				
				</div>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>
