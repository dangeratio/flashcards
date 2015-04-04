<?php
App::uses('TestsSet', 'Model');

/**
 * TestsSet Test Case
 *
 */
class TestsSetTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tests_set',
		'app.test',
		'app.set',
		'app.card'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TestsSet = ClassRegistry::init('TestsSet');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TestsSet);

		parent::tearDown();
	}

}
