<?php
add_filter('query_vars', function (array $params): array {
	$params[] = 'locate';
	return $params;
});

add_action('pre_get_posts', function (WP_Query $query) use (&$bootcampCategories): void {
	$locate = get_query_var('locate');
	if (get_query_var('locate')) {
		$tax_query = $query->get('tax_query', []);
		$tax_query[] = [
			'taxonomy' => 'bootcamp_locate',
			'terms' => $locate,
			'field' => 'slug'
		];
		$query->set('tax_query', $tax_query);
	}
});