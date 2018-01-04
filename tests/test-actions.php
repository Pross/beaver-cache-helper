<?php
/**
 * Class SampleTest
 *
 * @package Beaver_Cache_Helper
 */

class Beaver_Cache_HelperActions extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();
		FL_Cache_Buster::init();
	}

	public function test_template_direct() {
		$this->assertEquals( 10, has_action( 'template_redirect', array( 'FL_Cache_Buster', 'donotcache' ) ) );
	}

	public function test_upgrader_process_complete() {
		$this->assertEquals( 10, has_action( 'upgrader_process_complete', array( 'FL_Cache_Buster', 'clear_caches' ) ) );
	}

	public function test_fl_builder_after_save_layout() {
		$this->assertEquals( 10, has_action( 'fl_builder_after_save_layout', array( 'FL_Cache_Buster', 'clear_caches' ) ) );
	}

	public function test_fl_builder_after_save_user_template() {
		$this->assertEquals( 10, has_action( 'fl_builder_after_save_user_template', array( 'FL_Cache_Buster', 'clear_caches' ) ) );
	}

	public function test_fl_builder_cache_cleared() {
		$this->assertEquals( 10, has_action( 'fl_builder_cache_cleared', array( 'FL_Cache_Buster', 'clear_caches' ) ) );
	}
}
