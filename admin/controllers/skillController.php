<?php

class skillController{
	public $skill;
	public function __construct(){
		$this->skill = new Skill;
	}
	public function index(){
		$skills = $this->skill->index()->data();
		return $skills;
	}
	public function delete(){
		if($id = Input::get('delete')){
			$this->skill->delete($id);
			Redirect::to('skill.php');
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
					'unique' => 'skills'
				),
				'percentage' => array(
					'required' => true,
					'min' => 1,
					'maxValue' => 100

				)
			));

			if ($validation->passed()) {

				try {
					$this->skill->create(array(
						'name' => Input::get('name'),
						'percentage' => Input::get('percentage')
					));
					Session::flash('skill', 'Your skills have been added.');
					Redirect::to('skill.php');


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
		if(Input::get('editSkill')){
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
						$update = $this->skill->update(array(
								'name' => $name,
								'percentage' => Input::get('percentage')
							), Input::get('id'));
						Session::flash('skill', "Your skill ($name) details has been edited.");
						Redirect::to('skill.php');

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