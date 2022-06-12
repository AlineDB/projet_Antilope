<?php

?>

<footer class="footer">
    <h2 class="footer__title"><?= __('Pied de page', 'Aline-db-antilope'); ?></h2>
    <div class="footer__container">
        <ul class="footer__list">
            <li class="footer__li">
                <a href="https://www.issep.be/"><img src="<?php echo get_template_directory_uri().'/img/logo_ISSEP.jpg'; ?>" alt="Logo de l'ISSEP" width="50" height="50"></a>
            </li>
            <li class="footer__li">
                <a href="https://www.ingehepl.be/master-en-sciences-de-lingenieur-industriel-orientation-electronique-systemes-embarques/"><img src="<?php echo get_template_directory_uri().'/img/logo_electro.png'; ?>" alt="Logo du service électronique de la HEPL" width="120" height="80"></a>
            </li>
            <li class="footer__li">
                <a href="https://www.hepl.be/fr/formations"><img src="<?php echo get_template_directory_uri().'/img/logo_HEPL-150x60.jpg'; ?>" alt="Logo de la HEPL" width="100" height="60"></a>
            </li>
        </ul>
        <ul class="footer__legal">
            <li class="footer__link">
                <a href="<?php echo get_home_url(). '/politique-de-confidentialite/'; ?>">  <?= __('Mentions légales', 'Aline-db-antilope'); ?></a>
            </li>
            <li class="footer__link">
                <a href="<?php echo get_home_url(). '/contact/' ;?>">Contact</a>
            </li>
        </ul>
    </div>
</footer>