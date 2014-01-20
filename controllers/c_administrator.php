<!--
	This is the page for the adminstrator to upload the files and to control database.
	Never touch without authorization.
-->
<?php
class administrator_controller extends base_controller{
	public function __construct(){
		parent::__construct();

		// This is for Authorization.
		//////////////////////////////////
		/*
		if ((!isset($_SERVER['PHP_AUTH_USER'])) || (!isset($_SERVER['PHP_AUTH_PW']))) {
		    header('WWW-Authenticate: Basic realm="Secured Area"');
		    header('HTTP/1.0 401 Unauthorized');
		    echo 'Authorization Required.';
		    exit;
		} else if ((isset($_SERVER['PHP_AUTH_USER'])) && (isset($_SERVER['PHP_AUTH_PW']))){
		    if (($_SERVER['PHP_AUTH_USER'] != "aa") || ($_SERVER['PHP_AUTH_PW'] != "aa")) {
		       header('WWW-Authenticate: Basic realm="Secured Area"');
		       header('HTTP/1.0 401 Unauthorized');
		       echo 'Authorization Required.';
		       exit;
		    } else if (($_SERVER['PHP_AUTH_USER'] == "aa") || ($_SERVER['PHP_AUTH_PW'] == "aa")) {
		       //echo "<h1>Welcome Friends!</h1>";
		    }
		}
		*/
		//////////////////////////////////		
	}

	// This filters in the categories for the database according to the kind of products
	// using damain name and web application name, not using the contents of web page.
	// This is not activated for security. This is for administrator, not for users.
	public function update_category(){
		
		$q="SELECT
		name,
        domain_address
        FROM sites;";

	    # Run the query
	    $posts = DB::instance(DB_NAME)->select_rows($q);

		$num = 0;
	    foreach($posts as $key){
	    	
	    	echo $num;

	    	//This is for the php running time. It seems to stop after some time(30 seconds).
	    	$num++;
	    	if($num<0){
	    		continue;
	    	}

	    	$name = $key['name'];
	    	$site = $key['domain_address'];
	    	/////////////////////////////
	    	// This is to set category02 to '기타'
	    	/*
				$sql = "update sites
						set category02 = '기타'
						where domain_address = '$site'";

				DB::instance(DB_NAME)->query($sql);	
			*/    	
	    	/////////////////////////////
	    	//This part uses domain name for filtering the category. 
	    	
			if(preg_match("/ginseng/", $site)){
				echo "matched";
				echo $site;
				echo "<br>";
				
				$sql = "update sites
						set category02 = '인삼제품'
						where domain_address = '$site'";

				DB::instance(DB_NAME)->query($sql);
			}
			else{
				echo "no<br>";
			}
			
			//This part uses web application name for filtering the category.
			
			if(preg_match("/관광/", $name)){
				echo "matched";
				echo $site;
				echo "<br>";
				
				$sql = "update sites
						set category02 = '체험마을'
						where domain_address = '$site'";

				DB::instance(DB_NAME)->query($sql);

			}
			else{
				echo "no<br>";
			}			
	    }
	}

	// This filters out the domain name which doesn't exist.
	// This is not activated for security. This is for administrator, not for users.
	public function checkdns(){
	    $q="SELECT 
        domain_address
        FROM sites;";

	    # Run the query
	    $posts = DB::instance(DB_NAME)->select_rows($q);

		$num = 0;
	    foreach($posts as $key){
	    	
	    	echo $num;
	    	$num++;
	    	if($num<593){
	    		continue;
	    	}
	    	$site = $key['domain_address'];

		   	$data = file_get_contents($site);
		    if($data){
		    	echo "yes<br>";
		    }
		    else{
		    	echo "no<br>";
		    	$qq="delete from sites
		    	    where domain_address = '$site'";
		    	DB::instance(DB_NAME)->query($qq);
		    }
	    }
	}
	/*
		upload csv file
	*/
	public function upload(){
		
		$this->template->title="upload";
		$this->template->content = View::instance("v_administrator_upload");
		echo $this->template;
	}

	/*
		processing the csv file into database.
	*/
	public function p_upload(){

		if(isset($_FILES['userfile'])){
			$file=$_FILES['userfile']['tmp_name'];

			$handle = fopen($file, "r");
			
			for($i=0;$i<810;$i++){
				$data = fgetcsv($handle);
				$sql = "insert into sites set 
					name = '$data[0]',
					domain_address = '$data[1]',
					owner = '$data[2]',
					local = '$data[3]',
					local02 = '$data[4]',
					category01 = '$data[5]',
					category02 = '$data[6]'
					;";
				
				DB::instance(DB_NAME)->query($sql);

				echo $data[3];
				echo "<br>";
			}
		}
	}

	/*
		processing the database into csv file.
	*/
	public function db_to_csv(){
		echo "hello";
		$sql = "select * from sites";
		$result = DB::instance(DB_NAME)->query($sql);

		$file = "barosale.csv";
		$fp = fopen($file, "w");


		foreach($result as $re){
			fputcsv($fp, $re);
			//echo "<pre>";
			//print_r($re);
			//echo $re['name'];
			//echo "</pre>";
		}
	}


	/*
		This is for auto update the files.
	*/
	public function file_update(){

//////////////////////
		$array = scandir('c://wamp/www/barosale/views');
		echo "<pre>";
		print_r($array);
		echo "</pre>";

		foreach($array as $arr){
			//$this -> auto_update($arr);  //calls function for updating all the files in barosale.
			$this -> auto_update2($arr);  //calls function for updating small part of barosale.
		}
	}

	//This is for updating small part of barosale.
	function auto_update2($arr2){
		
		if($arr2=='..' || $arr2=='.git' || $arr2=='.'  ||$arr2 =='.htaccess'){
			echo "there--here<br>";
		}

		else{
			echo "<br><br>This is start: &&&&&&&&&& <br>";

			if(is_dir($arr2)){
				echo $arr2. " is directory<br>";

				$arr3 = scandir($arr2);

				foreach ($arr3 as $arr4) {
				//here you should call auto_update if it is directory.
				$this->auto_update($arr4);
				}
			}

			else{
				echo $arr2 ." is not directory<br>";
				$temp = file_get_contents('views/'.$arr2);
				//$path = realpath($arr2);

				//if(!$path){
				//	echo "empty***********<br>";
				//}	


				$handle = fopen('views/'.$arr2, 'w');
				fwrite($handle, $temp);
				fclose($handle);				
			}
		}
	}

	//This is for updating total files in barosale.
	function auto_update($arr2){
			
		if($arr2=='..' || $arr2=='.git' || $arr2=='.'  ||$arr2 =='.htaccess'){
			echo "there--here<br>";
		}

		else{
			echo "<br><br>This is start: &&&&&&&&&& <br>";

			$dir = dirname($arr2);

			if(is_dir($arr2)){
				echo $arr2. " is directory<br>";

				$arr3 = scandir($arr2);

				foreach ($arr3 as $arr4) {
				//here you should call auto_update if it is directory.
				$this->auto_update($arr4);
				}
			}

			else{

				echo $arr2 ." is not directory<br>";
				//$temp = file_get_contents($arr2);
				$path = realpath($arr2);

				if(!$path){
					echo "empty***********<br>";

				}	


				echo $path;
				echo "<br>";

				echo "<br>";

				//$handle = fopen($path, 'r');
				//fwrite($handle, $temp);
				//fclose($handle);				
			}
		}
	}


}
?>