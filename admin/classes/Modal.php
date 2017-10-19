<?php 
class Modal{
	private $_db,
			$_data;
	public $table;

	public function __construct(){
		$this->_db = DB::getInstance();
		$table = strtolower(get_called_class()).'s';
		$this->table = $table;
	}

	public function count(){
		return count($this->_data);
	}

	public function index(){
		$data = $this->_db->all($this->table);
		$this->_data = $data->result();
		return $this;
	}

	public function create($fields = array()){
		if(!$this->_db->insert($this->table, $fields)){
			throw new Exception('There was a problem creating a message');
		}else{
			return true;
		}
	}

	public function update($fields = array(), $id = null){
		if(!$this->_db->update($this->table,$id, $fields)){
			throw new Exception('There was a problem updating.');
		}
	}

	public function delete($id) {
		$this->_db->delete($this->table, array("id", "=", $id));
	}

	public function find($message = null){
		if ($message) {
			$field = (is_numeric($message)) ? 'id' : 'username';
			$data = $this->_db->get($this->table, array($field, '=', $message));

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
}