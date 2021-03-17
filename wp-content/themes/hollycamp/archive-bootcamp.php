<?php get_header() ?>

<?php 
$cities = get_terms([
	'taxonomy' => 'bootcamp_locate'
]);
$currentCity = get_query_var('locate');
?>

<div class="container page-properties">
	<div class="search-form">
		<h1 class="search-form__title">Retrouver tous nos <strong>Bootcamps</strong></h1>
		
		<hr>
	</div>

	<!-- https://picsum.photos/id/37/802/220.jpg -->

	<?php $i = 0; 
	while(have_posts()): the_post(); ?>
	<?php set_query_var('property-large', $i ===7 ); ?>
	<?php get_template_part('template-parts/bootcamp') ?>
	<?php $i++; 
	endwhile; ?>


</div>

<div class="pagination">
	<?= next_posts_link(__('Voir plus +', 'hollycamp')) ?>
</div>


<?php get_footer() ?>