<?php /* Template Name:Homepage */ ?>
<?php get_header(); ?>

<div class="section carousel">
	<div class="section-inner">
		<div class="content-wrap">
		
			<div class="slideshow">
			    <? $new_query = new WP_Query(array( 
			        'posts_per_page' => 3, 
			        'orderby' => 'menu_order',
			        'order' => 'ASC', 
			        'post_type' => 'slide'
			    ) );     ?>
				    <ul class="bxslider">
				    <? while ( $new_query->have_posts() ) : $new_query->the_post();?>
				        <li>
				            <a class="slide-image" href="<?php echo get_post_meta($post->ID, '_cmb_slide_url',true); ?>"><img src="<?php echo get_post_meta($post->ID, '_cmb_slide_image',true); ?>" width="400" height="315" alt="" /><span><?php the_content(); ?></span></a>
				        </li>
				        <li>
				        	<a class="slider-description"></a> <!-- .slider-description -->
				        </li>
				    <?php endwhile;?>
				    <? wp_reset_query(); ?>
				    </ul>
			</div> <!-- slideshow -->
			
		</div><!-- .content-wrap -->
	</div> <!-- .section-inner -->
</div> <!-- .section .carousel -->	



<div class="section home-content">
	<div class="section-inner clearfix">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
	
				<h2 class="greeting"><?php the_title(); ?></h2>
	
				<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?>
	
				<div class="page-content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!--#pageContent -->
	
				<?php /*
				<div class="page-meta">
									<h3>Written by <?php the_author_posts_link() ?></h3>
									<p>
										Posted on <?php the_time('F j, Y'); ?> at <?php the_time() ?>
									</p>
								</div><!--#pageMeta-->
				*/ ?>
			</div><!--#post-# .post-->
	
	
		<?php endwhile; ?>
	</div> <!-- .section-inner -->
</div> <!-- .section .home-content -->

	
<div class="section journal">
	<div class="section-inner clearfix">	
		
		<div class="journal-wrapper">
<!-- 			<h2 class="journal-entry-title">Journal</h2> -->
			
			<div class="journal-entry-container">
				<? $new_query = new WP_Query(array( 
					'post_type' => 'post',
					'posts_per_page' => 2, 
					'orderby' => 'date',
					'order' => 'ASC', 
				) );	 ?>
				<? while ( $new_query->have_posts() ) : $new_query->the_post(); ?>
				
					<div class="journal-entry">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</div> <!-- .journal-entry -->
				
				<?php endwhile;?>
				<? wp_reset_query(); ?>
			</div> <!-- .journal-entry-container -->
		</div> <!-- .journal-wrapper -->

	</div> <!-- .section-inner -->
</div> <!-- .section .inner-content -->		

<?php get_footer(); ?>
