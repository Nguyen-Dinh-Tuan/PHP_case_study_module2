<?php


?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title style="">Danh Sách Điểm</title>
    </head>
    <style>
        body {
            background-image: url("https://cdn.duytan.edu.vn/upload/images/hethongthongtinquanly-98.png");
        }
        img{
            width: 100px;
        }

    </style>
    <body style="background-color: lightskyblue">
    <div class="edu_nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-faded">
<!--                <a class="navbar-brand" href="index.php"><img src="style/images/logo1.jpg" alt="logo"></a>-->
                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav nav lavalamp ml-auto menu">

<!--                        <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">LIST STUDENT</a></li>-->
<!---->


                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <h2 style="text-align: center;color: black; background: blanchedalmond">Danh Sách Mon Hoc</h2>
    <table class="table" style="background-color: whitesmoke">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th scope="col">SubjectName</th>
        </tr>
        </thead>
        <?php foreach($subjects as $key=>$value):?>
            <tr>
                <td><?php echo ++$key;?></td>
<!--                <td>--><?php //echo $value['id_Subject'];?><!--</td>-->
                <td><?php echo $value['SubjectName'];?></td>

            </tr>
        <?php endforeach;?>
    </table>

    </html>
    <footer align="center" class="container" style="background-color: black;color: white" >
        <p>© Student Manager 2020-2021</p>
    </footer><?php
