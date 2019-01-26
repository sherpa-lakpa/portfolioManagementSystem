<?php
class Framework{
	private static $_instance = null;
	private $_db;
	public $model_name;
	public $controller_name;
	public $view_name;
	public $db_name;
	public $schema;
	public $columns;
	private static $colors = [
		'red' => '0;31',
		'green' => '0;32',
		'blue' => '0;34',
		'white' => '1;37',
	];

	public function __construct($name){
		$this->_db = DB::getInstance();
		$this->model_name = ucfirst($name);
		$this->controller_name = lcfirst($name).'Controller';
		$this->view_name = lcfirst($name);
		$this->db_name = $this->view_name.'s';
	}

	public function DB(){
		return $this->_db;
	}

	public function schema($args){
		$cols = [];
		foreach ($args as $key => $value) {
			$arg = explode(":", $value);
			$cols[$arg[0]] = $arg[1];
		}
		$this->schema = $cols;
		$this->columns = array_keys($cols);
		return $cols;
	}

	public static function getInstance($name){
		if(!isset(self::$_instance)){
			self::$_instance = new Framework($name);
		}
		return self::$_instance;
	}

	public function if_exists(){
		return file_exists("{$this->view_name}.php");
	}

	public function register(){
		$registry_file = file_get_contents('sample.ls', true);
		file_put_contents("{$this->view_name}.php",$registry_file);
		return $this;
	}

	public function make_model(){
		$model_content = file_get_contents('classes/Sample.ls', true);
		$model = str_replace('{{Sample}}',$this->model_name,$model_content);
		file_put_contents("classes/{$this->model_name}.php",$model);	
		return $this;
	}

