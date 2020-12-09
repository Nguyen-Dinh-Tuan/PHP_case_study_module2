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
            <td><?php echo $value->getIdClass();?></td>
            <td><?php echo $value->getName();?></td>
            <td><?php echo $value->getGender();?></td>
            <td><?php echo $value->getDate();?></td>
            <td><?php echo $value->getAddress();?></td>
        </tr>
    <?php endforeach; ?>

</table>
