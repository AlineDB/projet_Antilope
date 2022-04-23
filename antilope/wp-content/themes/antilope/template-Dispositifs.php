<?php /* Template Name: Dispositifs page template */ ?>
<?php get_header(); ?>

<section class="layout__dispositifs dispositifs">
	<h2 class="dispositifs__title">Les dispositifs de mesures</h2>
	<div class="dispositifs__container">
		<?php if(($dispositifs = dw_get_projects(300))->have_posts()): while($dispositifs->have_posts()): $dispositifs->the_post(); ?>
			<article class="dispositif">
				<div class="dispositif__card">
					<header class="dispositif__head">
						<h3 class="dispositif__title"><?= get_the_title(); ?></h3>
						<p class="dispositifs__"></p>
					</header>
					<figure class="dispositifs__fig">
                        <?= get_the_post_thumbnail(null, 'post-thumbnail', ['class' => 'dispositifs__thumb']); ?>
					</figure>
                    <a href="<?= get_the_permalink(); ?>" class="dispositif__link">Voir le projet <?= get_the_title(); ?> en détails</a>
				</div>
			</article>
		<?php endwhile; else: ?>
			<p class="dispositifs__empty">Il n'y a pas de projets à vous montrer...</p>
		<?php endif; ?>
	</div>
</section>



<?php get_footer(); ?>
