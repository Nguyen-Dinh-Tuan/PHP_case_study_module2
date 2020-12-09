<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url("https://luanvan24.com/wp-content/uploads/2020/08/hinh-anh-quan-tri-nguon-nhan-luc-3-1.jpg");

    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">StudentManager</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
<!--                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span>-->
            <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">Home</a></li>

            </li>
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link" href="index.php?page=scorelist">Bang Diem</a>-->
            <!--            </li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

</body>
</html>
<h2 style="text-align: center;color: black; background: blanchedalmond">Danh Sách Học Sinh</h2>
<a href="index.php?page=add-student" class="btn btn-primary btn-xs pull-right">Thêm học sinh</a>

<table class="table" style="background-color: whitesmoke; color: black">
    <thead class="thead-dark">
    <tr>
        <td scope="col">STT</td>
        <td scope="col">Mã Lớp</td>
        <!--            <td>Id</td>-->
        <td scope="col">Tên Học Sinh</td>
        <td scope="col">Giới tính</td>
        <td scope="col">Ngày Sinh</td>
        <td scope="col">Địa Chỉ</td>
        <td scope="col">Action</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($students as $key=>$value): ?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $value->getIdClass();?></td>
            <!--                <td>--><?php //echo $value->getId();?><!--</td>-->
            <td><?php echo $value->getName();?></a></td>
            <td><?php echo $value->getGender();?></td>
            <td><?php echo $value->getDate();?></td>
            <td><?php echo $value->getAddress();?></td>
            <td><a class="btn btn-success" href="index.php?page=list-point">Xem điểm</a></td>
            <td><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không?')" href="index.php?page=delete-student&id=<?php echo $value->getId();?>">Delete</a></td>
            <td><a class="btn btn-success" href="index.php?page=edit&id=<?php echo $value->getId(); ?>">Edit</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
<footer align="center" class="container" style="background-color: black;color: white" >
    <p>© Student Manager 2020-2021</p>
</footer>