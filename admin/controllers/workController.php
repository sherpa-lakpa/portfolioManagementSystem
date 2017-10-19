<?php
class workController{
	public $work;
	public function __construct(){
		$this->work = new Work;
	}
	public function index(){
		$works = $this->work->index()->data();
		return $works;
	}
	public function delete(){
		if($id = Input::get('delete')){
			$this->work->delete($id);
			Redirect::to('work.php');
		}
	}
	public function create(){
		if (Input::exists() && Input::get('addWork')) {
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'company' => array(
					'required' => true,
					'min' => 2,
					'max' => 100,
					'unique' => 'works'
				),
				'post' => array(
					'required' => true,
					'min' => 2,
					'max' => 50,
				),
				'date' => array(
					'required' => true,
					'min' => 2,
					'max' => 100,
					'unique' => 'works'
				),
				'info' => array(
					'required' => true,
					'min' => 5,
					'max' => 500
				)
			));

			if ($validation->passed()) {

				try {
					$this->work->create(array(
						'company' => Input::get('company'),
						'post' => Input::get('post'),
						'date' => Input::get('date'),
						'info' => Input::get('info')
					));
					Session::flash('work', 'Your work details have been added.');
					Redirect::to('work.php');

				} catch(Exception $e){
					die($e->getMessage());
				}
			}else{
				$errorRep = "";
				foreach($validation->errors() as $error){
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
		if(Input::get('editWork')){
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'company' => array(
					'required' => true,
					'min' => 2,
					'max' => 100
				),
				'post' => array(
					'required' => true,
					'min' => 2,
					'max' => 50,
				),
				'date' => array(
					'required' => true,
					'min' => 2,
					'max' => 100
				),
				'info' => array(
					'required' => true,
					'min' => 5,
					'max' => 500
				)
			));
			if($validation->passed()){
				try{
					$name = Input::get('company');
					$update = $this->work->update(array(
						'company' => Input::get('company'),
						'post' => Input::get('post'),
						'date' => Input::get('date'),
						'info' => Input::get('info')
						), Input::get('id'));
					Session::flash('work', "Your Work ($name) details has been edited.");
					Redirect::to('work.php');

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
						    <strong>Error! ('.Input::get('company').')</strong> '.$error.'
						  </div>';
			}
		}

	}
}