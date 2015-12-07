<?php namespace services;

class http {

	private $url;

	public function __construct($url) {
		$this->url = $url;
	}

	public function get() {
		return 'http: ' . $this->url;
	}	
}
