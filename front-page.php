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
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar-brand">
                                <a href="#" class="navbar-item">
                                    <img src="http://bulma.io/images/bulma-type-white.png" alt="">
                                </a>
                                <span data-target="navbarMenu" class="navbar-burger burger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                            <div id="navbarMenu" class="navbar-menu">
                                <div class="navbar-end">
                                    <div class="tabs is-right">
                                        <ul>
                                            <li class="is-active"><a>Home</a></li>
                                            <li><a href="">Examples</a></li>
                                            <li><a href="">Features</a></li>
                                            <li><a href="">Team</a></li>
                                            <li><a href="">Help</a></li>         
                                        </ul>
                                        <span class="navbar-item">
                                            <a class="button is-white is-outlined" href="https://github.com/BulmaTemplates/bulma-templates/blob/master/templates/hero.html">
                                                <span class="icon">
                                                    <i class="fa fa-github"></i>
                                                </span>
                                                <span title="Hello from the other side">View Source</span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div> <!-- ./Hero Nav-->
                <div class="hero-body">
                    <div class="container has-text-centered">
                        <h1 class="title">Welcome to Ax_</h1>
                        <h2 class="subtitle">A bulma-based WP Theme. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde exercitationem repudiandae recusandae minima consectetur nostrum illo, eum maxime quos laborum libero accusantium ipsam ipsum iure rerum dolorem. Enim, quis temporibus?</h2>
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

                    <div class="tile is-ancestor">
                        <div class="tile is-vertical is-8">
                           <div class="tile">
                               <div class="tile is-parent is-vertical">
                                   <article class="tile is-child notification is-white">
                                       <p class="title">Vertical Tiles</p>
                                       <p class="subtitle">Bottom Box</p>
                                   </article>
                                   <article class="tile is-child notification is-white">
                                       <p class="title">Vertical Tiles</p>
                                       <p class="subtitle">Bottom Box</p>
                                   </article>
                               </div> <!-- ./Parent  -->
                               <div class="tile is-parent">
                                    <article class="tile is-child notification is-white">
                                        <p class="title">Middle Box</p>
                                        <p class="subtitle">With an image (remember to put an image here.)</p>
                                        <figure class="image is-4by3">
                                            <img src="https://picsum.photos/640/480/?random" alt="Desc">
                                        </figure>
                                    </article>
                               </div> <!-- ./Parent  -->
                           </div> <!-- ./Tile  -->
                           <div class="tile is-parent is-shady">
                               <article class="tile is-child notification is-white">
                                   <p class="title">Wide column</p>
                                   <p class="subtitle">Aligned with right column</p>
                                   <div class="content">
                                       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptatum amet hic quae numquam nisi, nobis ullam minima sed reiciendis sint excepturi quod, possimus voluptates! Excepturi reprehenderit animi labore numquam?</p>
                                   </div>
                               </article>
                           </div> <!-- ./Parent Tile  -->
                        </div> <!-- ./Tile.is-vertical  -->
                        <div class="tile is-parent is-shady">
                            <article class="tile is-child notification is-white">
                                <div class="content">
                                    <p class="title">Tall Column</p>
                                    <p class="subtitle">With even more content</p>
                                    <div class="content">
                                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequatur earum quos ratione voluptatibus maxime obcaecati doloremque odio sed, eum quibusdam sapiente, praesentium ipsam minus ut architecto. Magni, necessitatibus ea!</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque deleniti nostrum iure incidunt, earum, minus quia quis maiores corporis dolorem harum laudantium nisi doloremque adipisci, ullam fugiat accusamus consectetur explicabo.</p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam consectetur rem nobis tempora sunt distinctio reprehenderit voluptates quasi cumque, tenetur totam ex quos mollitia omnis incidunt impedit recusandae assumenda ad.</p>
                                    </div>
                                </div>
                            </article>
                        </div> <!-- ./Parent Tile  -->
                    </div> <!-- ./Ancestor-->
                    <div class="tile is-ancestor">
                        <div class="tile is-parent is-shady">
                            <article class="tile is-child notification is-white">
                                <p class="title">Side Column</p>
                                <p class="subtitle">With some content</p>
                                <div class="content">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate, delectus quo aspernatur dolorum minima ab accusantium neque doloribus reiciendis quasi corporis, ut soluta dolor harum fugit porro quia similique a.
                                </div>
                            </article>
                        </div> <!-- ./Parent Tile  -->
                        <div class="tile is-parent is-8 is-shady">
                            <article class="tile is-child notification is-white">
                                <p class="title">Main Column</p>
                                <p class="subtitle">With some content</p>
                                <div class="content">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, ipsa? Nostrum consectetur eaque repellat illum libero ratione ut, fuga quae dolore ullam laboriosam vitae provident, quaerat temporibus. Voluptates, asperiores velit!
                                </div>
                            </article>
                        </div>
                    </div> <!-- ./Ancestor-->
                    <div class="tile is-ancestor">
                        <div class="tile is-parent is-8 is-shady">
                            <div class="tile is-child notification is-white">
                                <article class="tile is-child notification is-white">
                                    <p class="title">Murphy's Law</p>
                                    <p class="subtitle">Anything that can go wrong will go wrong.</p>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. In obcaecati rem fugiat molestias ut sapiente dignissimos ipsum, tempora voluptatum nam! Tempora maxime quod consequuntur assumenda nisi? Soluta neque reprehenderit nobis!</p>
                                    </div>
                                </article>
                            </div>
                        </div> <!-- ./Parent Tile  -->
                        <div class="tile is-parent is-shady">
                            <article class="tile is-child notification is-white">
                                <p class="title">Main Column</p>
                                <p class="subtitle">With some content</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit iure laborum magnam obcaecati ipsum sit eveniet nostrum dolorem culpa eos molestiae minus recusandae iste magni velit eaque nihil, facilis atque.</p>
                                </div>
                            </article>
                        </div>
                    </div> <!-- ./Ancestor-->
                </div> <!-- ./Sandbox-->
            </section>
            <footer class="footer">
                <div class="container">
                    <div class="columns">
                        <div class="column is-3 is-offset-2">
                            <h2><strong> Category</strong></h2>
                            <ul>
                                <li><a href="#" class="">Link1</a></li>
                                <li><a href="#" class="">Link2</a></li>
                                <li><a href="#" class="">Link3</a></li>
                                <li><a href="#" class="">Link4</a></li>
                                <li><a href="#" class="">Link5</a></li>
                            </ul>
                        </div>
                        <div class="column is-3">
                            <h2><strong> Category</strong></h2>
                            <ul>
                                <li><a href="#" class="">Link1</a></li>
                                <li><a href="#" class="">Link2</a></li>
                                <li><a href="#" class="">Link3</a></li>
                                <li><a href="#" class="">Link4</a></li>
                                <li><a href="#" class="">Link5</a></li>
                            </ul>
                        </div>
                        <div class="column is-4">
                            <h2><strong> Category</strong></h2>
                            <ul>
                                <li><a href="#" class="">Objects in space</a></li>
                                <li><a href="#" class="">Playing cards with coyote</a></li>
                                <li><a href="#" class="">Goodbye Yellow Brick Road</a></li>
                                <li><a href="#" class="">The Garden of Forking Paths</a></li>
                                <li><a href="#" class="">Future Shock</a></li>
                            </ul>
                        </div>

                    </div> <!-- ./Columns -->
                    <div class="content has-text-centered">
                        <p>
                            <a class="icon" href="https://github.com/BulmaTemplates/bulma-templates">
                                <i class="fa fa-github"></i>
                            </a>
                        </p>
                        <div class="contol level-item">
                            <a href="#">
                                <div class="tags has-addons">
                                    <span class="tag is-dark">Bulma Templates</span>
                                    <span class="tag is-info">MIT license</span>
                                </div>                            
                            </a>
                        </div>                           
                    </div>
                </div> <!-- ./Container -->
            </footer>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
