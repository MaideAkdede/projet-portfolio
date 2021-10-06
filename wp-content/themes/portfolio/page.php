<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
        <div class="content__wysiwyg"><?php the_content(); ?></div>
    </main>
    <aside class="sidebar">
        <h2 class="sidebar__title">Qui suis-je?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit vero perferendis repellat vel quis placeat
            dolorum. Similique, quidem neque molestias? Aut quidem ad ducimus quae praesentium fuga similique cum
            dolores.</p>
    </aside>
<?php endwhile; endif; ?>
<?php get_footer(); ?>