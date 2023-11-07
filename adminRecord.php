<?php

$conn = mysqli_connect("localhost","root","","website");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from reserve";
$result = mysqli_query($conn,$query);

?>
<html>
    <head>
        <title>Lherwin Party</title>
        <link href="./style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="header">
            <a href="index.html">
                <div class="logo"></div>
            </a>
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="adminRecord.php">Records</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </div>
        <br><br><h1 style="font-size: 25px; text-align: center;">Record's of Reserve</h1><br><br>
        <div style="display: flex; justify-content: center;">
            <div>
                <table style="height: auto; width: 1000px; border-collapse: collapse; border: 1px solid black;">
                    <tr style="background: lightblue;">
                        <th style="color: black; border-right: 1px solid aliceblue;">BirthdayCelebrant</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Package</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Price</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Year</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Month</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Day</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Time</th>
                    </tr>

                    <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                         ?>
                        <td style="background: aliceblue; border-right: 1px solid gray; border-bottom: 1px solid gray;"><?php echo $row['BirthdayCelebrant']; ?></td>
                        <td style="background: aliceblue; border-right: 1px solid gray; border-bottom: 1px solid gray;"><?php echo $row['Package']; ?></td>
                        <td style="background: aliceblue; border-right: 1px solid gray; border-bottom: 1px solid gray;"><?php echo $row['Price']; ?></td>
                        <td style="background: aliceblue; border-right: 1px solid gray; border-bottom: 1px solid gray;"><?php echo $row['Year']; ?></td>
                        <td style="background: aliceblue; border-right: 1px solid gray; border-bottom: 1px solid gray;"><?php echo $row['Month']; ?></td>
                        <td style="background: aliceblue; border-right: 1px solid gray; border-bottom: 1px solid gray;"><?php echo $row['Day']; ?></td>
                        <td style="background: aliceblue; border-right: 1px solid gray; border-bottom: 1px solid gray;"><?php echo $row['Time']; ?></td>
                    </tr>
                    <?php
                        }

                        ?>
                </table>
            </div>
        </div>
    </body>
</html>