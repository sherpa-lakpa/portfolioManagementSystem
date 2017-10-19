<?php 
class Home{
	private $_db,
			$_data;

	public function __construct(){
		$this->_db = DB::getInstance();
	}

	public function index(){
		$data = $this->_db->all('informations');
		$this->_data = $data->first();
		return $this;
	}

	public function create($fields = array()){
		if(!$this->_db->insert('informations', $fields)){
			throw new Exception('There was a problem creating a message');
		}else{
			return true;
		}
	}

	public function update($fields = array(), $id = null){
		$id = $this->_data->id;
		// $id = $this->_data[0]['id'];
		
		if(!$this->_db->update('informations',$id, $fields)){
			throw new Exception('There was a problem updating.');
		}
	}

	public function delete($id) {
		$this->_db->delete("informations", array("id", "=", $id));
	}

	public function find($message = null){
		if ($message) {
			$field = (is_numeric($message)) ? 'id' : 'username';
			$data = $this->_db->get('informations', array($field, '=', $message));

			if ($data->count()) {
				$this->_data = $data->first();
				return true;
			}
		}
	}

	public function data(){
		return $this->_data;
	}
	public function exists(){
		return (!empty($this->_data))? true : false;
	}
	public function first(){
		return $this->_data[0];
	}
	
}