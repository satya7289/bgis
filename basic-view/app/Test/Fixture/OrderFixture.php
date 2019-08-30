<?php
/**
 * OrderFixture
 *
 */
class OrderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'primary'),
		'order_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'serial_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'order_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'bill_to' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ship_to' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'job_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'contact_person' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'mobile' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'telephone' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'fax' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'order_receive_against' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'commercial_terms' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'po_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10),
		'po_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'machine_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'delivery_date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'nature_job' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 500, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'order_number' => 1,
			'serial_number' => 1,
			'order_date' => '2013-12-01 08:37:04',
			'bill_to' => 'Lorem ipsum dolor sit amet',
			'ship_to' => 'Lorem ipsum dolor sit amet',
			'job_number' => 1,
			'contact_person' => 'Lorem ipsum dolor sit amet',
			'mobile' => 1,
			'telephone' => 1,
			'fax' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'order_receive_against' => 'Lorem ipsum dolor sit amet',
			'commercial_terms' => 'Lorem ipsum dolor sit amet',
			'po_number' => 1,
			'po_date' => '2013-12-01 08:37:04',
			'machine_name' => 'Lorem ipsum dolor sit amet',
			'delivery_date' => '2013-12-01 08:37:04',
			'nature_job' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet'
		),
	);

}
