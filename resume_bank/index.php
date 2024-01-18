<?php

include 'inc/header.php'

?>

<div id="database">
    <h1>
        My First Php-Database
    </h1>
    <hr>
    <table id=table border="1" cellpadding="20" cellspacing="0">
        <thead>
            <tr>
                <th>Si</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>password</th>
            </tr>
        </thead>
    <?php


        $users = "SELECT * FROM `users`";

        $users_conn = mysqli_query($conn , $users);

        while ( $rows = mysqli_fetch_assoc($users_conn)) {

            $si =  $rows["id"] . "<br>";
            $name = $rows["name"] . "<br>";
            $email = $rows["email"] . "<br>";
            $phone = $rows["phone"] . "<br>";
            $pass = $rows["password"] . "<br>";

    ?>
        <tr>
            <td><?php echo $si ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $phone ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $pass ?></td>
        </tr>

    <?php

        }

    ?>

    </table>
</div>
<?php


include 'inc/footer.php'


?>