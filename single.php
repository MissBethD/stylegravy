<?php get_header(); ?>
<div class="content-wrap">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; ?>

					<div class="post-content">
						<?php the_content(); ?>
						<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
					</div><!--#post-content-->
					
					<div class="post-meta">
						<p>
							Posted on <?php the_time('F j, Y'); ?> at <?php the_time() ?>
						</p>
						<p>
							<?php comments_popup_link('No comments', 'One comment', '% comments', 'comments-link', 'Comments are closed'); ?> 
						</p>
						<p>
							Categories: <?php the_category(', ') ?>
							<br />
							<?php the_tags('Tags: ', ', ', ' '); ?>
						</p>
						<p>
							Recieve new post updates: <a href="<?php bloginfo('rss2_url'); ?>" rel="nofollow">Entries (RSS)</a>
							<br />
							Recieve follow up comments updates: <?php comments_rss_link('RSS 2.0'); ?>
						</p>
					</div><!--#post-meta-->
					
					<!-- If a user fills out their bio info, it's included here -->
					<div class="post-author">
						<h3>Written by <?php the_author_posts_link() ?></h3>
						<div id="author-gravatar">
							<!-- This avatar is the user's gravatar (http://gravatar.com) based on their administrative email address -->
							<?php echo get_avatar( $curauth->user_email, $default = '<path_to_url>' ); ?>
						</div><!--#author-gravatar -->
						<div id="authorDescription">
							<?php the_author_meta('description') ?> 
							<div id="author-link">
								<p>View all posts by: <?php the_author_posts_link() ?></p>
								
							</div><!--#author-link-->
						</div><!--#author-description -->
					</div><!--#post-author-->

				</div><!-- #post-## -->

				<div class="newer-older">
					<div class="older">
						<p>
							<?php previous_post_link('%link', '&laquo;&nbsp;Previous Post') ?>
						</p>
					</div><!--.older-->
					<div class="newer">
						<p>
							<?php next_post_link('%link', 'Newer post&nbsp;&raquo;') ?>
						</p>
					</div><!--.newer-->
				</div><!--.newer-older-->

				<?php comments_template( '', true ); ?>

	<?php endwhile; ?><!--end loop-->
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>