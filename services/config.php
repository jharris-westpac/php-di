<?php namespace services;

class config {

	private $data = [
		'user' => 'db_user'
	];

	public function get($prop) {
		return $this->data[$prop];
	}
}