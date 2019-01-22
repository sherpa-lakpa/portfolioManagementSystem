<?php

class {{sample}}Controller{
	public ${{sample}};
	public function __construct(){
		$this->{{sample}} = new {{Sample}};
	}
	public function index(){
		${{sample}}s = $this->{{sample}}->index()->data();
		return ${{sample}}s;
	}
	public function delete(){
		if($id = Input::get('delete')){
			$this->{{sample}}->delete($id);
			Redirect::to('{{sample}}.php');
		}
	}
	public function create(){
		if (Input::exists() && Input::get('add')) {
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'name' => array(
					'required' => true,
					'min' => 2,
					'max' => 20,
					'unique' => '{{sample}}s'
				),
				'percentage' => array(
					'required' => true,
					'min' => 1,
					'maxValue' => 100

				)
			));

			if ($validation->passed()) {

				try {
					$this->{{sample}}->create(array(
						'name' => Input::get('name'),
						'percentage' => Input::get('percentage')
					));
					Session::flash('{{sample}}', 'Your {{sample}}s have been added.');
					Redirect::to('{{sample}}.php');


				} catch(Exception $e){
					die($e->getMessage());
				}
			}else{
				$errorRep = "";
				foreach($validation->errors() as $key => $error){
					$errorRep .= ($key+1). ")  ".$error.'   ';
				}
				echo '<div class="alert alert-danger alert-dismissable fade in pull-right">
							    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							    <strong>Error!</strong> '.$errorRep.'
							  </div>';

			}
		}
	}

	public function edit(){
		if(Input::get('edit{{Sample}}')){
				$validate = new Validate;
				$validation = $validate->check($_POST, array(
						'name' => array(
						'required' => true,
						'min' => 2,
						'max' => 20
						),
						'percentage' => array(
							'required' => true,
							'min' => 1,
							'maxValue' => 100
						)
				));
				if($validation->passed()){
					try{
						$name = Input::get('name');
						$update = $this->{{sample}}->update(array(
								'name' => $name,
								'percentage' => Input::get('percentage')
							), Input::get('id'));
						Session::flash('{{sample}}', "Your {{sample}} ($name) details has been edited.");
						Redirect::to('{{sample}}.php');

					}catch(Exception $e){
						die("<script>alert('{$e->getMessage()}');</script>");
					}
				}else{
					$errorRep = "";
					foreach($validation->errors() as $key => $error){
						$errorRep .= ($key+1). ")  ".$error.'   ';
					}
					echo '<div class="alert alert-danger alert-dismissable fade in pull-right">
							    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							    <strong>Error! ('.Input::get('name').')</strong> '.$error.'
							  </div>';
				}
		}
	}
}