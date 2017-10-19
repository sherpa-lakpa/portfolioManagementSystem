<?php
class indexController{
	public $index;
	public function __construct(){
		$this->index = new Home;
	}
	public function index(){
		$indexs = $this->index->index()->data();
		return $indexs;
	}
	public function delete(){
		
	}
	public function create(){
		
	}
	public function edit(){
		
	}
	
}