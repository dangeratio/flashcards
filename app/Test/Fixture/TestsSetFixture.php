<?php
/**
 * TestsSetFixture
 *
 */
class TestsSetFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'test_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'set_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'order' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'test_id' => 1,
			'set_id' => 1,
			'order' => 1
		),
	);

}
