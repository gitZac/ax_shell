<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays the front page of the theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AxShell
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <section class="hero is-info is-medium is-bold">
                <div class="hero-head">
                    <!-- Navbar code -->
                </div> <!-- ./Hero Nav-->
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <h1 class="title">Welcome to Ax_</h1>
                        <h2 class="subtitle">A bulma-based WP Theme.</h2>
                    </div>
                </div> <!-- ./Hero Body-->
            </section> <!-- ./Hero -->
            <div class="box cta">
                <p class="has-text-centered">
                    <span class="tag is-primary">New</span> What's this theme do? I don't know yet, but this will be an Alert Module!
                </p>
            </div>
            <section class="container">
                <div class="columns features">
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image has-text-centered">
                                <i class="fa fa-paw" aria-hidden="true"></i>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4>This is a card. It looks neat.</h4>
                                    <p>Soon it will be dynamic. I'd like to make these able to generate to different templates via a Custom Post Type. Not sure how to do that yet, I will have to see how other themes do it :)</p>
                                    <p><a href="#">An A tag nested inside a p-tag?</a></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./Column-->
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image has-text-centered">
                                <i class="fa fa-empire" aria-hidden="true"></i>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4>This is a card. It looks neat.</h4>
                                    <p>Soon it will be dynamic. I'd like to make these able to generate to different templates via a Custom Post Type. Not sure how to do that yet, I will have to see how other themes do it :)</p>
                                    <p><a href="#">An A tag nested inside a p-tag?</a></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./Column-->
                    <div class="column is-4">
                        <div class="card is-shady">
                            <div class="card-image has-text-centered">
                                <i class="fa fa-apple" aria-hidden="true"></i>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    <h4>This is a card. It looks neat.</h4>
                                    <p>Soon it will be dynamic. I'd like to make these able to generate to different templates via a Custom Post Type. Not sure how to do that yet, I will have to see how other themes do it :)</p>
                                    <p><a href="#">An A tag nested inside a p-tag?</a></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- ./Column-->

                </div> <!-- ./ColumnS-->
            </section>
            <section class="container">
                <div class="intro column is-8 is-offset-2">
                    <h2 class="title">This is a standalone header.</h2>
                    <p class="subtitle">This will be turned into a standalone SCSS module for sure.</p>
                </div>
                <div class="sandbox">
                    <div class="tile is-ancestor">
                        <div class="tile is-parent is-shady">
                            <article class="tile is-child notification is-white">
                                <p class="title">Foo</p>
                                <p class="subtitle">BAr</p>
                            </article>
                        </div>
                        <div class="tile is-parent is-shady">
                            <article class="tile is-child notification is-white">
                                <p class="title">A second foo</p>
                                <p class="subtitle">nother Bar</p>
                            </article>                           
                        </div>
                        <div class="tile is-parent is-shady">
                            <article class="tile is-child notification is-white">
                                <p class="title">A second foo</p>
                                <p class="subtitle">nother Bar</p>
                            </article>                           
                        </div> 
                    </div><!-- ./Ancestor-->
    
                </div> <!-- ./Sandbox-->

            </section>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
