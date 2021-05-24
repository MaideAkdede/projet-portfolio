<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="content">
        <div class="content__wysiwyg">
            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; else : ?>
    <div class="empty">
        <p class="empty__message">Oops, nous n'avons rien à afficher.</p>
    </div>
<?php endif; ?>
<?php get_header(); ?>
    <section class="projects">
        <h2 class="projects__title title"><?= __('Mes projets', 'p');?></h2>
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

                    <?php $image = get_field('project_thumbnail');?>
                    <img alt="<?= $image['alt']; ?>"
                         src="<?= $image['sizes']['thumbnail']; ?>"
                         srcset="<?= $image['sizes']['thumbnail']; ?> 150w,
                                     <?= $image['sizes']['medium']; ?> 300w"
                    />

                </div>
                <a href="<?php the_permalink(); ?>" class="project__link">
                    <span><?= __('Voir le projet', 'p');?></span>
                </a>
        </div>
        <?php endwhile;
        endif; ?>
    </section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="about">
        <h2 class="about__title title"><?= __('À propos', 'p');?></h2>
        <div class="about__wysiwyg"><?php the_content(); ?></div>
    </section>
<?php endwhile; endif; ?>

    <section class="contact">
        <h2 class="contact__title title"><?= __('Contactez-moi', 'p');?></h2>
    </section>
<?php get_footer(); ?>