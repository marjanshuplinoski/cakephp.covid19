<?php
/**
 * Summary Fixture
 */
class SummaryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'summary';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'country' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'countrycode' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'slug' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'newconfirmed' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'totalconfirmed' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'newdeaths' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'totaldeaths' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'newrecovered' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'totalrecovered' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'date' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(

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
			'country' => 'Lorem ipsum dolor sit amet',
			'countrycode' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'newconfirmed' => 1,
			'totalconfirmed' => 1,
			'newdeaths' => 1,
			'totaldeaths' => 1,
			'newrecovered' => 1,
			'totalrecovered' => 1,
			'date' => 'Lorem ipsum dolor sit amet'
		),
	);

}

