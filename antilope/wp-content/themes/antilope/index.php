<?php /* Template Name: Accueil page template */ ?>
<?php get_header(); ?>

<body>

<main class="layout">
    <section class="layout__but">
        <h2 class="but__title">Dans quel but ?</h2>
        <div class="but__container">
            <p class="but__description">En 2020, nul ne peut ignorer les problèmes de pollution. Les dernières études publiées par l’OMS (Organisation Mondiale de la Santé) montrent que plus de 90% de la population mondiale est exposée à un air extérieur toxique. Cette pollution est même devenue une urgence de santé publique.  Une récente analyse montre même que 7 millions de décès prématurés surviennent chaque année à cause de la pollution de l'air. Ces statistiques en font une cause plus meurtrière que le tabagisme. L'impact des différents polluants sur de nombreuses maladies reste encore à établir, ce qui suggère que les dommages cardiaques et pulmonaires connus ne sont que "la partie émergée de l'iceberg".
                C’est dans cette optique la que nous proposons un système low-cost de mesure des polluants atmosphériques tel que les oxydes d’azote (NO&NO2), ozone (O3) et les particules fines (PM 2.5).  Ce système de mesure, appelé ANTILOPE, est basé sur une approche « low cost » et se distingue donc des autres appareils du marché.
                Différentes variantes de nos modules existent selon les modes de communication (enregistrements sur carte SD, communication Bluetooth ou rapatriement des données via GSM) et selon les types de capteurs utilisés (électrochimiques classiques ou à métal oxyde). Pour le moment, une quarantaine de modules a déjà été produit et sont en test à différents endroits de la Région Wallonne.
                Nous proposons de montrer dans cette communication, les différentes variantes de nos modules ANTILOPE ainsi que de présenter les résultats des mesures faites en environnement contrôlé (matrice de gaz) ainsi que des mesures faites en environnement extérieur que nous confronterons avec les mesures réalisées par les appareils professionnels.
            </p>
            <figure class="about__fig">
                <img src="<?php echo get_template_directory_uri().'/img/pollution_pre-post_confinement_liege.jpg'; ?>" alt="Graphique des mesures de pollution avent et après le confinement en 2020">
            </figure>
            <figure class="about__fig">
                <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible.jpg'; ?>" alt="Illustration: la pollution tueur silencieux">
            </figure>
            <figure class="about__fig">
                <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_2.jpg'; ?>" alt="Illustration: la pollution tueur invisible">
            </figure>
            <figure class="about__fig">
                <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_3.jpg'; ?>" alt="Illustration: la pollution tueur invisible">
            </figure>
            <p>Ses chiffres sont interpellant ! Nos dispositifs permettent de mieux comprendre et mesurer la qualité de l'air dans nos villes peut importe quel moyen de locomotion on utilise !</p>
        </div>
        <button class="but__button"><a href="http://localhost/Antilope/antilope/dispositifs">Voir les différents dispositifs</a></button>
    </section>
    <section class="layout__qui">
        <h2 class="qui__title">Par qui ?</h2>
        <div class="qui__container">
           <p> </p>
            <figure class="qui__fig">
                <figcaption class="qui__legend">Les dispositifs développés en partenariat</figcaption>
                <img src="<?php echo get_template_directory_uri().'/img/dispositis_logos.jpg'; ?>" alt="Logos des différents dispositifs de mesure">
            </figure>
            <figure class="qui__fig">
                <figcaption class="qui__legend">L'ISSEP est une unité d'Aministration Publique qui surveille l'environnement,
                prévient les risques et nuisances, effectue des recherches scientifique et Laboratoire de Référene pour la Wallonie.</figcaption>
                <img src="<?php echo get_template_directory_uri().'/img/logo_ISSEP.jpg'; ?>" alt="Logo de l'ISSEP">
            </figure>
            <figure class="qui__fig">
                <figcaption class="qui__legend">Le service électronique de la HEPL</figcaption>
                <img src="<?php echo get_template_directory_uri().'/img/logo_electro.jpg'; ?>" alt="Logo du service électronique de la HEPL">
            </figure>
            <figure class="qui__fig">
                <figcaption class="qui__legend">La HEPL et le cursus ingénierie</figcaption>
                <img src="<?php echo get_template_directory_uri().'/img/logo_HEPL-150x60.jpg'; ?>" alt="Logo de la HEPL">
            </figure>
        </div>
        <button class="but__button"><a href="http://localhost/Antilope/antilope/contact">Contact</a></button>
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