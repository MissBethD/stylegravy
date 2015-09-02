<?php get_header(); ?>

<div class=""></div>

<div class="section page">
	<div class="section-inner clearfix">
		
		<div class="page-wrapper">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>">
		
					<h2 class="page-title"><?php the_title(); ?></h2>
		
					<div class="page-content">
						<?php the_content(); ?>
					</div><!--#pageContent -->
		
				</div><!--#post-#-->
		
			<?php endwhile; ?>
		</div> <!-- .page-wrapper -->
		
		<div class="sidebar">
 			<?php get_sidebar(); ?>
<?php /*
 			<?php include 'instagram-feed.php'; ?>
*/ ?>
		</div> <!-- .sidebar -->
	</div> <!-- .section-inner -->
</div> <!-- .section -->





<?php get_footer(); ?>
