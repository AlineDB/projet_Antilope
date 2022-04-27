<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleDispositif">
        <h2 class="singleDispositif__title"><?= get_the_title(); ?></h2>
        <?=  the_content();  ?>
        <figure class="singleDispositif__fig">
            <?= get_the_post_thumbnail(null, 'post-thumbnail', ['class' => 'dispositif__thumb']); ?>
        </figure>
        <div class="singleDispositif__content">
			<h3 class="singleDispositif__subtitle"><?= get_field('module',false, false) ?></h3>
            <p class="singleDispositif__p"><?= get_field('caracteristiques_module',false, false) ?></p>
            <h3 class="singleDispositif__subtitle"><?= get_field('technique',false, false) ?></h3>
            <p class="singleDispositif__p"><?= get_field('caracteristiques_techniques',false, false) ?></p>
            <h3 class="singleDispositif__subtitle"><?= get_field('titre',false, false) ?></h3>
            <p class="singleDispositif__p"><?= get_field('contenu_resultats',false, false) ?></p>
            <img src="<?= get_field('image_resultats', false, false) ?>" alt="">
            <h3 class="singleDispositif__price"><?= get_field('prix',false, false) ?></h3>
            <a href="template-contact.php">Intéressé ? Contactez-nous !</a>
        </div>
        <aside class="singleDispositif__aside">
            <h3 class="aside__title">Catégories</h3>
            <?php foreach (get_field('type', false, false) as $id_category): ?>
            <p class="aside__contain">
            <?= (get_cat_name($id_category)); ?>
            <?php endforeach;?>
            </p>
        </aside>
    </main>
<?php endwhile; endif; ?>



<?php get_footer(); ?>
