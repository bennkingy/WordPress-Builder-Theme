<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="home-banner">

    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="jumbotron bg-transparent py-0">

            <p class="text-white highlight mt-0"><span></span>Plumbing man</p>

            <h1 class="display-4 text-white">Reliable Professionals</h1>

            <p class="lead text-white">Whether you need a simple tap installation or a complete heating system replacement, we offer a wide range of residential and commercial plumbing services to meet your needs. We continually strive to exceed expectations by ensuring that each client receives the best.</p>
           
            <p class="lead text-white mb-2">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
            
        </div>

        </div>
    </div>
</div>

<div class="main-services">

    <div class="<?php echo esc_attr( $container ); ?>">

    <div class="row home-services justify-content-center">

        <div class="home-services-card col-xs-3 col-md-6 col-lg-4 text-center">
            <div> <a href="/drainage-services/cracked-blocked-pipes/" title="Cracked Blocked Pipes"> <img src="https://proseptic.co.uk/wp-content/themes/proseptic-theme/images/Cracked Bloked Pipes.svg" alt="Cracked Blocked Pipes" border="0">
            <h4>Blockages and Repairs</h4>
            <p>Professional, reliable advice, repairs and replacements for cracked and blocked sewage pipes.</p>
            <span class="explore-now">Explore now <i class="icon icon-arrow-right"></i></span> </a> </div>
        </div>
        <div class="home-services-card col-xs-3 col-md-6 col-lg-4 text-center">
            <div> <a href="/drainage-services/pipe-linings/" title="Pipe Linings"> <img src="https://proseptic.co.uk/wp-content/themes/proseptic-theme/images/Pipe Linings.svg" alt="Pipe Linings" border="0">
            <h4>Drainage Linings</h4>
            <p>Proseptic have over 30 years’ experience in the lining of pipes and bring unrivalled industry knowledge.</p>
            <span class="explore-now">Explore now <i class="icon icon-arrow-right"></i></span> </a> </div>
        </div>
        <div class="home-services-card col-xs-3 col-md-6 col-lg-4 text-center">
            <div> <a href="/drainage-services/cracked-blocked-pipes/"> <img src="https://proseptic.co.uk/wp-content/themes/proseptic-theme/images/Home Buyar Drainage Surveys.svg" alt="Home Buyer Drainage Surveys" border="0">
            <h4>High Pressure Jetting</h4>
            <p>High pressure water jetting service to clear local sewer systems or household drainage systems.</p>
            <span class="explore-now">Explore now <i class="icon icon-arrow-right"></i></span> </a> </div>
        </div>
        </div>

    </div>

</div>

<div class="home-recent-jobs">

    <div class="<?php echo esc_attr( $container ); ?>">

        <?php 
            $loop = new WP_Query( array( 'post_type' => 'recent-jobs', 'posts_per_page' => 9 ) ); 

            while ( $loop->have_posts() ) : $loop->the_post();

            echo '<div/>';

            the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
        ?>
    
            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            </div>

        <?php endwhile; ?>

    </div>

</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
get_footer();
