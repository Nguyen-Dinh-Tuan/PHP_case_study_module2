<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    body{
        background-image: url("https://vntime.org/wp-content/uploads/2020/04/H%C3%ACnh-n%E1%BB%81n-m%C3%A1y-t%C3%ADnh-%C4%91%E1%BA%B9p-nh%E1%BA%A5t-ch%E1%BB%A7-%C4%91%E1%BB%81-Hallow-Knight-1024x576.jpeg");
    }
</style>
<body>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label style="color: aliceblue" for="formGroupExampleInput">Ma Lop</label>
        <input type="text" name="id_class" value="<?php echo $student['id_class']?>" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="form-group">
        <label style="color: aliceblue" for="formGroupExampleInput2">Ten Hoc Sinh</label>
        <input type="text" name="NameStudent" value="<?php echo $student['NameStudent']?>" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
    </div>
    <div class="form-group">
        <label style="color: honeydew" for="formGroupExampleInput">Gioi Tinh</label>
        <input type="text" name="Gender" value="<?php echo $student['Gender']?>" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="form-group">
        <label style="color: honeydew" for="formGroupExampleInput">Ngay Sinh</label>
        <input type="text" name="Date" value="<?php echo $student['Date']?>" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
    <div class="form-group">
        <label style="color: honeydew" for="formGroupExampleInput">Dia Chi</label>
        <input type="text" name="Address" value="<?php echo $student['Address']?>" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
    </div>
<!--    <div class="form-group">-->
<!--        <label style="color: aliceblue" for="formGroupExampleInput">Image</label>-->
<!--        <input type="file" name="img" value="--><?php //echo $student['img']?><!--">-->
<!--    </div>-->
    <button type="submit">Enter</button>
<!--    </div>-->
</form>
</body>
</html>