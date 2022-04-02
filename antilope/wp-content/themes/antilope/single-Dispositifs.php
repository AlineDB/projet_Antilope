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
    </main>
<?php endwhile; endif; ?>



<?php get_footer(); ?>
