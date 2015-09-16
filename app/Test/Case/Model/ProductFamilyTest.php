<?php
App::uses('ProductFamily', 'Model');

/**
 * ProductFamily Test Case
 *
 */
class ProductFamilyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.product_family',
		'app.product_type',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductFamily = ClassRegistry::init('ProductFamily');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductFamily);

		parent::tearDown();
	}

}
