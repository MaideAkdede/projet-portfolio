<?php get_header(); ?>

    <section class="introduction">
        <h2 class="introduction__title__hidden"><?= __('Développeur Front-End', 'p'); ?></h2>
        <p class="introduction__title"></p>
        <p class="introduction__text"><?php the_field('introduction_text'); ?></p>
        <div class="introduction__buttons">
            <div class="introduction__button button__contact">
                <a href="#contact" class="button button__filled"><?= __('Contactez-moi', 'p'); ?></a>
            </div>
            <div class="introduction__button button__project">
                <a href="#projects" class="button button__unfilled"><?= __('Voir mes projets', 'p'); ?></a>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="projects__title title"><?= __('Mes projets', 'p'); ?></h2>
        <div class="projects__container">
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'posts_per_page' => 100,
                'order' => 'desc',
            ]);
            if ($projects->have_posts()) : while ($projects->have_posts()) :
            $projects->the_post(); ?>
            <article class="project">
                <h3 class="project__name"><?php the_title(); ?></h3>
                <div class="project__thumbnail">

                    <?php $image = get_field('project_thumbnail'); ?>
                    <img alt="<?= $image['alt']; ?>"
                         src="<?= $image['sizes']['thumbnail']; ?>"
                         srcset="<?= $image['sizes']['thumbnail']; ?> 150w,
                                     <?= $image['sizes']['medium']; ?> 300w"
                    />

                </div>
                <a href="<?php the_permalink(); ?>" class="project__link">
                    <span><?= __('Voir le projet', 'p'); ?></span>
                </a>
        </div>
        <?php endwhile;
        endif; ?>
    </section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="about" id="about">
        <h2 class="about__title  title"><?= __('À propos', 'p'); ?></h2>
        <div class="about__wysiwyg"><?php the_content(); ?></div>
    </section>
<?php endwhile; endif; ?>

    <section class="contact" id="contact">
        <h2 class="contact__title title"><?= __('Contactez-moi', 'p'); ?></h2>
    </section>
<?php get_footer(); ?>