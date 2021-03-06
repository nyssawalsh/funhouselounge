<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<div class="footer-instagram-feed">
		<?php
			    // query for the calendar page
			    $your_query = new WP_Query( 'pagename=instagram-feed' );
			    // "loop" through query (even though it's just one page) 
			    while ( $your_query->have_posts() ) : $your_query->the_post();
			        the_content();
			    endwhile;
			    // reset post data (important!)
			    wp_reset_postdata();
			?>
	</div>

		</section>
		
		<div class="footer-container" data-sticky-footer>
			<footer class="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>

<style>
.footer {color: white; font-size: 13px;}
.footer a {color: white;}
.footer li {line-height: 1.3}
</style>

<div class="row">
<div class="medium-4 columns">
<h3>Hours</h3>
<ul class="no-bullet">
<li>Mon: closed</li>
<li>Tue: closed</li>
<li>Wed: 6pm-12am</li>
<li>Thur: 6pm-12am</li>
<li>Fri: 6pm-2am</li>
<li>Sat: 6pm-12am</li>
<li>Sun: 5pm-10pm</li>
<li><em>Hours may vary based on show schedules</em></li>
</ul>
</div>
<div class="medium-4 columns">
<h3>Address</h3>
<ul class="no-bullet">
<li>2432 SE 11th Ave.</li>
<li>Portland, OR  97214</li>
</ul>
</div>

<div class="medium-4 columns">
<h3>Contact us</h3>
<ul class="no-bullet">
<li><a href="mailto:info@funhouselounge.com"><i class="fa fa-envelope"></i>  info@funhouselounge.com</a></li>
<li><a href="tel:5038416734"><i class="fa fa-phone"></i>  503-841-6734</a></li>
</ul>
</div>
</div>


				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
