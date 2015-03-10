<?php
class Blog {
	public $title;
	public $description;
	public function __construct($title, $description){
		$this->title = $title;
		$this->description = $description;
	}
}
