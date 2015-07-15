<?php
	require_once("db.class.php");
	$dbObj = new ms_new_mysql("210.43.79.196", "root", "123456", "judge", "", "utf-8", "0");
	$LANG = Array(
		"GCC"	 	=> 1,
 		"G++"		=> 2,
		"Pascal"	=> 3,
		"Java" 		=> 4,
		"Python"	=> 5
	);

	$pid  		= $_POST['pid'];
	$language 	= $LANG[ $_POST['language'] ];
	$code 		= $_POST['code'];
	if(get_magic_quotes_gpc()){
		$code=stripslashes($code);

	}
	$code=mysql_real_escape_string($code);
	//echo '<pre>'.$code.'</pre>';
	$user_id 	= 007;
	$len 		= strlen($code);
	$ip			= $_SERVER['REMOTE_ADDR'];

	if ($len>65536){
		echo "Code too long!<br>";
		exit(0);
	}
	
	$tableName = "solution";
	$info = Array(
		"problem_id" 	=> $pid,
		"user_id" 	 	=> $user_id,
		"in_date" 		=> date("Y-m-d h:i:s"),
		"language" 		=> $language,
		"ip" 			=> $ip,
		"code_length" 	=> $len
	);
	$dbObj->insert($tableName, $info);

	$tableName = "source_code";
	$info = Array(
		"solution_id" => ($dbObj->insertId()),
		"source" => $code
	);
	$dbObj->insert($tableName, $info);

 	$statusURI = strstr($_SERVER['REQUEST_URI'],"submit", true)."status.php";
    header("Location: $statusURI");
?>
