<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Antilope - <?= wp_title(''); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>" />
    <script type="text/javascript" src="<?= dw_mix('js/script.js'); ?>"></script>
    <meta name="description" content="Projet Antilope par Aline DE BARROS">
    <meta name="author" content="DE BARROS Aline">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content=" HEPL, ISSEP, pollution, mesures, appareils, antilope, ingénieurs, écoles, électronique, dispositifs, modules, qualité, air, campagne, mobile, fixe">

</head>
<header class="header">
    <h1 class="header__title" lang="en-GB"><?= get_bloginfo('name'); ?></h1>
    <p class="header__tagline"><?= get_bloginfo('description'); ?></p>

    <input id="toggle" type="checkbox">

    <label for="toggle" class="hamburger">
        <div class="top-bun"></div>
        <div class="meat"></div>
        <div class="bottom-bun"></div>
    </label>

    <nav class="header__nav nav">
            <h2 class="nav__title"><?= __('Navigation principale', 'Aline-db-antilope'); ?></h2>
            <ul class="nav__container">
		        <?php foreach(dw_get_menu_items('primary') as $link): ?>
                <li class="<?= $link->getBemClasses('nav__item'); ?>">
                    <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?> class="nav__link"><?= $link->label; ?>
                    </a>
			        <?php endforeach; ?>
                    <div class="nav__languages">
				        <?php foreach(pll_the_languages(['raw' => true]) as $code => $locale) :?>
                            <a href="<?= $locale['url']; ?>" lang="<?= $locale['locale']; ?>" hreflang="<?= $locale['locale']; ?>" class="nav__locale" title="<?= $locale['name']; ?>"><?= $code; ?></a>
				        <?php endforeach; ?>
                    </div>
                </li>
            </ul>
    </nav>
    <form class="header__search search" role="search" method="get" action="<?= get_home_url(); ?>">
        <div class="search__container">
            <?= get_search_form() ;?>
        </div>
    </form>
    <div id="FixedNav" class="cInvisible">
        <a  href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="#FB9A2E" class="cloud-arrow-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
            </svg>
        </a>
    </div>
</header>
