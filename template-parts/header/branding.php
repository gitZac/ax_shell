<div class="navbar-brand">

    <?php if (!has_custom_logo() ) : ?>

        <?php $blog_info = get_bloginfo('name'); ?>

        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

        <?php elseif (has_custom_logo() ) : ?>

        <a class="navbar-item" href="<?php echo esc_url( home_url( '/' ) );?>">
            <?php the_custom_logo(); ?>
        </a>

    <?php endif; ?>

    <button class="button navbar-burger" data-target="primary-menu" aria-controls="primary-menu" aria-haspopup="true" aria-label="Menu Button" aria-pressed="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
    </button>
    
</div>