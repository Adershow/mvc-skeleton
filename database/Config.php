<?php
namespace database;

use Illuminate\Database\Capsule\Manager as Capsule;

class Config 
{
	private $config = array();
	public $capsule;

	public function __construct() 
	{
		define("ENVIRONMENT", "development");
		define("BASE", "http://localhost/mvc-skeleton/");

		if(ENVIRONMENT == 'development') {
			$this->config['dbname'] = 'testemvc';
			$this->config['host'] = '127.0.0.1';
			$this->config['dbuser'] = 'root';
			$this->config['dbpass'] = '';
		} else {
			$this->config['dbname'] = 'testemvc';
			$this->config['host'] = '127.0.0.1';
			$this->config['dbuser'] = 'root';
			$this->config['dbpass'] = '';
		}
	}

	public function connect() 
	{
		$this->capsule = new Capsule;
		$this->capsule->addConnection([
			"driver" => "mysql",
			"host" => "127.0.0.1",
			"database" => $this->config['dbname'],
			"username" => $this->config['dbuser'],
			"password" => $this->config['dbpass']
		 ]);
		
		//Make this Capsule instance available globally.
		$this->capsule->setAsGlobal();
		
		// Setup the Eloquent ORM.
		$this->capsule->bootEloquent();
		$this->capsule->bootEloquent();
	}
}