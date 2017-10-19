<?php

include 'includes/_session.php';

if(Input::exists()){
	if (Token::check(Input::get('token'))) {
		$validate = new Validate;
		$validation = $validate->check($_POST, array(
			'name' => array(
				'require' => true,
				'min' => 2,
				'max' => 20
			)
		));
		if($validation->passed()){
			try{
				$update = $user->update(array(
					'name' => Input::get('name')
					));
				Session::flash('home', 'Your details have been updated.');
				Redirect::to('index.php');

			}catch(Exception $e){
				die($e->getMessage());
			}
		}
	}
}

?>
<form action="" method="POST">
	<div class="field">
		<label for="name">Name</label>
		<input type="text" name="name" value="<?php echo escape($user->data()->name); ?>">
		<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
		<input type="submit" value="Update">
	</div>
</form>