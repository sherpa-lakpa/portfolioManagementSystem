<?php
class testimonialController{
	public $testimonial;
	public function __construct(){
		$this->testimonial = new Testimonial;
	}
	public function index(){
		$testimonials = $this->testimonial->index()->data();
		return $testimonials;
	}
	public function delete(){
		if($id = Input::get('delete')){
			$this->testimonial->delete($id);
			Redirect::to('testimonial.php');
		}
	}
	public function create(){
		if (Input::exists() && Input::get('add')) {
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'by' => array(
					'required' => true,
					'min' => 2,
					'max' => 20,
					'unique' => 'testimonials'
				),
				'quote' => array(
					'required' => true,
					'min' => 5
				)
			));

			if ($validation->passed()) {

				try {
					$this->testimonial->create(array(
						'by' => Input::get('by'),
						'quote' => Input::get('quote')
					));

					Redirect::to('testimonial.php');

				} catch(Exception $e){
					die($e->getMessage());
				}
			}else{
				$errorRep = "";
				foreach($validation->errors() as $error){
					$errorRep .= $error.' -- ';
				}
				echo '<div class="alert alert-danger alert-dismissable fade in pull-right">
							    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							    <strong>Error!</strong> '.$errorRep.'
							  </div>';

			}
		}
	}
	public function edit(){
		if(Input::get('editTestimonial')){
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'qouter' => array(
					'required' => true,
					'min' => 2,
					'max' => 20
				),
				'quote' => array(
					'required' => true,
					'min' => 5
				)
			));
			if($validation->passed()){
				try{
					$name = Input::get('qouter');
					$update = $this->testimonial->update(array(
							'qouter' => Input::get('qouter'),
							'quote' => Input::get('quote')
						), Input::get('id'));
					Session::flash('testimonial', "Your testimonial ($name) details has been edited.");
					Redirect::to('testimonial.php');

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
						    <strong>Error! ('.Input::get('qouter').'\'s)</strong> '.$error.'
						  </div>';
			}
		}
	}
}