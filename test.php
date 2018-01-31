<?php
		$data = array(
			'userID' => "qweqwr"
		);

			
		$url = '13.250.89.6';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		if(curl_errno($ch)){
			echo curl_error($ch);
				
		}else{
			echo "init succeeds";
				
		}
			
		// Send the return value of curl connection to the user by messaging	
		
			
		$postString = http_build_query($data);
			

		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			
		// Get the response
		$res = curl_exec($ch);
		$info = curl_getinfo($ch,CURLINFO_HTTP_CODE);
		curl_close($ch);
		
		echo $res;