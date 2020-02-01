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
		function DatabaseClose($mysqli){
			mysqli_close($mysqli);
		}

		function GetForm(){
			$mysqli = $this->DatabaseConnect();
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
    		$this->DatabaseClose($mysqli);
			}

			return $sqlData;
		}

		function SignUp($arrGetData){
			$mysqli = $this->DatabaseConnect();
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

			$this->DatabaseClose($mysqli);

			echo $query;

			$result		= $mysqli->query($query);

			return $result;
		}

		function SignIn($arrGetData){
			$mysqli = $this->DatabaseConnect();
			$email				= $mysqli->real_escape_string($arrGetData['postData']['mail']);
			$password			= $mysqli->real_escape_string($arrGetData['postData']['password']);

			// 入力された情報がデータベース内に存在するかを確認
			$query	= 'SELECT * FROM ' . DTB_MEMBER_INFO;
			$query .= '	WHERE mail_address = ' . $email;
			$result = $mysqli->query($query);

			// 暗号されているパスワードの取り出し
			while($row = $result->fetch_assoc()){
				$db_hashed_pwd = $row['password'];
				$db_email			 = $row['mail_address'];
			}

			// データベースの切断
			$this->DatabaseClose($mysqli);

			if(password_verify($password, $db_hashed_pwd)){
				$_SESSION['user']	= $db_email;
				header("Location: index.php");
				exit();
			}else{
				$result_message = 'ログインに失敗しました';
			}

			return $result_message;

		}

	}

?>
