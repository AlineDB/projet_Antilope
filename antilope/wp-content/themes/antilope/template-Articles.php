<?php /* Template Name: Articles page template */ ?>
<?php get_header(); ?>

	<section class="layout__articles articles">
		<h2 class="articles__title">Les Articles</h2>
		<div class="articles__container">
			<?php if(($articles = dw_get_articles(300))->have_posts()): while($articles->have_posts()): $articles->the_post(); ?>
				<article class="articles">
					<a href="<?= get_the_permalink(); ?>" class="dispositif__link">Voir en détails "<?= get_the_title(); ?>"</a>
					<div class="articles__card">
						<header class="articles__head">
							<h3 class="articles__title"><?= get_the_title(); ?></h3>
							<p class="articles__"></p>
						</header>
						<figure class="articles__fig">
							<?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'dispositifs__thumb']); ?>
						</figure>
					</div>
				</article>
			<?php endwhile; else: ?>
				<p class="articles__empty">Il n'y a pas d'articles à vous montrer...</p>
			<?php endif; ?>
		</div>
	</section>



<?php get_footer(); ?>