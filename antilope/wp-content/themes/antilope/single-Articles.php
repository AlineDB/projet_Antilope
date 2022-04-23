
<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<main class="layout singleArticle">
		<h2 class="singleArticle__title"><?= get_the_title(); ?></h2>
		<figure class="singleArticle__fig">
			<?= get_the_post_thumbnail(null, 'thumbnail', ['class' => 'singleDispositif__thumb']); ?>
		</figure>
		<div class="singleArticle__content">
            <?=  the_content();  ?>
		</div>
        <aside class="singleArticle__details">
            <h3 class="singleArticle__subtitle">Détails</h3>
            <dl class="singleArticle__def">
                <dt class="singleArticle__label">Date de l'article</dt>
                <dd class="singleArticle__data">
                    <time class="singleArticle__date" datetime="<?= date('c', strtotime(get_field('date', false, false))); ?>">
						<?= ucfirst(date_i18n('d F Y', strtotime(get_field('date', false, false)))); ?>
                    </time></dd>
				<?php if(get_field('source')):  ?>
                    <dt class="singleArticle__label">Source</dt>
                    <dd class="singleArticle"><?= get_field('source', false, false);  ?>
                    </dd>
				<?php endif; ?>
	</main>
<?php endwhile; endif; ?>



<?php get_footer(); ?>