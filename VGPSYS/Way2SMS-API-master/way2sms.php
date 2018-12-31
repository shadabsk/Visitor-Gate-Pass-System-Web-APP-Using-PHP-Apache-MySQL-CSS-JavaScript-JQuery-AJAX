<?php

	function send_sms($userID,$userPWD,$recerverNO,$message) {
		if (!function_exists('curl_init')) {
			echo "Error : Curl library not installed";
			return FALSE;
		}
		if (strlen($message) > 140) {
			$message = substr($message, 0, 140);
		}

		$cookie_file_path = "./cookie.txt";
		$temp_file = "./temporary.txt";
		//unlink($temp_file);
		$user_agent = "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36";

		// LOGIN TO WAY2SMS

		$url =  "http://site24.way2sms.com/content/Login1.action";
		$parameters = array("username"=>"$userID","password"=>"$userPWD","button"=>"Login");

		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, count($parameters));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
			curl_setopt($ch, CURLOPT_NOBODY, FALSE);
			$result = curl_exec ($ch);
		curl_close ($ch);

		// SAVE LOGOUT URL

		file_put_contents($temp_file,$result);
		$result = "";
		$logout_url = "";
		$file = fopen($temp_file,"r");
		$line = "";
		$cond = TRUE;
		while ($cond == TRUE) {
			$line = fgets($file);
			if ($line === FALSE) { // EOF
				$cond = FALSE;
			} else {
				$pos = strpos( $line, '            window.location = "');
				if ($pos === FALSE ) {
					$line = "";
				} else { // URL FOUND
					$cond = FALSE;
					$logout_url = substr($line,-25);
					$logout_url = substr($logout_url,0,21);
				}
			}
		}
		fclose($file);

		// SAVE SESSION ID

		$file = fopen($cookie_file_path,"r");
		$line = "";
		$cond = TRUE;
		while ($cond == TRUE) {
			$line = fgets($file);
			if ($line === FALSE) { // EOF
				$cond = FALSE;
			} else {
				$pos = strpos( $line, "JSESSIONID");
				if ($pos === FALSE ) {
					$line = "";
				} else { // SESSION ID FOUND
					$cond = FALSE;
					$id = substr($line,$pos+15);
				}
			}
		}
		fclose($file);

		if (!isset($id)) {
			echo "Session Failed";
			unlink($cookie_file_path);
			unlink($temp_file);
			return FALSE;
		}
		if ($logout_url == "") {
			echo "Login Failed";
			unlink($cookie_file_path);
			unlink($temp_file);
			return FALSE;
		}

		// SEND SMS

		$url = "http://site24.way2sms.com/smstoss.action?Token=" . $id; 
		$parameters = array("button"=>"Send SMS","mobile"=>"$recerverNO","message"=>"$message");

		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, count($parameters));
			curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
			curl_setopt($ch, CURLOPT_NOBODY, FALSE);
			$result = curl_exec ($ch);
		curl_close ($ch);

		file_put_contents($temp_file,$result);
		$result = "";
		$sms_status = "";
		$file = fopen($temp_file,"r");
		$line = "";
		$cond = TRUE;
		while ($cond == TRUE) {
			$line = fgets($file);
			if ($line === FALSE) { // EOF
				$cond = FALSE;
			} else {
				$pos = strpos( $line, '        <p class="mess"><i class="ssms consuki "><em class="ei"></em><strong><b>x</b></strong></i><span class="">');
				if ($pos === FALSE ) {
					$line = "";
				} else { // URL FOUND
					$cond = FALSE;
					$sms_status = substr($line,-53);
					$sms_status = substr($sms_status,0,40);
					if ($sms_status != "Message has been submitted successfully.") {
						echo "Failed to send SMS.";
						unlink($cookie_file_path);
						fclose($file);
						unlink($temp_file);
						return FALSE;
					}
				}
			}
		}
		fclose($file);

		$url = "site24.way2sms.com/" . $logout_url;

		$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file_path);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
			curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
			curl_setopt($ch, CURLOPT_NOBODY, FALSE);
			$result = curl_exec ($ch);
		curl_close ($ch);

		file_put_contents($temp_file,$result);
		$result = "";
		$logout_status = FALSE;
		$file = fopen($temp_file,"r");
		$line = "";
		$cond = TRUE;
		while ($cond == TRUE) {
			$line = fgets($file);
			if ($line === FALSE) { // EOF
				$cond = FALSE;
			} else {
				$pos = strpos( $line, '<div class="trap mess">');
				if ($pos === FALSE ) {
					$line = "";
				} else {
					$line = fgets($file);
					if ($line === FALSE) { // EOF
						$cond = FALSE;
					} else {
						$line = fgets($file);
						if ($line === FALSE) { // EOF
							$cond = FALSE;
						} else {
							$cond = FALSE;
							$logout_status_string = substr($line,24,39);
							if ($logout_status_string == "You have successfully <b>logged out</b>") {
								$logout_status = TRUE;
							}
						}
					}
				}
			}
		}
		fclose($file);

		// DELETE TEMP FILES

		unlink($cookie_file_path);
		unlink($temp_file);

		if ($logout_status) {
			echo "Success";
			return TRUE;
		} else {
			echo "Failure";
			return FALSE;
		}
	}
?>
<html>
<head><title>Way2SMS</title></head>
<body>
<?php
	send_sms("9892327169","shadab4114","7506455707","Dont send any more sms to me.");

// Note: The success and failure of the function is not yet captured in this code.
?>
</body>
</html>
