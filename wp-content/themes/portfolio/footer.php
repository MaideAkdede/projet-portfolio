</main>
<footer class="footer">
    <h2 class="sro"><?= __('Pied de page', 'p');?></h2>
    <div class="footer__wrapper">

        <div class="footer__lang footer__content">
            <h2 class="footer__title"><?= __('Langues', 'p'); ?></h2>
            <ul class="footer__languages">
                <?php foreach (pll_languages() as $lang): ?>
                    <li class="footer__languages--items">
                        <a href="<?= $lang['url']; ?>"
                           class="footer__languages-link"
                           hreflang="<?= $lang['locale']; ?>"
                           title="<?= $lang['slug']; ?>"
                        >
                            <img src=" <?= $lang['flag']; ?>" alt="<?= $lang['name']; ?>">
                            <?= $lang['name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="footer__contact footer__content">
            <h2 class="footer__title"><?= __('Adresse mail', 'p'); ?></h2>
            <a title="<?= __('Contactez-moi par mail', 'p'); ?>" href="mailto:maide.akdede@gmail.com">maide.akdede@gmail.com</a>
        </div>
    </div>
    <p class="end_copyright">Ma&iuml;de Akdede &copy; 2020-<?= date("Y"); ?></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>