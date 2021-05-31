<?php get_header(); ?>

    <section class="introduction">
        <h2 class="introduction__title__hidden"><?= __('Développeur Front-End', 'p'); ?></h2>
        <p class="introduction__title"></p>
        <p class="introduction__text"><?php the_field('introduction_text'); ?></p>
        <div class="introduction__buttons">
            <div class="introduction__button button__contact">
                <a href="#contact" class="button button__filled">
                    <?= __('Contactez-moi', 'p'); ?>
                    <svg class="button__svg" width="21.5px" height="21px"
                         viewBox="0 0 30 22"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.6646 0H2.54037C1.20985 0 0.12793 1.07136 0.12793 2.38891V19.1111C0.12793 20.4286 1.20985 21.5 2.54037 21.5H26.6647C27.9951 21.5 29.077 20.4286 29.077 19.1111V2.38891C29.077 1.07136 27.9951 0 26.6646 0ZM2.54037 1.19443H26.6647C26.7535 1.19443 26.8319 1.22651 26.9152 1.24465C24.8267 3.13749 17.9013 9.41123 15.4777 11.5735C15.2881 11.7426 14.9824 11.9444 14.6025 11.9444C14.2226 11.9444 13.917 11.7426 13.7267 11.5729C11.3034 9.41101 4.37763 3.13693 2.28939 1.24476C2.37296 1.22662 2.45144 1.19443 2.54037 1.19443ZM1.33412 19.1111V2.38891C1.33412 2.27189 1.36975 2.16573 1.40163 2.05879C3.00017 3.50758 7.83241 7.88507 10.9657 10.7066C7.84259 13.3631 3.0091 17.9009 1.39785 19.4224C1.36941 19.3208 1.33412 19.2215 1.33412 19.1111ZM26.6646 20.3056H2.54037C2.44403 20.3056 2.35837 20.2723 2.26841 20.251C3.93338 18.6793 8.79762 14.1154 11.8658 11.5162C12.2658 11.8754 12.6312 12.203 12.9192 12.46C13.4163 12.9045 13.9982 13.1389 14.6025 13.1389C15.2068 13.1389 15.7887 12.9044 16.2852 12.4606C16.5733 12.2035 16.9389 11.8756 17.3391 11.5162C20.4075 14.1151 25.2711 18.6787 26.9366 20.251C26.8466 20.2723 26.7611 20.3056 26.6646 20.3056ZM27.8709 19.1111C27.8709 19.2214 27.8356 19.3208 27.8072 19.4224C26.1953 17.9002 21.3624 13.3628 18.2393 10.7066C21.3727 7.88513 26.2042 3.50803 27.8033 2.05868C27.8352 2.16562 27.8709 2.27183 27.8709 2.38885V19.1111Z"/>
                    </svg>
                </a>
            </div>
            <div class="introduction__button button__project">
                <a href="#projects" class="button button__unfilled"><?= __('Voir mes projets', 'p'); ?>
                    <svg class="button__svg" width="11" height="19" viewBox="0 0 11 19" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.75781 0.742172L4.75781 16.4601L2.16668 13.8564C1.87753 13.5659 1.40761 13.5648 1.11708 13.8539C0.826517 14.1431 0.825441 14.613 1.11456 14.9036L4.97393 18.7816C4.97416 18.7819 4.97442 18.7821 4.97464 18.7823C5.2638 19.0721 5.73523 19.073 6.02535 18.7824C6.02558 18.7821 6.02584 18.7819 6.02606 18.7817L9.88543 14.9036C10.1745 14.6131 10.1735 14.1432 9.88291 13.854C9.59238 13.5648 9.12246 13.5659 8.83331 13.8565L6.24218 16.4601L6.24218 0.742172C6.24218 0.332262 5.90991 -1.57163e-05 5.5 -1.56983e-05C5.09009 -1.56804e-05 4.75781 0.332262 4.75781 0.742172Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <div class="introduction__svg">
        <a href="#projects" class="next-section" title="<?= __('Accéder à la section suivante', 'p'); ?>">
            <svg class="svg" version="1.0"
                 xmlns="http://www.w3.org/2000/svg"
                 id="Calque_1"
                 width="500"
                 height="600"
                 viewBox="0 0 100 100">
                <title><?= __('Accéder à la section suivante', 'p'); ?></title>
                <desc><?= __('Faites défiler pour voir le contenu suivant', 'p'); ?></desc>
                <line fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10"
                      x1="50" y1="19.2"
                      x2="50" y2="72.2"/>
                <polyline fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
                          stroke-miterlimit="10" points="
		38.7,62.8 50,77.5 61.3,62.8 	"/>
            </svg>
        </a>
    </div>
    <section class="projects" id="projects">
        <h2 class="projects__title title"><?= __('Mes projets', 'p'); ?></h2>
        <div class="projects__wrapper">
            <?php
            $projects = new WP_Query([
                'post_type' => 'project',
                'posts_per_page' => 100,
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
        <?php endwhile;
        endif; ?>
        </div>
    </section>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="about" id="about">
        <h2 class="about__title  title"><?= __('À propos', 'p'); ?></h2>
        <div class="about__wysiwyg"><?php the_content(); ?></div>
    </section>
<?php endwhile; endif; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="contact" id="contact">
        <h2 class="contact__title title"><?= __('Contactez-moi', 'p'); ?></h2>

        <div class="contact__form form">
            <div class="contact__text">
                <p class="p"><?= __('Vous avez des questions ?', 'p'); ?></p>
                <p class="p"><?= __('Vous souhaitez qu‘on travaille ensemble ? ', 'p'); ?></p>
            </div>
            <?= formLang(); ?>
        </div>
    </section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>