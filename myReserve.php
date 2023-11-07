<?php
session_start();
$conn = mysqli_connect("localhost","root","","website");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$email = $_SESSION['email'];
$query = "select * from reserve where Email = '$email'";
$result = mysqli_query($conn,$query);

?>

<html>
    <head>
        <title>Lherwin Party</title>
        <link href="./style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <div class="header">
            <a href="index.html">
                <div class="logo"></div>
            </a>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="myReserve.php">My Reserve</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <br><br><h1 style="font-size: 25px; text-align: center;">My Reserve's</h1><br><br>
        <div style="display: flex; justify-content: center;">
            <div>
                <table style="height: auto; width: 900px; border-collapse: collapse; ">
                    <tr style="background: lightblue;">
                        <th style="color: black; border-right: 1px solid aliceblue;">BirthdayCelebrant</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Package</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Price</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Year</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Month</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Day</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Time</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Cancellation</th>
                    </tr>

                    <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                         ?>
                        <td style="background: aliceblue; "><?php echo $row['BirthdayCelebrant']; ?></td>
                        <td style="background: aliceblue; "><?php echo $row['Package']; ?></td>
                        <td style="background: aliceblue; "><?php echo $row['Price']; ?></td>
                        <td style="background: aliceblue; "><?php echo $row['Year']; ?></td>
                        <td style="background: aliceblue; "><?php echo $row['Month']; ?></td>
                        <td style="background: aliceblue; "><?php echo $row['Day']; ?></td>
                        <td style="background: aliceblue; "><?php echo $row['Time']; ?></td>
                        <td style="background: aliceblue; "><a href="cancel.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger">Cancel</button></a></td>
                    </tr>
                    <?php
                        }

                        ?>
                </table>
            </div>
        </div>
    </body>
</html>