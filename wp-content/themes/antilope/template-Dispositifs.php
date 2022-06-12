<?php /* Template Name: Dispositifs page template */ ?>
<?php get_header(); ?>

<section class="layout__dispositifsPage dispositifs">
	<h2 class="dispositifs__title"><?= __('Les dispositifs', 'Aline-db-antilope'); ?></h2>
	<div class="dispositifs__containersPage">
		<?php if(($dispositifs = dw_get_projects(300))->have_posts()): while($dispositifs->have_posts()): $dispositifs->the_post(); ?>
			<article class="dispositif">
				<div class="dispositif__cardPage reveal">
					<header class="dispositif__head">
						<h3 class="dispositif__title"><?= get_the_title(); ?></h3>
					</header>
					<figure class="dispositifs__figPage">
                        <?= get_the_post_thumbnail(null, 'post-thumbnail', ['class' => 'dispositifs__thumb']); ?>
					</figure>
                    <a href="<?= get_the_permalink(); ?>" class="dispositif__linkPage"><?= __('Voir le projet', 'Aline-db-antilope'); ?> <?= get_the_title(); ?> en détails</a>
				</div>
			</article>
		<?php endwhile; else: ?>
			<p class="dispositifs__empty"><?= __('Il n\'y a pas de projet à vous monter ...', 'Aline-db-antilope'); ?></p>
		<?php endif; ?>

	</div>
</section>

<div class="pages"><?php wp_pagenavi( array( 'type' => 'multipart' ) ); ?></div>


<?php get_footer(); ?>
