<?php /* Template Name: Accueil page template */ ?>
<?php get_header(); ?>

<body>

<main class="layout">
    <section class="layout__about about">
        <h2 class="about_title">Pourquoi et par qui ?</h2>
        <div class="about__container">
            <a href="http://localhost/Antilope/antilope/presentation/">Quel est le but du projet ? Qui y participe ?</a>
        </div>
    </section>
    <section class="layout__dispositifs dispositifs">
        <h2 class="dispositifs_title">Nos dispositifs</h2>
        <div class="dispositifs__container">
            <figure class="dispositifs__fig">
                <figcaption class="dispositifs__legend">Les dispositifs développés en partenariat</figcaption>
                <img src="<?php echo get_template_directory_uri().'/img/dispositis_logos.jpg'; ?>" alt="Logos des différents dispositifs de mesure">
            </figure>
            <a href="http://localhost/Antilope/antilope/dispositifs/">Voir nos différents projets</a>
        </div>
    </section>

    <section class="layout__articles articles">
        <h2 class="articles__title">On parle de nous</h2>
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
                    <a href="<?= get_the_permalink(); ?>" class="article__link">Voir l'article "<?= get_the_title(); ?>"</a>
                </article>
			<?php endwhile; else: ?>
                <p class="articles__empty">Il n'y a pas d'articles à vous montrer...</p>
			<?php endif; ?>
        </div>
    </section>

</body>
<?php get_footer(); ?>