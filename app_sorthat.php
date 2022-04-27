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
                    <h4 class="FA001"><br>ทำนายหมวกคัดสรรบ้าน<br>Sorthat House Hogwarts</h4></center>
            <div class="row">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-6">
                <br>
                <form action="app_process.php" method="post">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="pname">ชื่อ - นามสกุล:</label>
                        <input type="pname" class="form-control" placeholder="กรุณากรอกชื่อ - นามสกุล" id="pname" name="pname">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="ques">คำถาม:</label>
                        <select name="ques" class="custom-select">
                          <option selected>บ่งบอกความเป็นตัวคุณ????</option>
                          <option value="1">มีความซื่อสัตย์ มีไหวพริบ ชอบความ้ทาทาย</option>
                          <option value="2">มีความมุ่งมั่น อดทน และมีความยุติธรรม</option>
                          <option value="3">เก่งกาจ ฉลาดเฉลียว</option>
                          <option value="4">หลักแหลม ฉับไว</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select name="jewe" class="custom-select">
                          <option selected>อัญมณีคุณชอบ????</option>
                          <option value="1">ทับทิม</option>
                          <option value="2">บุษราคัม</option>
                          <option value="3">ไพลิน</option>
                          <option value="4">มรกต</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                      <br>
                      <br>
                      <button type="submit" class="btn btn-outline-dark btn-block"><i class="fa fa-gavel" style="font-size:16px"></i>&nbsp;&nbsp;&nbsp;&nbsp;ทำนาย</button>
                    </div>
                    <div class="col-sm-4">
                      <a href="app_sorthat.php" class="btn btn-outline-danger btn-block" role="button">กลับหน้าแรก</a>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-sm-3">
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
