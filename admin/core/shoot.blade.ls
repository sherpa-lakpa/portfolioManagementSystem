<?php
if(in_array("--help", $argv)){
	@help();
}elseif(in_array("--delete", $argv)){
	$framework = @getInstance($argv[1]);
	if(!$framework->if_exists()){
		@print("Component doesnot exist!\n","red");
		return 1;
	}
	$framework->remove()->add_sidebar(true); //true for delete flag
	$sql = "DROP TABLE `{$framework->db_name}`";
	if(DB::getInstance()->query($sql)->error()){
		@print("Error encountered while deleting component's table\n","red");	
		@print("You might have not created table for this Component. Shoot this command for help.\n","white");
		@print("php artisan --help\n","green");	
	}else{
		@print("Component deleted successfully.\n","green");		
	}
}else{
	if(isset($argv[1])){
		$name = $argv[1];
		$component = @getInstance($name);
	}

	if (count($argv) == 1) {
		@print("Please give Component name.\n","red");
		@print("Eg: 'php shoot test'\n","green");
	}
	elseif(count($argv) == 2){

		if($component->if_exists()){
			@print("Component already Created! Try New!!\n","blue");
			return 1;
		}
		try{
			$component->register()->make_model()->make_controller()->make_view()->add_sidebar();
			@print("Component created!!! Creating something new?\n","green");
		}catch(Exception $e){
			@print("Error encountered! Please try again.\n","red");
		}
	}elseif(count($argv) == 3){
		$db_arg = $argv[2];
		$args = explode(",", $db_arg);
		
		$cols = $component->schema($args);

		$table_name = $component->db_name;

		$sql = "DROP TABLE IF EXISTS `{$table_name}`;
				CREATE TABLE `{$table_name}` (
 				`id` INT NOT NULL AUTO_INCREMENT ,";
		foreach ($cols as $key => $value) {
			if($value=="string")$value="VARCHAR(255)";
			$sql .=	"`{$key}` {$value} NOT NULL , ";
		}
		$sql .= "PRIMARY KEY (`id`))";

		if($component->DB()->query($sql)->error()){
			@print("Error encountered while creating component\n","red");	
		}else{
			// DB sucess and touch File system
			if($component->if_exists()){
				@print("Component already Created! Try New!!\n","blue");
				return 1;
			}

			try{
				$component->register()->make_model()->make_controller(true)->make_view(true)->add_sidebar();
				@print("Component created! Create something new \033[1;37m😊\033[0m\n","green");
			}catch(Exception $e){
				@print("Error encountered! Please try again.\n","red");
			}
		}

	}else{
		@print("Please provide valid arguments.\nTry: 'php shoot --help'\n","red");
	}
}
?>