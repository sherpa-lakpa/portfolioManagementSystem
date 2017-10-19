<?php
class educationController{
	public $education;
	public function __construct(){
		$this->education = new Education;
	}
	public function index(){
		$educations = $this->education->index()->data();
		return $educations;
	}
	public function delete(){
		if($id = Input::get('delete')){
			$this->education->delete($id);
			Redirect::to('education.php');
		}
	}
	public function create(){
		if (Input::exists() && Input::get('addEducation')) {
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'school' => array(
					'required' => true,
					'min' => 2,
					'max' => 50,
					'unique' => 'educations'
				),
				'degree' => array(
					'required' => true,
					'min' => 2,
					'max' => 50,
					'unique' => 'educations'
				),
				'date' => array(
					'required' => true,
					'min' => 2,
					'max' => 50,
					'unique' => 'educations'
				),
				'info' => array(
					'required' => true,
					'min' => 5
				)
			));

			if ($validation->passed()) {

				try {
					$this->education->create(array(
						'school' => Input::get('school'),
						'degree' => Input::get('degree'),
						'date' => Input::get('date'),
						'info' => Input::get('info')
					));
					Session::flash('education', 'Your education details has been added.');
					Redirect::to('education.php');

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
		if(Input::get('editEducation')){
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'school' => array(
				'required' => true,
				'min' => 2,
				'max' => 50
				),
				'degree' => array(
					'required' => true,
					'min' => 2,
					'max' => 50
				),
				'date' => array(
					'required' => true,
					'min' => 2,
					'max' => 50
				),
				'info' => array(
					'required' => true,
					'min' => 5
				)
			));
			if($validation->passed()){
				try{
					$name = Input::get('school');
					$update = $this->education->update(array(
							'school' => Input::get('school'),
							'degree' => Input::get('degree'),
							'date' => Input::get('date'),
							'info' => Input::get('info')
						), Input::get('id'));
					Session::flash('education', "Your Education ($name) details has been edited.");
					Redirect::to('education.php');

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
						    <strong>Error! ('.Input::get('school').')</strong> '.$error.'
						  </div>';
			}
		}
	}
}