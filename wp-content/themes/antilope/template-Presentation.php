<?php /* Template Name: Presentation page template */ ?>
<?php get_header(); ?>



<main class="layout">

<section class="layout__but reveal">
    <h2 class="but__title"><?= __('Dans quel but ?', 'Aline-db-antilope'); ?></h2>
    <div class="but__container">
        <p class="but__description ">En 2020, nul ne peut ignorer les problèmes de pollution. Les dernières études publiées par l’OMS (Organisation Mondiale de la Santé) montrent que plus de 90% de la population mondiale est exposée à un air extérieur toxique. Cette pollution est même devenue une urgence de santé publique.  Une récente analyse montre même que 7 millions de décès prématurés surviennent chaque année à cause de la pollution de l'air. Ces statistiques en font une cause plus meurtrière que le tabagisme. L'impact des différents polluants sur de nombreuses maladies reste encore à établir, ce qui suggère que les dommages cardiaques et pulmonaires connus ne sont que "la partie émergée de l'iceberg".
            C’est dans cette optique la que nous proposons un système low-cost de mesure des polluants atmosphériques tel que les oxydes d’azote (NO&NO2), ozone (O3) et les particules fines (PM 2.5).  Ce système de mesure, appelé ANTILOPE, est basé sur une approche « low cost » et se distingue donc des autres appareils du marché.
            Différentes variantes de nos modules existent selon les modes de communication (enregistrements sur carte SD, communication Bluetooth ou rapatriement des données via GSM) et selon les types de capteurs utilisés (électrochimiques classiques ou à métal oxyde). Pour le moment, une quarantaine de modules a déjà été produit et sont en test à différents endroits de la Région Wallonne.
            Nous proposons de montrer dans cette communication, les différentes variantes de nos modules ANTILOPE ainsi que de présenter les résultats des mesures faites en environnement contrôlé (matrice de gaz) ainsi que des mesures faites en environnement extérieur que nous confronterons avec les mesures réalisées par les appareils professionnels.
        </p>
        <figure class="about__fig">
            <img src="<?php echo get_template_directory_uri().'/img/pollution_pre-post_confinement_liege.jpg'; ?>"
                 srcset="<?php echo get_template_directory_uri().'/img/pollution_pre-post_confinement_liege-150x150.jpg 767px'; ?>,
                         <?php echo get_template_directory_uri().'/img/pollution_pre-post_confinement_liege-300x181.jpg 1024px'; ?>"
                 alt="Graphique des mesures de pollution avent et après le confinement en 2020">
        </figure>
        <figure class="about__fig">
            <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible.jpg'; ?>"
                 srcset="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/pollution_tueur_invisible-300x181.jpg 1024px'; ?>"
                 alt="Illustration: la pollution tueur silencieux">
        </figure>
        <figure class="about__fig">
            <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_2.jpg'; ?>"
                 srcset="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_2-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_2-300x181.jpg 1024px'; ?>"
                 alt="Illustration: la pollution tueur invisible">
        </figure>
        <figure class="about__fig">
            <img src="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_3.jpg'; ?>"
                 srcset="<?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_3-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/pollution_tueur_invisible_3-300x181.jpg 1024px'; ?>"
                 alt="Illustration: la pollution tueur invisible">
        </figure>
        <p class="but__conclusion">Ses chiffres sont interpellant ! Nos dispositifs permettent de mieux comprendre et mesurer la qualité de l'air dans nos villes peut importe quel moyen de locomotion on utilise !</p>
    </div>
</section>

    <section class="layout__pourquoi reveal">
        <h2 class="pourquoi__title"><?= __('Pourquoi ?', 'Aline-db-antilope'); ?></h2>
        <div class="pourquoi__un">
            <div>
                <img src="<?php echo get_template_directory_uri().'/img/antilope_apocalypse.png'; ?>" alt="Illustration de la savanne polluée">
                <p class="pourquoi__description">Parce que nous ne voulons pas de ça</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri().'/img/pollution.png'; ?>" alt="Ville sous les gaz et la pollution">
                <p class="pourquoi__description">Gaz, pollution, problèmes de santé, ...</p>
            </div>
        </div>
        <div class="pourquoi__deux">
            <div >
                <img src="<?php echo get_template_directory_uri().'/img/savannah.png'; ?>" alt="Homme qui respire l'air frais">
                <p class="pourquoi__description">Mais de ça pour nous et les générations futures !</p>
            </div>
            <div >
                <img src="<?php echo get_template_directory_uri().'/img/breathe.png'; ?>" alt="Illustration de la savanne">
                <p class="pourquoi__description">Air pur, environnement sain, nature respectée, ...</p>
            </div>
        </div>

    </section>

    <section class="layout__dispositifs dispositifs reveal">
        <h2 class="dispositifs_title"><?= __('Nos dispositifs', 'Aline-db-antilope'); ?></h2>
        <div class="dispositifs__container">
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
        <a class="dispositif__link" href="<?= get_home_url(); ?>/dispositifs"><?= __('Voir les différents dispositifs', 'Aline-db-antilope'); ?></a>
    </section>

