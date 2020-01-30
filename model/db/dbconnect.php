<?php
	require_once(dirname(__FILE__) . '/../../model/config.php');

	Class DBconnect{

		function DatabaseConnect(){
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
			if ($mysqli->connect_error) {
  			error_log($mysqli->connect_error);
  			exit;
			}
			return $mysqli;
		}

		function GetForm($mysqli){
			$dbSQL			=	'';
			$dbSQL			= 'SELECT * ';
			$dbSQL 	 	 .= '	FROM ' . DTB_FORM;

			if ($retData = $mysqli->query($dbSQL)) {
    		// 連想配列を取得
				$i = 0;
    		while ($row = $retData->fetch_assoc()) {
					$sqlData[$i] = $row;
					$i++;
    		}
    		// 結果セットを閉じる
    		$retData->close();
			}

			return $sqlData;
		}

		function SignUp($mysqli, $arrGetData){
			$member_name1 	= $mysqli->real_escape_string($arrGetData['postData']['name1']);
			$member_name2		= $mysqli->real_escape_string($arrGetData['postData']['name2']);
			$birth_year 		= $mysqli->real_escape_string($arrGetData['postData']['birth_year']);
			$birth_month 		= $mysqli->real_escape_string($arrGetData['postData']['birth_month']);
			$birth_day	 		= $mysqli->real_escape_string($arrGetData['postData']['birth_day']);
			$mail_address		= $mysqli->real_escape_string($arrGetData['postData']['mail']);
			$w_m						= $mysqli->real_escape_string($arrGetData['postData']['w_m']);
			$password				= $mysqli->real_escape_string($arrGetData['postData']['password']);
			$password = password_hash($password, PASSWORD_DEFAULT);

			// 会員情報をデータベースへライトする
			$query 	= ' INSERT INTO ' . DTB_MEMBER_INFO . '( ';
			$query .= '		member_name1, ';
			$query .= '		member_name2, ';
			$query .= '		birth_year, ';
			$query .= '		birth_month, ';
			$query .= '		birth_day, ';
			$query .= '		mail_address, ';
			$query .= '		password, ';
			$query .= '		w_m ) ';
			$query .= '			VALUES(		  "' . $member_name1 . '", ';
			$query .= 								 '"' . $member_name2 . '", ';
			$query .= 								 '"' . $birth_year	 . '", ';
			$query .= 								 '"' . $birth_month  . '", ';
			$query .= 								 '"' . $birth_day    . '", ';
			$query .= 								 '"' . $mail_address . '", ';
			$query .= 								 '"' . $password 		 . '", ';
			$query .= 								 '"' . $w_m 		     . '"';
			$query .= ')';

			echo $query;

			$result		= $mysqli->query($query);

			return $result;
		}

	}

?>
