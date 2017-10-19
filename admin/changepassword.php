<?php

include 'includes/_session.php';

if(Input::exists()){
	if (Token::check(Input::get('token'))) {
		$validate = new Validate;
		$validation = $validate->check($_POST, array(
			'password_current' => array(
				'required' => true,
				'min' => 6
				),
			'password_new' => array(
				'required' => true,
				'min' => 6
				),
			'password_new_again' => array(
				'required' => true,
				'min' => 6,
				'maches' => 'password_new'
				)
		));
		if($validation->passed()){
			try{
				if(Hash::make(Input::get('password_current'), $user->data()->salt) !== $user->data()->password){
					echo 'Your current password is wrong';
				}else{
					$salt = Hash::salt(32);
					$user->update(array(
						'password' => Hash::make(Input::get('password_new'), $salt),
						'salt' => $salt
						));
					Session::flash('home', 'Your password have been updated.');
					Redirect::to('index.php');
				}

			}catch(Exception $e){
				die($e->getMessage());
			}
		}else{
			foreach($validation->errors() as $error){
				echo $error, '<br>';
			}
		}
	}
}

?>
<form action="" method="POST">
	<div class="field">
		<label for="password_current">Current Password</label>
		<input type="password" id="password_current" name="password_current">
	</div>
	<div class="field">
		<label for="password_new">New Password</label>
		<input type="password" id="password_new" name="password_new">
	</div>
	<div class="field">
		<label for="password_new_again">New Password Again</label>
		<input type="password" id="password_new_again" name="password_new_again">
	</div>

	<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
	<input type="submit" value="Change">
</form>