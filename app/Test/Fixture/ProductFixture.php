<?php
/**
 * ProductFixture
 *
 */
class ProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'metal' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'weight' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'depth' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'length' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'width' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => true),
		'price' => array('type' => 'float', 'null' => true, 'default' => null, 'unsigned' => true),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'product_type_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'metal' => 'Lorem ip',
			'weight' => 1,
			'depth' => 1,
			'length' => 1,
			'width' => 1,
			'price' => 1,
			'created' => '2015-09-16 04:10:25',
			'modified' => '2015-09-16 04:10:25',
			'product_type_id' => 1
		),
	);

}
