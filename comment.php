<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <link rel="stylesheet" href="comment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="scm-wrap">
  <h3>
    Bình luận về sản phẩm
  </h3>
  <div class="row">
    <div class="col-xs-8">
      <div class="scm-filter clearfix">
        <div class="pull-left">
          Sắp xếp bình luận: <span class="scm-newest">Mới nhất</span> | <span class="scm-likest">Thích nhất</span>
        </div>
        <div class="pull-right">
          <input type="text" class="form-control" placeholder="Tìm kiếm bình luận" />
        </div>
      </div>
      <!-- Khung binh luan -->
      <form action="addinfor.php" method="post">
      <div class="row">
        <div class="col-xs-2">
          <div class="scm-wrap-ava">
            Nhập tên :
          </div>
        </div>
        
        <div class="col-xs-10">
          <div class="scm-textarea-box1">
            <input name="name"class="form-control" rows="6" placeholder="Nhập tên người bình luận "></input>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-2">
          <div class="scm-wrap-ava">
            <i class="glyphicon glyphicon-user"></i>
          </div>
        </div>
        
        <div class="col-xs-10">
          <div class="scm-textarea-box">
            <textarea name="comment" class="form-control" rows="6" placeholder="Viết bình luận của bạn, SHIFT + ENTER để xuống dòng, ENTER để gửi"></textarea>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-2">
          <div class="scm-wrap-ava1">
          <input type="submit" name="add" value="Gửi" style="    border: 1px solid #d5d5d5;
    margin-top: 10px;
    font-size: 20px;
    border-radius: 4px;
    text-align: center;
    padding: 10px 0 10px 0;
    margin-left: 10px;
    margin-right: -15px;
    width: 120px;
    background-color: #ffa500;">
          </div>
        </div>
        </div>
      </form>

      <?php
                   require_once('connect.php');
                   $sql = "SELECT * FROM comments_user";
                   $result = mysqli_query($conn, $sql);
                   
                   while($row = mysqli_fetch_assoc($result)){
                    ?>
      <!-- Nguoi binh luan -->
      <div class="row scm-comment">
        <div class="col-xs-1">
          <div class="scm-wrap-ava">
            <i class="glyphicon glyphicon-user"></i>
          </div>
        </div>
        <div class="col-xs-11">
          <div class="scm-comment-head">
          <?php echo $row['username']?>
          </div>
          <div class="scm-comment-body">
          <?php echo $row['title']?>
          </div>
          <div class="scm-comment-addition clearfix">
            <div class="pull-left scm-comment-time">
              4 giờ trước
            </div>
            <div class="pull-right scm-comment-action">
              <a href>Thích</a>
              <a href>Trả lời</a>
            </div>
          </div>
        </div>
      </div>
    
    <?php }?>
    </div>
    <div class="col-xs-4">
      <div class="scm-rating-box">
        <h3>
          Chi tiết đánh giá
        </h3>
        <div class="clearfix">
          <div class="scm-rating pull-left">
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star"></i>
            <i class="glyphicon glyphicon-star-empty"></i>
          </div>
          <div class="scm-comment-count">
            105 đánh giá
          </div>
        </div>
        <div class="row">
          <div class="col-xs-2">
            5 sao
          </div>
          <div class="col-xs-7">
            <div class="scm-process-bar">
              <div class="scm-process" style="width: 180px;"> </div>
            </div>
          </div>
          <div class="col-xs-3">
            60
          </div>
        </div>

        <div class="row">
          <div class="col-xs-2">
            4 sao
          </div>
          <div class="col-xs-7">
            <div class="scm-process-bar">
              <div class="scm-process" style="width: 80px;"> </div>
            </div>
          </div>
          <div class="col-xs-3">
            15
          </div>
        </div>

        <div class="row">
          <div class="col-xs-2">
            3 sao
          </div>
          <div class="col-xs-7">
            <div class="scm-process-bar">
              <div class="scm-process" style="width: 90px;"> </div>
            </div>
          </div>
          <div class="col-xs-3">
            18
          </div>
        </div>

        <div class="row">
          <div class="col-xs-2">
            2 sao
          </div>
          <div class="col-xs-7">
            <div class="scm-process-bar">
              <div class="scm-process" style="width: 40px;"> </div>
            </div>
          </div>
          <div class="col-xs-3">
            12
          </div>
        </div>

        <div class="row">
          <div class="col-xs-2">
            5 sao
          </div>
          <div class="col-xs-7">
            <div class="scm-process-bar">
              <div class="scm-process" style="width: 0px;"> </div>
            </div>
          </div>
          <div class="col-xs-3">
            0
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
</body>
</html>