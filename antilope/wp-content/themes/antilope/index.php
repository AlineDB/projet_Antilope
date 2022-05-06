<?php /* Template Name: Accueil page template */ ?>
<?php get_header(); ?>

<body>

<main class="layout">
    <section class="layout__about about">
        <h2 class="about_title"><?= __('Pourquoi et par qui ?', 'Aline-db-antilope'); ?></h2>
        <div class="about__container">
            <a href="http://localhost/Antilope/antilope/presentation/"><?= __('Lire la présentation', 'Aline-db-antilope'); ?></a>
        </div>
    </section>
    <section class="layout__dispositifs dispositifs">
        <h2 class="dispositifs_title"><?= __('Nos dispositifs', 'Aline-db-antilope'); ?></h2>
        <div class="dispositifs__container">
            <figure class="dispositifs__fig">
                <figcaption class="dispositifs__legend"><?= __('Les dispositifs développés en partenariat', 'Aline-db-antilope'); ?></figcaption>
                <img src="<?php echo get_template_directory_uri().'/img/dispositis_logos.jpg'; ?>" alt="Logos des différents dispositifs de mesure">
            </figure>
            <a href="http://localhost/Antilope/antilope/dispositifs/"><?= __('Voir nos différents projets', 'Aline-db-antilope'); ?></a>
        </div>
    </section>

    <section class="layout__articles articles">
        <h2 class="articles__title"><?= __('On parle de nous', 'Aline-db-antilope'); ?></h2>
        <div class="articles__container">
			<?php if(($articles = dw_get_articles(3))->have_posts()): while($articles->have_posts()): $articles->the_post(); ?>
                <article class="article">
                    <div class="article__card">
                        <header class="article__head">
                            <h3 class="article__title"><?= get_the_title(); ?></h3>
                            <p class="article__date"><time class="article__time" datetime="<?= date('c', strtotime(get_field('date', false, false))); ?>">
									<?= ucfirst(date_i18n('F, Y', strtotime(get_field('date', false, false)))); ?>
                                </time></p>
                        </header>
                        <figure class="article__fig">
							<?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'project__thumb']); ?>
                        </figure>
                    </div>
                    <a href="<?= get_the_permalink(); ?>" class="article__link"><?= __('Voir l\'article', 'Aline-db-antilope'); ?> "<?= get_the_title(); ?>"</a>
                </article>
			<?php endwhile; else: ?>
                <p class="articles__empty"><?= __('Il n\'y a pas d\'articles à vous monter ...', 'Aline-db-antilope'); ?></p>
			<?php endif; ?>
        </div>
    </section>

</body>
<?php get_footer(); ?>