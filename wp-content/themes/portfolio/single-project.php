<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <main class="single-project">
        <h1 class="single-project__title"><?php the_title(); ?></h1>

        <div class="single-project__excerpt">
            <p class="excerpt__p"><?php the_excerpt(); ?></p>
            <a href="<?= get_field('website_url'); ?>"><?= __('Voir le site', 'p'); ?></a>
        </div>
        <div class="single-project__image">
            <?php $image = get_field('project_image'); ?>
            <img alt="<?= $image['alt']; ?>"
                 src="<?= $image['sizes']['medium']; ?>"
                 srcset="<?= $image['sizes']['medium']; ?> 300w,
                         <?= $image['sizes']['medium_large']; ?> 768w,
                         <?= $image['sizes']['large']; ?> 1024w"
            />
        </div>

        <div class="single-project__wysiwyg">
            <?php the_content(); ?>
        </div>
        <div class="colors_container">
            <h2 class=""><?= __('Palette de couleur', 'p'); ?></h2>
            <div class="colors">
                <?php for ($i = 1; $i <= 5; $i++): if (!empty(get_field('color_' . $i))): ?>
                    <div class="color" style="background: <?= the_field('color_' . $i) ?>"></div>
                <?php endif; endfor; ?>
            </div>
        </div>

    </main>
<?php endwhile;
else : ?>
    <div class="empty">
        <p class="empty__message"><?= __("Aucun projet n'a été trouvé.", 'p'); ?>.</p>
    </div>
<?php endif; ?>
<?php
$projects = new WP_Query([
    'post_type' => 'project',
    'posts_per_page' => 3,
    'order' => 'desc',
]);

if ($projects->have_posts()) : while ($projects->have_posts()) :
    $projects->the_post(); ?>
    <article class="other-project">
        <h2><?= __('Mes derniers projets', 'p');?></h2>
        <div class="other-project__thumbnail">
            <h3 class="project__name"><?php the_title(); ?></h3>
            <?php $image = get_field('project_thumbnail'); ?>
            <img alt="<?= $image['alt']; ?>"
                 src="<?= $image['sizes']['thumbnail']; ?>"
                 srcset="<?= $image['sizes']['thumbnail']; ?> 150w,
                                     <?= $image['sizes']['medium']; ?> 300w"
            />
        </div>
        <a href="<?php the_permalink(); ?>" class="other-project__link">
            <span><?= __('Voir le projet', 'p'); ?></span>
        </a>
    </article>
<?php endwhile; else:?>
<p>Aucun project n'a été trouvé !</p>
<?php endif; ?>
<?php get_footer(); ?>