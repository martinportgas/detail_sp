<?php
	
	//$file = 'Sample/20171212.txt';
	//$searchfor = '2100084741';

	// the following line prevents the browser from parsing this as HTML.
	//header('Content-Type: text/plain');

	// get the file contents, assuming the file to be readable (and exist)
	//$contents = file_get_contents($file);
	
	// escape special characters in the query
	//$pattern = preg_quote($searchfor, '/');
	// finalise the regular expression, matching the whole line
	//$pattern = "/^.*$pattern.*\$/m";
	// search, and store all matching occurences in $matches
	//if(preg_match_all($pattern, $contents, $matches)){
	//   print_r($contents);
	//}
	//else{
	//   echo "No matches found";
	//}
	
	//Cek file
	$dir = "Sample"; 
	$folders = glob($dir . '/*', GLOB_ONLYDIR); 
	$files = array_filter(glob($dir . '/*'), 'is_file'); 

	echo 'Number of folders: ' . count($folders);
	echo '<br />'; 
	echo 'Number of files: ' . count($files);
	echo '<br />';

	$count = count($files);
	if($count > 0){
		$file_name = $files[0];
		$file_handle = fopen($file_name, "rb");
		$result = array();
		
		while (!feof($file_handle) ) {
			$line_of_text = fgets($file_handle);
			$parts = explode(';', $line_of_text);
			$result[]= array(
				'brand'=>$parts[0],
				'iccid'=>$parts[1],
				'mssisdn'=>$parts[2],
				'exp_date'=>$parts[3],
				'area'=>$parts[4],
				'hlr'=>$parts[5],
				'dealer_id'=>$parts[6],
				'so'=>$parts[7],
				'program'=>$parts[8],
				'dist_date'=>$parts[9]
			);
		}
		
		foreach($result as $item){
			if($item['so'] == '2100084741'){
				//echo $item['brand']."<br />";
				print_r($result);
				break;
			}else{
				echo "data not found.";
				break;
			}
		}
	}else{
		echo "no files found.";
	}
	?>