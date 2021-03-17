<?php
$large = get_query_var('property-large', false)
?>
<a class="property <?php if ($large === true) {
						echo 'property--large';
					} ?>" href="<?php the_permalink() ?>" title="<?= esc_attr(get_the_title()) ?>">
	<div class="property__image">
		<?php the_post_thumbnail($large === true ? 'hollycamp-thumbnail-large' : 'hollycamp-thumbnail') ?>
	</div>
	<div class="property__body">
		<div class="property__location"><?php bootcamp_city() ?></div>
		<h3 class="property__title"><?= the_title() ?> - <?php the_field('surface') ?></h3>
		<div class="property__price">
			<?php bootcamp_price() ?>
		</div>
	</div>
</a>