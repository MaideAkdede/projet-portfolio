</main>
<footer class="footer">
    <h2 class="sro"><?= __('Pied de page', 'p'); ?></h2>
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
            <a title="<?= __('Contactez-moi par mail', 'p'); ?>" href="mailto:maide.akdede@gmail.com" itemprop="email">maide.akdede@gmail.com</a>
        </div>
    </div>
    <p class="end_copyright">Ma&iuml;de Akdede &copy; 2020-<?= date("Y"); ?></p>
</footer>
<?php wp_footer(); ?>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "url": "https://maide-ak.me/",
        "name": "Maide Akdede Portfolio",
        "inLanguage": "<?= p_current_language()['locale']; ?>>",
        "description": "<?= __('Portfolio de Maide Akdede', 'p'); ?>",
        "publisher": {
            "@type": "ProfilePage",
            "name": "Maide Akdede"
        }
    }





</script>

<script type="application/ld+json">
    {
        "@context": "http://www.schema.org",
        "@type": "Person",
        "@id": "https://maide-ak.me",
        "name": "Maide Akdede",
        "givenName": "Maide",
        "familyName": "Akdede",
        "nationality": "<?= __('Belge', 'p'); ?>",
        "birthPlace" : "<?= __('Liège, Belgique', 'p'); ?>",
        "birthDate": "<?= __('06-05-1997', 'p'); ?>",
        "gender": "Female",
        "knowsLanguage" : [
            "<?= __('français', 'p'); ?>",
            "<?= __('anglais', 'p'); ?>",
            "<?= __('turc', 'p'); ?>",
            "<?= __('arabe', 'p'); ?>"
        ],
        "Description": "<?= __('Étudiante en Techniques Graphique, option Web-Multimédia', 'p'); ?>",
        "email": "maide.akdede@gmail.com",
        "jobTitle": "<?= __('Développeur front-end, Web design et développement', 'p'); ?>",
        "url": "https://maide-ak.me",
        "sameAs": [
            "https://github.com/MaideAkdede",
            "https://cv.maide-ak.me/"
        ],
        "alumniOf": {
            "@type": "OrganizationRole",
            "alumniOf": {
                "@type": "CollegeOrUniversity",
                "name": "Haute École de la Province de Liège",
                "sameAs": [
                "https://www.provincedeliege.be/hauteecole",
                "http://www.provincedeliege.be/art560",
                "https://www.provincedeliege.be/fr/art421"
                ],
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Parc des Marêts, Rue Peetermaans 80",
                    "addressLocality": "Seraing",
                    "postalCode": "4100",
                    "addressCountry": "<?= __('Belgique', 'p'); ?>"
                    }
        },
        "startDate": "2018-2019"
         }
    }

</script>
</body>
</html>