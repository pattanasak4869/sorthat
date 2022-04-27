<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="img\img_2134.png" type="image/png">
    <title>ทำนายหมวกคัดสรรบ้าน Hogwarts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@600&display=swap" rel="stylesheet">
    <style type = "text/css">
      .FA001{
        font-family: 'Prompt', sans-serif;
        line-height: 24pt
      }
      body{
        background-image: url('img/IUdnLRa-hogwarts-castle-wallpaper.jpg');
      }
    </style>
  </head>
  <body>
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8">
        <br>
        <br>
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <center><h4 class="FA001"><br>ยอดจำนวนนักเรียนในแต่ละบ้าน<br>Sorthat House Hogwarts</h4></center>
            <br>
            <div class="row">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-6">
                <?
              	$objConnect = mysql_connect("localhost","root","0804357084") or die("Error Connect to Database");
              	$objDB = mysql_select_db("devpool");
              	// Search By Name or Email
              	$strSQL1 = "SELECT * FROM pmember WHERE house IN ('บ้านสลิธิริน')";
              	$objQuery1 = mysql_query($strSQL1) or die ("Error Query [".$strSQL1."]");
                $count1 = mysql_num_rows($objQuery1);
    	          ?>
                <?
              	$objConnect = mysql_connect("localhost","root","0804357084") or die("Error Connect to Database");
              	$objDB = mysql_select_db("devpool");
              	// Search By Name or Email
              	$strSQL2 = "SELECT * FROM pmember WHERE house IN ('บ้านฮัฟเฟิลพัฟ')";
              	$objQuery2 = mysql_query($strSQL2) or die ("Error Query [".$strSQL2."]");
                $count2 = mysql_num_rows($objQuery2);
    	          ?>
                <?
              	$objConnect = mysql_connect("localhost","root","0804357084") or die("Error Connect to Database");
              	$objDB = mysql_select_db("devpool");
              	// Search By Name or Email
              	$strSQL3 = "SELECT * FROM pmember WHERE house IN ('บ้านเรเวนคลอ')";
              	$objQuery3 = mysql_query($strSQL3) or die ("Error Query [".$strSQL3."]");
                $count3 = mysql_num_rows($objQuery3);
    	          ?>
                <?
              	$objConnect = mysql_connect("localhost","root","0804357084") or die("Error Connect to Database");
              	$objDB = mysql_select_db("devpool");
              	// Search By Name or Email
              	$strSQL4 = "SELECT * FROM pmember WHERE house IN ('บ้านกริฟฟินดอร์')";
              	$objQuery4 = mysql_query($strSQL4) or die ("Error Query [".$strSQL4."]");
                $count4 = mysql_num_rows($objQuery4);
    	          ?>
                <table class="table table-bordered text-center" align="center">
                  <tbody>
                    <tr>
                      <td class="FA001"><img src="img\บ้านสลิธิริน.gif" width="50px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;บ้านสลิธิริน</td>
                      <td class="FA001"><?php echo $count1 ?> คน</td>
                    </tr>
                    <tr>
                      <td class="FA001"><img src="img\บ้านฮัฟเฟิลพัฟ.gif" width="50px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;บ้านฮัฟเฟิลพัฟ</td>
                      <td class="FA001"><?php echo $count2 ?> คน</td>
                    </tr>
                    <tr>
                      <td class="FA001"><img src="img\บ้านเรเวนคลอ.gif" width="50px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;บ้านเรเวนคลอ</td>
                      <td class="FA001"><?php echo $count3 ?> คน</td>
                    </tr>
                    <tr>
                      <td class="FA001"><img src="img\บ้านกริฟฟินดอร์.gif" width="50px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;บ้านกริฟฟินดอร์</td>
                      <td class="FA001"><?php echo $count4 ?> คน</td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <a href="app_showdata.php" class="btn btn-outline-danger btn-block" role="button">กลับหน้าตรวจสอบ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
      </div>
    </div>
  </body>
</html>
