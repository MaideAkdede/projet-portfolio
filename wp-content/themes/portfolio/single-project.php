<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="single-project">
        <h1 class="single-project__title"><?php the_title(); ?></h1>

        <div class="single-project__wrapper">
            <div class="single-project__excerpt text">
                <?php the_excerpt(); ?>
                <a class="button" href="<?= get_field('website_url'); ?>"><?= __('Voir le site', 'p'); ?></a>
            </div>
            <div class="single-project__image">
                <?php $image = get_field('project_image'); ?>
                <img class="image" alt="<?= $image['alt']; ?>"
                     src="<?= $image['sizes']['medium']; ?>"
                     srcset="<?= $image['sizes']['medium']; ?> 300w,
                         <?= $image['sizes']['medium_large']; ?> 768w,
                         <?= $image['sizes']['large']; ?> 1024w"
                />
            </div>
            <div class="separation">
                <div class="colors_container">
                    <h2 class="colors__title sro"><?= __('Palette de couleur', 'p'); ?></h2>
                    <div class="colors">
                        <?php for ($i = 1; $i <= 5; $i++): if (!empty(get_field('color_' . $i))): ?>
                            <div class="color" style="background: <?= the_field('color_' . $i) ?>"></div>
                        <?php endif; endfor; ?>
                    </div>
                </div>

                <div class="single-project__wysiwyg text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile;
else : ?>
    <div class="empty">
        <p class="empty__message"><?= __("Aucun projet n'a été trouvé.", 'p'); ?>.</p>
    </div>
<?php endif; ?>


    <div class="projects__other projects__single-project">
        <h2 class="projects__title title"><?= __("Mes derniers projects", 'p'); ?></h2>
        <div class="projects__wrapper">

            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'posts_per_page' => 3,
                'order' => 'desc',
            ]);
            if ($projects->have_posts()) : while ($projects->have_posts()) :
                $projects->the_post(); ?>
                <article class="projects__container">
                    <h3 class="projects__name"><?php the_title(); ?></h3>
                    <div class="projects__thumbnail">

                        <?php $image = get_field('project_thumbnail'); ?>
                        <img class="projects__image" alt="<?= $image['alt']; ?>"
                             width="100%" height="100%"
                             src="<?= $image['sizes']['thumbnail']; ?>"
                             srcset="<?= $image['sizes']['thumbnail']; ?> 150w,
                                     <?= $image['sizes']['medium']; ?> 300w"
                        />

                    </div>
                    <a href="<?php the_permalink(); ?>" class="projects__link">
                        <span class="button"><?= __('Voir le projet', 'p'); ?></span>
                    </a>
                </article>
            <?php endwhile; else: ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>