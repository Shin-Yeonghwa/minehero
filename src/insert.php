<?PHP
/*
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
*/
	$store = trim($_POST["store"]);
	if( strlen($store) == 0 ){
		message("스토어를 선택해주세요");
		exit();
	}

	if( strlen(trim($_POST["cellPhone"])) > 11 || strlen(trim($_POST["cellPhone"])) < 10 ) {
		message("전화번호 형식이 잘 못 되었습니다.\\n확인 후 다시 입력해주세요.");
		exit();
	}

	$telephone = trim($_POST["cellPhone"]);

	if(!preg_match("#(^0[0-9]{1,2})([1-9][0-9]{2,3})([0-9]{4})#", $telephone)) {
		message("전화번호 형식이 잘 못 되었습니다.\\n확인 후 다시 입력해주세요.");
		exit();
	}

	$referer = trim($_POST["referer"]);

	echo " store : " . $store;
	echo " telephone : " . $telephone;
	echo " referer : " . $referer;

	$databases_name = "heroesadv";
	$mysqli = new mysqli("localhost", "root", "tpqktmcks", $databases_name );

	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}

	$query = "select count(*) as tot from Preregistration where telephone=?";
	$stmt = $mysqli->prepare($query);
	$stmt->bind_param("s", $telephone );
	$stmt->execute();
	$stmt->bind_result($tot);
	$stmt->fetch();
	$stmt->close();
	if( $tot > 0 ){
		$mysqli->close();
		echo "<script language='javascript' type='text/javascript'>parent.errorMessage();</script>";
	    exit();
	}

	$stmt = $mysqli->prepare("Insert into Preregistration (store, telephone, referer) values(?,?,?)");
	$stmt->bind_param("sss", $store, $telephone, $referer );
	$stmt->execute();
	$stmt->close();
	$mysqli->close();

	echo "<script language='javascript' type='text/javascript'>parent.completeRegister();</script>";
	exit();

	function message($msg){
		echo "<script language='javascript' type='text/javascript'>alert('".$msg."');/* parent.location.reload(); */</script>";
	}
?>