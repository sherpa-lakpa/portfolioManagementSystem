<?php
class messageController{
	public $message;
	public function __construct(){
		$this->message = new Message;
	}
	public function index(){
		$messages = $this->message->index()->data();
		return $messages;
	}
	public function delete(){
		if($id = Input::get('delete')){
			$this->message->delete($id);
			Redirect::to('message.php');
		}
	}
	public function create(){
		
	}
	public function edit(){
		
	}
}