<section class="layout__qui reveal">
    <h2 class="qui__title"><?= __('Par qui ?', 'Aline-db-antilope'); ?></h2>
    <div class="qui__container" itemscope itemtype="https://schema.org/Person">
        <div class="qui__partner">
            <figure class="qui__fig">
                <figcaption class="qui__legend">L'<abbr title="Institut Scientifique du Service Public">ISSEP</abbr> est une unité d'Aministration Publique qui surveille l'environnement,
                    prévient les risques et nuisances, effectue des recherches scientifique et Laboratoire de Référene pour la Wallonie.</figcaption>
                <img itemprop="image" src="<?php echo get_template_directory_uri().'/img/logo_ISSEP.jpg'; ?>"
                     srcset="<?php echo get_template_directory_uri().'logo_ISSEP-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'logo_ISSEP.jpg 1024px'; ?>"
                     alt="Logo de l'ISSEP">
            </figure>
            <p><span itemprop="name">Fabian Lenartz</span> : <span itemprop="worksfor" >Département Qualité de l'air</span></p>
            <p><span itemprop="name">Guy Gerard</span> : <span itemprop="jobTitle">Responsable</span>, <span itemprop="worksfor" >Département Qualité de l'air</span></p>
            <a class="qui__link" href="https://www.issep.be" itemprop="url">Site de l'<abbr title="Institut Scientifique du Service Public">ISSEP</abbr></a>
        </div>
        <div class="qui__partner">
            <figure class="qui__fig">
                <figcaption class="qui__legend" >Le service électronique de la <abbr title="Haute Ecole de la Province de Liège">HEPL</abbr></figcaption>
                <img itemprop="image" src="<?php echo get_template_directory_uri().'/img/logo_electro.png'; ?>"
                     srcset="<?php echo get_template_directory_uri().'/img/logo_electro-150x150.jpg 767px'; ?>,
                        <?php echo get_template_directory_uri().'/img/logo_electro-300x300.jpg 1024px'; ?>"
                     alt="Logo du service électronique de la HEPL">
            </figure>
            <p><span itemprop="name">Valery Broun, Sylvain Gichaux et Christophe Brose</span> : <span itemprop="jobTitle">Ingénieurs</span>, <span itemprop="worksfor" > <abbr title="Haute Ecole de la Province de Liège">HEPL</abbr> (Service électronique & systèmes embarqué, Département Ingénieur)</span></p>
            <a class="qui__link" href="https://hepl-electro.wixsite.com/index" itemprop="url">Site du service électronique</a>
            <a class="qui__link" href="https://www.facebook.com/ISILELECTRO" itemprop="url">Leur Facebook</a>
        </div>
        <div class="qui__partner">
            <figure class="qui__fig">
                <figcaption class="qui__legend">La <abbr title="Haute Ecole de la Province de Liège">HEPL</abbr> et le cursus ingénierie</figcaption>
                <img itemprop="image" src="<?php echo get_template_directory_uri().'/img/logo_HEPL-150x60.jpg'; ?>" alt="Logo de la HEPL">
            </figure>
            <a class="qui__link" href="https://www.hepl.be/fr/master-ingenieur-industriel" itemprop="url">Site de la <abbr title="Haute Ecole de la Province de Liège">HEPL</abbr> : master ingénieur</a>
        </div>
    </div>
    <a class="qui__link" href="<?= get_home_url(); ?>/contact"><?= __('Contactez-les !', 'Aline-db-antilope'); ?> </a>
</section>


<?php get_footer(); ?>
