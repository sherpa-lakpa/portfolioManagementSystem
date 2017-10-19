<?php
class portfolioController{
	public $portfolio;
	public function __construct(){
		$this->portfolio = new Portfolio;
	}
	public function index(){
		$portfolios = $this->portfolio->index()->data();
		return $portfolios;
	}
	public function delete(){
		if($id = Input::get('delete')){
			$this->portfolio->delete($id);
			Redirect::to('portfolio.php');
		}
	}
	public function create(){
		if (Input::exists() && Input::get('addPortfolio')) {
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'name' => array(
					'required' => true,
					'min' => 2,
					'max' => 50,
					'unique' => 'portfolios'
				),
				'category' => array(
					'required' => true,
					'min' => 2,
					'max' => 30
				),
				'info' => array(
					'required' => true,
					'min' => 2
				),
				'techno' => array(
					'required' => true,
					'min' => 2,
					'max' => 100
				)
			));

			if ($validation->passed()) {

				try {
					$nam = $_FILES['image']['name'];
				    $tmp_name = $_FILES['image']['tmp_name'];
				    $location = '../images/';
				    $target = $location.$nam;
				    $image = '';
				    if(move_uploaded_file($tmp_name,$target)){
				    	$image = 'images/'.$nam;
					}

					$this->portfolio->create(array(
						'name' => Input::get('name'),
						'category' => Input::get('category'),
						'info' => Input::get('info'),
						'techno' => Input::get('techno'),
						'image' => $image,
						'mimage' => $image	
					));
					Session::flash('portfolio', 'Your portfolio details has been added.');
					Redirect::to('portfolio.php');

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
		if(Input::get('editPortfolio')){
			$validate = new Validate;
			$validation = $validate->check($_POST, array(
				'name' => array(
					'required' => true,
					'min' => 2,
					'max' => 50
				),
				'category' => array(
					'required' => true,
					'min' => 2,
					'max' => 30
				),
				'info' => array(
					'required' => true,
					'min' => 2
				),
				'techno' => array(
					'required' => true,
					'min' => 2,
					'max' => 100
				)
			));
			if($validation->passed()){
				try{
					if (Input::get('image') !== '') {
						$image = 'images/'.Input::get('image');
						$update = $portfolio->update(array(
							'name' => Input::get('name'),
							'category' => Input::get('category'),
							'info' => Input::get('info'),
							'techno' => Input::get('techno'),
							'image' => $image,
							'mimage' => $image	
						), Input::get('id'));
					}else{
						$update = $this->portfolio->update(array(
							'name' => Input::get('name'),
							'category' => Input::get('category'),
							'info' => Input::get('info'),
							'techno' => Input::get('techno')	
						), Input::get('id'));
					}
					$name = Input::get('name');
					
					Session::flash('portfolio', "Your Portfolio ($name) details has been edited.");
					Redirect::to('portfolio.php');

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