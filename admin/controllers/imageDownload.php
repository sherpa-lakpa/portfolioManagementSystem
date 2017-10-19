<?php 
    
    //ini_set('display_errors','Off');

	session_start();
	
	// Session Variables - non-live - test only
	$s_username = $_SESSION['username'];

	// Handle Profile Picture Upload. (Optional)

	$max_size = 700;

	$www        = $_SERVER['DOCUMENT_ROOT'];
	$target     = $www . "profiles/" . $s_username . "/img/"; // The upload folder in your server hard drive. MUST END in forward slash.
	echo $target;
	$file_name  = $_FILES['userfile']['name'];
	$file_type  = $_FILES['userfile']['type'];
	$file_temp  = $_FILES['userfile']['tmp_name'];
	$file_err   = $_FILES['userfile']['error'];
	$file_size  = $_FILES['userfile']['size'];
	$target     = retainpath_changename($target . $file_name, $s_username); // Retain target path & Change file name to $s_username.ext

	switch ($file_size) {

		case 0:
			//echo "Something went wrong.<br/>";
			//echo "Upload failed.<br/>";
			// Handle the rest of the form
	
			$displayname = $_POST["displayname"];
			$displayname = mysql_real_escape_string($displayname);
			$location    = $_POST["location"];
			$location	 = mysql_real_escape_string($location);
			$web         = $_POST["web"];
			$web		 = mysql_real_escape_string($web);
			$bio         = $_POST["bio"];
			$bio		 = mysql_real_escape_string($bio);

			require('../include/mysql_connect.php');	
			$query = "UPDATE tbluser SET displayname = '$displayname', location = '$location', web = '$web', bio = '$bio' WHERE pk_user = '$s_username'";
			mysql_query($query, $conn);

			mysql_close($conn);
			echo "Form updated successfuly.<br/>";
			break;
		
		case $file_size < 716800:
			echo "Less than 700k in size.<br/>";
			remove_existing_picture($s_username);
			move_uploaded_file($file_temp, $target);
			echo $file_name . " has been uploaded! <br/>";
			echo "Type: " . $file_type . "<br/>";
			echo "Error: " . $file_err . "<br/>";
			echo "Size: " . round($file_size / 1024) . " KB";
			break;
			
	    case $file_size > 716800:
			echo "More than 700k in size.<br/>";
			echo "Please resize your picture.<br/>";
			echo "Upload failed.<br/>";
			echo "Size: " . round($file_size / 1024) . " KB";
			break;

	}

	function retainpath_changename($filepath, $s_username)
	{
		$path_parts = pathinfo($filepath);
		
		// Traps no picture upload and.or update
		if (isset($path_parts['extension'])) {
		// Format: www/profiles/$s_username/img/$s_username.ext
		$retainpath_changename = $path_parts['dirname'] . "/" . $s_username . "." . $path_parts['extension'];
		return $retainpath_changename;
		}
	}

	function remove_existing_picture($s_username)
	{
		// File extensions to match.
		$extensions[] = ".png";
		$extensions[] = ".jpg";
		$extensions[] = ".gif";
	
    	// For each file extension in our array of file extensions.
		foreach($extensions as $ext) {
		// Match session username against all 3 of our extensions.
		$profpic = $s_username . $ext;
		// Build path to each possible picture file type.
		$possible_pic = '../profiles/' . $s_username . '/img/' . $profpic;
		// if a file is found, delete it.
		if(file_exists($possible_pic))	{
		unlink($possible_pic);
		}
	
		}
	
	}
	


?>