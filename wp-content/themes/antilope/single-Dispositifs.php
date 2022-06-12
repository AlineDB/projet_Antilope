<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<body>

    <main class="layout__singleDispositif">

        <h2 class="singleDispositif__title"><?= get_the_title(); ?></h2>
        <?=  the_content();  ?>
        <figure class="singleDispositif__fig">
            <?= get_the_post_thumbnail(null, 'post-thumbnail', ['class' => 'dispositif__thumb']); ?>
        </figure>
        <div class="singleDispositif__content">
            <div class="single__caracteristics">
                <h3 class="singleDispositif__subtitle"><?= get_field('module',false, false) ?></h3>
                <p class="singleDispositif__p"><?= get_field('caracteristiques_module',false, false) ?></p>
            </div>
            <div class="single__technicals">
                <h3 class="singleDispositif__subtitle"><?= get_field('technique',false, false) ?></h3>
                <p class="singleDispositif__p"><?= get_field('caracteristiques_techniques',false, false) ?></p>
            </div>
            <div class="single__results">
                <h3 class="singleDispositif__subtitle"><?= get_field('titre',false, false) ?></h3>
                <p class="singleDispositif__p"><?= get_field('contenu_resultats',false, false) ?></p>
                <img src="<?= get_field('image_resultats', false, false) ?>" alt="">
            </div>
            <div class="single__price">
                <h3 class="singleDispositif__price"><?= get_field('prix',false, false) ?></h3>
                <a href="<?php echo get_home_url(). '/contact/' ;?>" class="singleDispositif__link"><?= __('Intéressé ? Contactez-nous!', 'Aline-db-antilope'); ?></a>
            </div>
        </div>
        <aside class="singleDispositif__aside">
		        <?php if(get_field('type')):  ?>
                    <h3 class="aside__title"><?= __('Catégorie(s)', 'Aline-db-portfolio'); ?></h3>
                        <ul class="aside__categoryList">
	                        <?php foreach (get_field('type', false, false) as $id_category): ?>
                                <li class="aside__li"><?php echo(get_cat_name($id_category)); ?></li>
	                        <?php endforeach;?>
                        </ul>
		        <?php endif; ?>
        </aside>
    </main>
<?php endwhile; endif; ?>
</body>




<?php get_footer(); ?>
