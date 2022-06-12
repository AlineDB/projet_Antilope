<?php /* Template Name: Accueil page template */ ?>
<?php get_header(); ?>


<main class="layout reveal">
    <section class="layout__about reveal">
        <h2 class="about_title"><?= __('Pourquoi et par qui ?', 'Aline-db-antilope'); ?></h2>
        <div class="about__container ">
            <p class="about__description">Antilope est un dispositif de mesure créé à la demande de l'<abbr title="Institut Scientifique du Service Public">ISSEP</abbr> par des étudiants ingénieurs de la HEPL et son service électronique. Leur but étant de mesurer la qualité de l'air à l'aide de différents modules en Wallonie.</p>
            <a href="<?= get_home_url(); ?>/presentation/" class="about__link"><?= __('Lire la présentation', 'Aline-db-antilope'); ?></a>
        </div>
    </section>
    <section class="layout__dispositifs reveal">
        <h2 class="dispositifs_title"><?= __('Nos dispositifs', 'Aline-db-antilope'); ?></h2>
        <div class="dispositifs__container ">
            <?php if(($dispositifs = dw_get_projects(10))->have_posts()): while($dispositifs->have_posts()): $dispositifs->the_post(); ?>
                <article class="dispositif">
                    <div class="dispositif__card">
                        <header class="dispositif__head">
                            <h3 class="dispositif__title"><?= get_the_title(); ?></h3>
                            <p class="dispositifs__"></p>
                        </header>
                        <figure class="dispositifs__fig">
                            <?= get_the_post_thumbnail(null, 'post-thumbnail', ['class' => 'dispositifs__thumb']); ?>
                        </figure>
                        <a href="<?= get_the_permalink(); ?>" class="dispositif__link accueil"><?= __('Voir le projet', 'Aline-db-antilope'); ?> <?= get_the_title(); ?> en détails</a>
                    </div>
                </article>
            <?php endwhile; else: ?>
                <p class="dispositifs__empty"><?= __('Il n\'y a pas de projet à vous monter ...', 'Aline-db-antilope'); ?></p>
            <?php endif; ?>
        </div>
    </section>

    <section class="layout__articles articles reveal">
        <h2 class="articles__title"><?= __('On parle de nous', 'Aline-db-antilope'); ?></h2>
        <div class="articles__container ">
			<?php if(($articles = dw_get_articles(3))->have_posts()): while($articles->have_posts()): $articles->the_post(); ?>
                <article class="article">
                    <div class="article__card">
                        <header class="article__head">
                            <h3 class="article__title"><?= get_the_title(); ?></h3>
                            <p class="article__date"><time class="article__time" datetime="<?= date('c', strtotime(get_field('date', false, false))); ?>">
									<?= ucfirst(date_i18n('F, Y', strtotime(get_field('date', false, false)))); ?>
                                </time></p>
                        </header>
                        <div class="singleArticle__content">
                            <?=  the_content();  ?>
                        </div>
                    </div>
                </article>
			<?php endwhile; else: ?>
                <p class="articles__empty"><?= __('Il n\'y a pas d\'articles à vous monter ...', 'Aline-db-antilope'); ?></p>
			<?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>