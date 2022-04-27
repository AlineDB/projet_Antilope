<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Projet Antilope</title>
    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css'); ?>" />
    <script type="text/javascript" src="<?= dw_mix('js/script.js'); ?>"></script>
    <meta name="description" content="Projet Antilope par Aline DE BARROS">
    <meta name="DE BARROS Aline">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta accesskey=" HEPL, ISSEP, pollution, mesures, appareils, antilope, ingénieurs, écoles, électronique">

</head>
<header class="header">
    <h1 class="header__title"><?= get_bloginfo('name'); ?></h1>
    <p class="header__tagline"><?= get_bloginfo('description'); ?></p>

    <nav class="header__nav nav">
        <h2 class="nav__title">Navigation principale</h2>
        <ul class="nav__container">
			<?php foreach(dw_get_menu_items('primary') as $link): ?>
            <li class="<?= $link->getBemClasses('nav__item'); ?>">
                <a href="<?= $link->url; ?>" <?= $link->title ? ' title="' . $link->title . '"' : ''; ?> class="nav__link"><?= $link->label; ?>
                </a>
				<?php endforeach; ?>
    </nav>
    <form class="header__search search" role="search" method="get" action="<?= get_home_url(); ?>">
        <div class="search__container">
            <label for="s" class="search__label">Votre recherche</label>
            <input type="text" name="s" id="s" class="search__input" value="<?= get_search_query(); ?>" />
            <button type="submit" class="search__btn">Rechercher</button>
        </div>
    </form>
</header>