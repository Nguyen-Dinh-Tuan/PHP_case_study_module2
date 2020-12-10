<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<?php

?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th scope="col">id_class</th>
        <th scope="col">NameStudent</th>
        <th scope="col">Gender</th>
        <th scope="col">Date</th>
        <th scope="col">Address</th>
    </tr>
    </thead>

    <?php foreach ($students as $key => $value):?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $value['id_class'];?></td>
            <td><?php echo $value['NameStudent'];?></td>
            <td><?php echo $value['Gender'];?></td>
            <td><?php echo $value['Date'];?></td>
            <td><?php echo $value['Address'];?></td>
        </tr>
    <?php endforeach; ?>

</table>
