<?php
App::uses('Summary', 'Model');

/**
 * Summary Test Case
 */
class SummaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.summary'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Summary = ClassRegistry::init('Summary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Summary);

		parent::tearDown();
	}

}