	public function make_controller($schema=false){
		$controller_content = file_get_contents('controllers/sampleController.ls', true);

		if($schema){
			$controller_needle = "/*ControllerValidation*/
				'name' => array(
					'required' => true,
					'min' => 2,
					'max' => 255,
					'unique' => '{{sample}}s'
				),
				/*EndControllerValidation*/";
			$controller_passed_needle = "/*ControllerValPassed*/
						'name' => Input::get('name'),
						/*EndControllerValPassed*/";
			$controller_replace = "";
			$passed_content = "";
			foreach ($this->schema as $key => $value) {
				if ($value == 'string') {
					$controller_replace .= "'{$key}' => array(
						'required' => true,
						'min' => 2,
						'max' => 255,
					),
					";
				}else{
					$controller_replace .= "'{$key}' => array(
						'required' => true,
					),";
				}
				$passed_content .= "
						'{$key}' => Input::get('{$key}'),";
			}
			$controller = str_replace($controller_needle,$controller_replace,$controller_content);
			$controller = str_replace($controller_passed_needle,$passed_content,$controller);
			$controller_content = $controller;
		}
		
		//Sanitize file
		$controller = str_replace('{{sample}}',$this->view_name,$controller_content);
		$controller = str_replace('{{Sample}}',$this->model_name,$controller);

		file_put_contents("controllers/{$this->controller_name}.php",$controller);	
		return $this;
	}

	public function make_view($schema=false){
		$view_content = file_get_contents('views/sample.ls', true);

		if($schema){
			//Columns makers
			$col_needle = '<!--Columns-->
                                        <th>Name</th>
                                        <!--EndColumns-->';
			$row_needle = '/*Rows*/
                                        echo "<td>{${{sample}}->name}</td>";
                                        /*EndRows*/';
            $edit_needle = '<!--Edit-->
                                              <div class="form-group">
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" id="name" value="<?php echo ${{sample}}->name ?>">
                                                </div>
                                              </div>
                                            <!--EndEdit-->';
            $add_needle = '<!--Add-->
                        <div class="form-group">
                            <input type="text" name="name" id="name" value="<?php echo escape(Input::get("name")); ?>" placeholder="Name" autocomplete="off" class="form-control">
                        </div>
                        <!--EndAdd-->';

            $col_content = '';
            $row_content = '';
            $edit_content = '';
            $add_content = '';
            foreach ($this->columns as $key => $value) {
            	$col_content .= '<th>'.ucfirst($value).'</th>
            							';
            	$row_content .= 'echo "<td>{${{sample}}->'.$value.'}</td>";
                                        ';
                $edit_content .= '<div class="form-group">
                                                <div class="form-group">
                                                    <label for="name">'.ucfirst($value).'</label>
                                                    <input type="text" name="'.$value.'" id="'.$value.'" value="<?php echo ${{sample}}->'.$value.' ?>">
                                                </div>
                                              </div>
                                              ';
                $add_content .= '<div class="form-group">
                            <input type="text" name="'.$value.'" id="'.$value.'" value="<?php echo escape(Input::get("'.$value.'")); ?>" placeholder="'.ucfirst($value).'" autocomplete="off" class="form-control">
                        </div>
                        ';
            }
			$view = str_replace($col_needle,$col_content,$view_content);
			$view = str_replace($row_needle,$row_content,$view);
			$view = str_replace($edit_needle,$edit_content,$view);
			$view = str_replace($add_needle,$add_content,$view);
			$view_content = $view;
		}
		$view = str_replace('{{sample}}',$this->view_name,$view_content);
		$view = str_replace('{{samples}}',$this->db_name,$view);
		$view = str_replace('{{Sample}}',$this->model_name,$view);
		file_put_contents("views/{$this->view_name}.php",$view);	
		return $this;
	}

	public function add_sidebar($delete=false){
		$sidebar_content = file_get_contents('views/partials/_navSide.php', true);
		$str_replace = '
                    <!--'.$this->model_name.'-->
                    <li class="<?php echo basename($_SERVER["REQUEST_URI"], ".php") == "'.$this->view_name.'" ? "active" : ""; ?>">
                        <a href="'.$this->view_name.'.php"><i class="fa fa-fw fa-book"></i> '.$this->model_name.'</a>
                    </li>
	                <!--'.$this->model_name.'-->
	                ';

	    $str_needle = '';

	    if(!$delete){
	    	$str_replace .= '<!--NewSideBarGoesHere-->';
	    	$str_needle = '<!--NewSideBarGoesHere-->';
	    }

	    $view = function() use($str_needle, $str_replace, $delete, $sidebar_content){
	    	if($delete){
				$view = str_replace($str_replace,$str_needle, $sidebar_content);
	    	}else{
				$view = str_replace($str_needle,$str_replace, $sidebar_content);
	    	}
	    	return $view;
	    };
		file_put_contents("views/partials/_navSide.php",$view());	
		return $this;
	}

	public function remove(){
		$files = ["{$this->view_name}.php",
			"classes/{$this->model_name}.php",
			"controllers/{$this->controller_name}.php",
			"views/{$this->view_name}.php",
		];
		foreach ($files as $key => $value) {
			if (file_exists($value)) { unlink ($value); }
		}
		return $this;
	}

	public static function print($message, $color){
		$colored_string = "";
		// Check if given foreground color found
		if (isset(self::$colors[$color])) {
			$colored_string .= "\033[" . self::$colors[$color] . "m";
		}

		// Add string and end coloring
		$colored_string .=  $message . "\033[0m";
		echo $colored_string;
	}

	public static function help(){
			echo "
PHP Easy Dashboard Framework V1.0
______________________________________________________¶¶__
________________________________________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶
_______________________________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶__
________________________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_____________
__________________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶________________
_________________¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶______________________
¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_________________________
¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶_¶_¶¶¶¶¶¶¶¶_________________________
¶¶¶¶¶¶¶¶¶¶¶¶¶¶¶__¶¶¶¶¶___¶__¶¶¶¶¶¶________________________
_¶¶¶¶¶¶¶¶¶¶¶¶____¶¶¶¶¶¶¶¶¶___¶¶¶¶¶¶_______________________
__¶¶¶¶¶¶¶¶¶______¶¶¶¶¶_______¶¶¶¶¶¶¶______________________
___¶¶¶¶¶¶________¶¶¶¶¶_________¶¶¶¶¶¶¶____________________
____¶¶¶¶_________¶¶¶¶¶__________¶¶¶¶¶¶¶¶__________________

\033[1;33mOptions:\033[0m
\033[0;32m--help\033[0m 			Displays this help message
\033[0;32m--delete\033[0m 		Deletes the component

\033[1;33mUsage:\033[0m
\033[0;32mphp shoot component1\033[0m
- Creates new component with name as component1

\033[0;32mphp shoot student fname:string,lname:string,roll:int,address:string\033[0m
- Creates new component with name as student and creates Table
\033[0;36m-----------------------------\033[0m
\033[0;36m|id|fname|lname|roll|address|\033[0m
\033[0;36m-----------------------------\033[0m
\033[1;36mint\033[0m - represents integer and provides default range.
\033[1;36mstring\033[0m - represents varchar(255)

\033[0;32mphp shoot component1 --delete\033[0m
- Delete component with name as component1

Created with \033[0;31m♥\033[0m  by \033[0;32mLakpa Sherpa\033[0m. Visit: \033[0;32mwww.slakpa.com.np\033[0m
\n";
	}
}