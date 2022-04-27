<?php
  $servername = "localhost";
  $username = "root";
  $password = "0804357084";
  $dbname = "devpool";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $pname = $_POST['pname'];
  $ques = $_POST['ques'];
  $jewe = $_POST['jewe'];



  if($ques == "1" and $jewe == "1"){
    $messasge = "บ้านกริฟฟินดอร์";
    $submessasge = "บ้านกริฟฟินดอร์แน่นอน";
  }elseif($ques == "2" and $jewe == "1"){
    $messasge = "บ้านกริฟฟินดอร์";
    $submessasge = "บ้านกริฟฟินดอร์ หรือจะ ฮัฟเฟิลพัฟ ดีน่า!!!!";
  }elseif($ques == "3" and $jewe == "1"){
    $messasge = "บ้านกริฟฟินดอร์";
    $submessasge = "บ้านกริฟฟินดอร์ หรือจะ เรเวนคลอ ดีน่า!!!!";
  }elseif($ques == "4" and $jewe == "1"){
    $messasge = "บ้านกริฟฟินดอร์";
    $submessasge = "บ้านกริฟฟินดอร์ หรือจะ สลิธิริน ดี!!!!";
  }

  if($ques == "1" and $jewe == "2"){
    $messasge = "บ้านฮัฟเฟิลพัฟ";
    $submessasge = "บ้านฮัฟเฟิลพัฟ หรือจะ กริฟฟินดอร์ ดีน่า!!!!";
  }elseif($ques == "2" and $jewe == "2"){
    $messasge = "บ้านฮัฟเฟิลพัฟ";
    $submessasge = "บ้านฮัฟเฟิลพัฟแน่นอน";
  }elseif($ques == "3" and $jewe == "2"){
    $messasge = "บ้านฮัฟเฟิลพัฟ";
    $submessasge = "บ้านฮัฟเฟิลพัฟ หรือจะ เรเวนคลอ ดีน่า!!!!";
  }elseif($ques == "4" and $jewe == "2"){
    $messasge = "บ้านฮัฟเฟิลพัฟ";
    $submessasge = "บ้านฮัฟเฟิลพัฟ หรือจะ สลิธิริน ดี!!!!";
  }

  if($ques == "1" and $jewe == "3"){
    $messasge = "บ้านเรเวนคลอ";
    $submessasge = "บ้านเรเวนคลอ หรือจะ กริฟฟินดอร์ ดีน่า!!!!";
  }elseif($ques == "2" and $jewe == "3"){
    $messasge = "บ้านเรเวนคลอ";
    $submessasge = "บ้านเรเวนคลอ หรือจะ ฮัฟเฟิลพัฟ ดีน่า!!!!";
  }elseif($ques == "3" and $jewe == "3"){
    $messasge = "บ้านเรเวนคลอ";
    $submessasge = "บ้านเรเวนคลอแน่นอน";
  }elseif($ques == "4" and $jewe == "3"){
    $messasge = "บ้านเรเวนคลอ";
    $submessasge = "บ้านเรเวนคลอ หรือจะ สลิธิริน ดี!!!!";
  }

  if($ques == "1" and $jewe == "4"){
    $messasge = "บ้านสลิธิริน";
    $submessasge = "บ้านสลิธิริน หรือจะ กริฟฟินดอร์ ดีน่า!!!!";
  }elseif($ques == "2" and $jewe == "4"){
    $messasge = "บ้านสลิธิริน";
    $submessasge = "บ้านสลิธิริน หรือจะ ฮัฟเฟิลพัฟ ดีน่า!!!!";
  }elseif($ques == "3" and $jewe == "4"){
    $messasge = "บ้านสลิธิริน";
    $submessasge = "บ้านสลิธิริน หรือจะ เรเวนคลอ ดีน่า!!!!";
  }elseif($ques == "4" and $jewe == "4"){
    $messasge = "บ้านสลิธิริน";
    $submessasge = "บ้านสลิธิรินแน่นอน";
  }

	//table1
	$sql = "INSERT INTO pmember (pname,house) VALUES ('$pname','$messasge')";
	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
  echo "<meta http-equiv='refresh' content='1;URL=app_showdata.php'>";
  $conn->close()
?>
