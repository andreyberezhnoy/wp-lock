<?php
$test_root = getenv( 'WP_TESTS_DIR' ) ? : dirname( __FILE__ ) . '/../wordpress-develop/tests/phpunit';

require $test_root . '/includes/bootstrap.php';

function _manually_load_plugin() {
	require dirname( __FILE__ ) . '/../plugin.php';
}

tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );
