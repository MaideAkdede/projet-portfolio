<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
        <header class="content__hero">
            <h2 class="content__title">Ceci est le hero</h2>
            <p class="content__tagline"><?php bloginfo('description'); ?></p>
        </header>
        <div class="content__wysiwyg"><?php the_content(); ?></div>

    </main>
<?php endwhile; else : ?>
    <div class="empty">
        <p class="empty__message">Oups, nous n'avons rien à afficher.</p>
    </div>
<?php endif; ?>
<?php get_footer(); ?>