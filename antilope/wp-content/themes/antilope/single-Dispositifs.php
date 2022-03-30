<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleDispositif">
        <h2 class="singleDispositif__title"><?= get_the_title(); ?></h2>
        <figure class="singleDispositif__fig">
			<?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'singleDispositif__thumb']); ?>
        </figure>
        <div class="singleDispositif__content">
			<?=  the_content();  ?>
        </div>
        <aside class="singleDispositif__details">
            <h3 class="singleDispositif__subtitle">Détails du projet</h3>
            <dl class="singleDispositif__def">
                <dt class="singleDispositif__label">But</dt>
                <dd class="singleDispositif__data">Lorem ipsum</dd>
                <dt class="singleDispositif__label">Aspect technique</dt>
                <dd class="singleDispositif__data">Lorem ipsum </dd>
                <dt class="singleProjet__label">Résultats</dt>
                <dd class="singleProjet__data">Lorem ipsum</dd>
            </dl>
        </aside>
    </main>
<?php endwhile; endif; ?>



<?php get_footer(); ?>
