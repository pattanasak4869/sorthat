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
            <center><img src="img\บ้านกริฟฟินดอร์.gif" width="100px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="img\บ้านเรเวนคลอ.gif" width="100px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="img\120121441.png" width="200px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="img\บ้านฮัฟเฟิลพัฟ.gif" width="100px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="img\บ้านสลิธิริน.gif" width="100px" height="auto"><br>
                    <h4 class="FA001"><br>ตรวจสอบผลการทำนายหมวกคัดสรรบ้าน<br>Sorthat House Hogwarts</h4></center>
            <div class="row">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-6">
                <br>
                <form name="frmSearch" method="get" action="<?=$_SERVER['SCRIPT_NAME'];?>">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="pname">ชื่อ - นามสกุล:</label>
                        <div class="row">
                        <div class="col-sm-8">
                          <input type="pname" class="form-control" placeholder="Enter email" id="txtKeyword" name="txtKeyword" value="<?=$_GET["txtKeyword"];?>">
                        </div>
                        <div class="col-sm-4">
                          <input type="submit" class="btn btn-block" style="background-color:#7f3f98; color:white;" value="ตรวจสอบข้อมูล">
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                    </div>
                  </div>
                </form>
                <br>
                <?
                if($_GET["txtKeyword"] != ""){
              	$objConnect = mysql_connect("localhost","root","0804357084") or die("Error Connect to Database");
              	$objDB = mysql_select_db("devpool");
              	// Search By Name or Email
              	$strSQL = "SELECT * FROM pmember WHERE (pname LIKE '%".$_GET["txtKeyword"]."%')";
              	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    	          ?>
                <table class="table table-bordered text-center" align="center">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>ชื่อ - นามสกุลนักเรียน</th>
                        <th>หอพักที่ได้รับการคัดเลือก</th>
                      </tr>
                    </thead>
                    <?
                    	while($objResult = mysql_fetch_array($objQuery))
                    	{
                  	?>
                    <tbody>
                      <tr>
                        <td><?php echo $objResult["id"];?></td>
                        <td><?php echo $objResult["pname"];?></td>
                        <td><?php echo $objResult["house"];?></td>
                      </tr>
                    </tbody>
                    <?
                  	}
                  	?>
                  	</table>
                  	<?
                  	mysql_close($objConnect);
                  }
                  ?>
                </div>
              </div>
              <div class="col-sm-3">
              </div>
              <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                  <a href="app_sorthat.php" class="btn btn-outline-danger btn-block" role="button">ย้อนกลับ</a>
                </div>
                <div class="col-sm-3">
                  <a href="app_counter.php" class="btn btn-outline-success btn-block" role="button">แสดงจำนวนนักเรียน</a>
                </div>
                <div class="col-sm-3">
                </div>
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
