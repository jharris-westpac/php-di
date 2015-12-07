<?php namespace services;

class db {
	
	private $config;

	public function __construct(config $config) {
		$this->config = $config;
	}

	public function connect() {
		return 'DB OK: ' . $this->config->get('user');
	}

	public function query($query) {

	}
}