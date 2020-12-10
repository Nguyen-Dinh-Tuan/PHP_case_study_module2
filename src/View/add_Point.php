<?php

//include_once "DBConnect.php";
$db = new \QLD\Model\DBConnect();
$conn = $db->connect();
$sql = "SELECT * FROM `Students`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resul = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<body>
<h3 style="text-align: center;color: white">Nhập Điểm Học Sinh</h3>
<table align="center" id="tb" class="table" style="width: 400px;align-items: center">
    <form   method="post">
        <tr>
            <td>
                <label style="color: white" >Mã HS</label>

                <select class="form-control" name="studentCode" >
                    <?php foreach ($resul as $key => $value):?>
                        <option><?php echo $value["id_student"];?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td>
                <label style="color: white" >Môn Toán</label>

                <input type="text" name="toan"  placeholder="Nhập điểm môn Toán">
            </td>
            <td>
                <label style="color: white">Môn Văn</label>

                <input type="text" name="van"  placeholder="Nhập điểm môn Văn">
            </td>
            <td>
                <label style="color: white">Môn Anh</label>

                <input type="text"  name="anh"  placeholder="Nhập điểm môn Anh">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-primary">Submit</button>

            </td>
        </tr>

    </form>

</table>
<style>
    body{
        background-image: url("https://anhdep123.com/wp-content/uploads/2020/05/hinh-nen-4k-cay-cau-dep-1024x683.jpg");
    }
</style>

</body>
<!--<footer align="center" class="container" style="background-color: black;color: white" >-->
<!--    <p>© Student Manager 2020-2021</p>-->
<!--</footer>-->
