<?php
App::uses('Set', 'Model');

/**
 * Set Test Case
 *
 */
class SetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.set',
		'app.card',
		'app.test',
		'app.tests_set'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Set = ClassRegistry::init('Set');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Set);

		parent::tearDown();
	}

}
