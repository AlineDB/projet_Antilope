<?php /* Template Name: Articles page template */ ?>
<?php get_header(); ?>
<body>

	<section class="layout__articlesPage">
		<h2 class="articles__title"><?= __('Les articles', 'Aline-db-antilope'); ?></h2>
		<div class="articles__containerPage">
			<?php if(($articles = dw_get_articles(300))->have_posts()): while($articles->have_posts()): $articles->the_post(); ?>
				<article class="articles">

					<div class="articles__card">
                        <h3 class="articles__title"><?= get_the_title(); ?></h3>
						<figure class="articles__fig">
							<?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'dispositifs__thumb']); ?>
						</figure>
					</div>
                    <a href="<?= get_the_permalink(); ?>" class="articles__link"><?=  __('Lire le résumé', 'Aline-db-antilope'); ?></a>
				</article>
			<?php endwhile; else: ?>
				<p class="articles__empty"><?= __('Il n\'y a pas d\'articles à vous monter ...', 'Aline-db-antilope'); ?></p>
			<?php endif; ?>

		</div>
	</section>

<div class="pages"><?php wp_pagenavi( array( 'type' => 'multipart' ) ); ?></div>
</body>


<?php get_footer(); ?>