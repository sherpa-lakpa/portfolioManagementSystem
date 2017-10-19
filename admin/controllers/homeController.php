<?php
class homeController{
	public $home,$testimonial;
	public function __construct(){
		$this->home = new Home;
	}
	public function index(){
		$informations = $this->home->index()->data();
		return $informations;
	}
	public function msgCount(){
		$message = new Message;
		$messages = $message->index()->count();
		return $messages;
	}
	public function skillCount(){
		$skill = new Skill;
		$skills = $skill->index()->count();
		return $skills;
	}
	public function eduCount(){
		$education = new Education;
		$educations = $education->index()->count();
		return $educations;
	}
	public function workCount(){
		$work = new Work;
		$works = $work->index()->count();
		return $works;
	}
	public function testimonials(){
		$this->testimonial = new Testimonial;
		$testimonials = $this->testimonial->index()->data();
		return $testimonials;
	}
	public function tdelete(){
		if($id = Input::get('tdelete')){
			$this->testimonial->delete($id);
			Redirect::to('index.php');
		}
	}
	public function editHomeLine(){
		if(Input::get('editHome')){
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'home' => array(
					'require' => true,
					'min' => 20
				)
			));
			if($validation->passed()){
				try{
					$update = $this->home->update(array(
						'home' => Input::get('home')
						));
					Session::flash('index', 'Your home line details have been updated.');
					Redirect::to('index.php');

				}catch(Exception $e){
					die("<script>alert('{$e->getMessage()}');</script>");
				}
			}else{
				foreach($validation->errors() as $error){
					echo $error, '<br>';
				}
				echo '<div class="alert alert-danger alert-dismissable fade in pull-right">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Error!</strong> '.$error.'
						  </div>';

			}

		}
	}
	public function editAbout(){
		if(Input::get('editAbout')){
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'about' => array(
					'require' => true,
					'min' => 50
				)
			));
			if($validation->passed()){
				try{
					$update = $this->home->update(array(
						'about' => Input::get('about')
						));
					Session::flash('index', 'Your about me details have been updated.');
					Redirect::to('index.php');

				}catch(Exception $e){
					die("<script>alert('{$e->getMessage()}');</script>");
				}
			}else{
				foreach($validation->errors() as $error){
					echo $error, '<br>';
				}
				echo '<div class="alert alert-danger alert-dismissable fade in pull-right">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Error!</strong> '.$error.'
						  </div>';

			}

	}

	}
	public function editContact(){
		if(Input::get('editContact')){
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'name' => array(
					'require' => true,
					'min' => 4
				),
				'address1' => array(
					'require' => true,
					'min' => 2,
					'max' => 50
				),
				'address2' => array(
					'require' => true,
					'min' => 2,
					'max' => 50
				),
				'mobile' => array(
					'require' => true,
					'min' => 10
				),
				'email' => array(
					'require' => true,
					'min' => 5
				),
			));
			if($validation->passed()){
				try{
					$update = $this->home->update(array(
						'about' => Input::get('about'),
						'address1' => Input::get('address1'),
						'address2' => Input::get('address2'),
						'mobile' => Input::get('mobile'),
						'email' => Input::get('email')
						));
					Session::flash('index', 'Your contacts have been updated.');
					Redirect::to('index.php');

				}catch(Exception $e){
					die("<script>alert('{$e->getMessage()}');</script>");
				}
			}else{
				foreach($validation->errors() as $error){
					echo $error, '<br>';
				}
				echo '<div class="alert alert-danger alert-dismissable fade in pull-right">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Error!</strong> '.$error.'
						  </div>';

			}

	}
	}
	public function editSocial(){
		if(Input::get('editSocial')){
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'facebook' => array(
					'require' => true,
					'min' => 10,
					'max' => 100
				),
				'twitter' => array(
					'require' => true,
					'min' => 10,
					'max' => 100
				),
				'gplus' => array(
					'require' => true,
					'min' => 10,
					'max' => 100
				),
				'linkedin' => array(
					'require' => true,
					'min' => 10,
					'max' => 100
				),
				'instagram' => array(
					'require' => true,
					'min' => 10,
					'max' => 100
				),
				'github' => array(
					'require' => true,
					'min' => 10,
					'max' => 100
				)
			));
			if($validation->passed()){
				try{
					$update = $this->home->update(array(
						'facebook' => Input::get('facebook'),
						'twitter' => Input::get('twitter'),
						'gplus' => Input::get('gplus'),
						'linkedin' => Input::get('linkedin'),
						'instagram' => Input::get('instagram'),
						'github' => Input::get('github')
						));
					Session::flash('index', 'Your social links have been updated.');
					Redirect::to('index.php');

				}catch(Exception $e){
					die("<script>alert('{$e->getMessage()}');</script>");
				}
			}else{
				foreach($validation->errors() as $error){
					echo $error, '<br>';
				}
				echo '<div class="alert alert-danger alert-dismissable fade in pull-right">
						    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						    <strong>Error!</strong> '.$error.'
						  </div>';

			}
		}
	}
}