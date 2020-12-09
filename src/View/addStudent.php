<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Thêm Học Sinh</title>
</head>
<body style="background-color:aliceblue">
<div class="edu_nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
            <a class="navbar-brand" href="index.php"><img src="style/images/unnamed.jpg" style="width: 100px;
" alt="logo" ></a>
            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav nav lavalamp ml-auto menu">

                    <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">LIST STUDENT</a></li>
                    <li class="nav-item"><a href="index.php?page=list-point" class="nav-link">LIST POINT</a>
                    </li>


                </ul>
            </div>
            <!--            <div class="mr-auto search_area ">-->
            <!--                <ul class="navbar-nav mx-auto">-->
            <!--                    <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>-->
            <!--                        <div id="search">-->
            <!--                            <button type="button" class="close">×</button>-->
            <!--                            <form>-->
            <!--                                <input type="search" value="" placeholder="Search here...."  required/>-->
            <!--                            </form>-->
            <!--                        </div>-->
            <!--                    </li>-->
            <!--                </ul>-->
            <!--            </div>-->
        </nav><!-- END NAVBAR -->
    </div>
</div>

<?php
$db = new \QLD\Model\DBConnect();
$conn = $db->connect();
$sql = "SELECT * FROM `Class`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resul = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<form method="post">
    <table align="center" style="width: 400px;align-items: center;background-color: white;border-radius: 10px;">
        <tr>
            <td>
                <h5 style="text-align: center; background-color: black; color: white"><b>Mã Lớp</b></h5>
                <select class="form-control" name="classCode">
                    <?php foreach ($resul as $key => $value): ?>
                        <option><?php echo $value["id_class"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <h5 style="text-align: center; background-color: black; color: white"><b>Tên Học Sinh</b></h5>
                <input type="text" class="form-control" name="name" placeholder="Enter name">
            </td>
        </tr>
        <tr>
            <td>
                <h5 style="text-align: center; background-color: black; color: white"><b>Giới tinh</b></h5>
                <input type="text" class="form-control" name="gender" placeholder="Enter gender">
            </td>
        </tr>
        <tr>
            <td>
                <h5 style="text-align: center; background-color: black; color: white"><b>Ngay Sinh</b></h5>
                <input type="date" class="form-control" name="date" placeholder="Enter date">
            </td>
        </tr>
        <tr>
            <td>
                <h5 style="text-align: center; background-color: black; color: white"><b>Địa Chỉ</b></h5>
                <input type="text" class="form-control" name="address" placeholder="Enter address">
            </td>
        </tr>

        <tr>
            <td>
                <button type="submit" class="btn btn-primary">Submit</button>
            </td>

        </tr>
    </table>
</form>
</body>
</html>
<footer align="center" class="container" style="background-color: black;color: white" >
    <p>© Student Manager 2020-2021</p>
</footer>