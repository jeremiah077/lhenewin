<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $id = $_GET["id"];
        if ($id == 'A')
        {
            $price = "1,800.00";
        }

        else if ($id == 'B')
        {
            $price = "2,500.00";
        }

        else if ($id == 'C')
        {
            $price = "2,500.00";
        }

        else if ($id == 'D')
        {
            $price = "2,800.00";
        }
        
        else if ($id == 'E')
        {
            $price = "3,000.00";
        }

        else if ($id == 'F')
        {
            $price = "3,200.00";
        }

        else if ($id == 'G')
        {
            $price = "3,500.00";
        }

        else if ($id == 'H')
        {
            $price = "3,800.00";
        }

        else if ($id == 'I')
        {
            $price = "4,000.00";
        }

        else if ($id == 'J')
        {
            $price = "4,200.00";
        }

        else if ($id == 'K')
        {
            $price = "4,500.00";
        }

        else if ($id == 'L')
        {
            $price = "4,800.00";
        }

        else if ($id == 'M')
        {
            $price = "5,000.00";
        }

        else if ($id == 'N')
        {
            $price = "5,500.00";
        }

        else if ($id == 'O')
        {
            $price = "5,800.00";
        }

        else if ($id == 'P')
        {
            $price = "6,000.00";
        }

        else if ($id == 'Q')
        {
            $price = "6,500.00";
        }
    }

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $place = $_POST['place'];
    $package = $_POST['package'];
    $price = $_POST['price'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $time = $_POST['time'];
    $request = $_POST['request'];
    $pay = $_POST['pay'];
    $ref = $_POST['ref'];

    // Create connection
    $conn = mysqli_connect("localhost","root","","website");
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO reserve (BirthdayCelebrant, Email, Gender, Place, Package, Price, Time, Request, Payment, Reference, Year, Month, Day)
    VALUES ('$name', '$email', '$gender', '$place', '$package', '$price', '$time', '$request', '$pay', '$ref', '$year', '$month', '$day')";

    if (mysqli_query($conn, $sql)) {
    header("Location:main.php");
    exit;
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

if (isset($_POST['back']))
{
    header("Location:services.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="font-family: 'Impact';text-align:center;">Make Reservation</h1>
        <p style="margin-top: 20px;text-align:center;">Kindly fill up the reservation form.</p><br>
        <div style="display: flex; justify-content: center;">
            <div style="border: 1px solid black; border-radius: 10px; padding: 30px 30px; background: aliceblue; box-shadow: 5px 10px 5px black;">
                <form action="" method="POST">
                    <label style="font-size: 17px;">Birthday Celebrant:</label>
                    <input type="text" name="name" id="name" style="border: 2px solid black; height: 20px; width: 300px; border-radius: 5px;"><br><br>
                    <label style="font-size: 17px;">Email:</label>
                    <input type="text" name="email" id="email" value="<?php echo $_SESSION['email']; ?>" style="border: 2px solid black; height: 20px; width: 300px; border-radius: 5px; margin-left: 97px;"><br><br>
                    <label style="font-size: 17px;">Gender:</label>
                    <select name="gender" id="gender" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 87px;">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select><br><br>
                    <label style="font-size: 17px;">Place of venue:</label>
                    <input type="text" id="venue" name="place" style="border: 2px solid black; height: 20px; width: 300px; border-radius: 5px; margin-left: 30px;"><br><br>
                    <label style="font-size: 17px;">Package:</label>
                    <input type="text" name="package" id="package" value="<?php echo "".$id; ?>" style="border: 2px solid black; height: 20px; width: 30px; border-radius: 5px; margin-left: 75px;"><br><br>
                    <label style="font-size: 17px;">Price:</label>
                    <input type="text" name="price" id="package" value="<?php echo "".$price; ?>" style="border: 2px solid black; height: 20px; width: 70px; border-radius: 5px; margin-left: 101px;"><br><br>
                    <label style="font-size: 17px;">Day <span style="color: red;">*</span></label>
                    <select name="day" id="day" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 87px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select><br><br>
                    <label style="font-size: 17px;">Month <span style="color: red;">*</span></label>
                    <select name="month" id="month" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 87px;">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select><br><br>
                    <label style="font-size: 17px;">Year <span style="color: red;">*</span></label>
                    <select name="year" id="year" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 87px;">
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                        <option value="2036">2036</option>
                        <option value="2037">2037</option>
                        <option value="2038">2038</option>
                        <option value="2039">2039</option>
                        <option value="2040">2040</option>
                        <option value="2041">2041</option>
                        <option value="2042">2042</option>
                        <option value="2043">2043</option>
                        <option value="2044">2044</option>
                        <option value="2045">2045</option>
                        <option value="2046">2046</option>
                        <option value="2047">2047</option>
                        <option value="2048">2048</option>
                        <option value="2049">2049</option>
                        <option value="2050">2050</option>
                    </select><br><br>
                    <label for="Time" class="label9">Time of the party:</label>
                    <input type="time" id="time" name="time" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 17px;"><br><br>
                    <label style="font-size: 17px;">Special Request <span style="color: red;">*</span></label>
                    <input type="text" name="request" id="request" style="border: 2px solid black; height: 20px; width: 300px; border-radius: 5px; margin-left: 10px;"><br><br>
                    <label style="font-size: 17px;">Payment Method <span style="color: red;">*</span></label>
                    <select name="pay" id="pay" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 87px;">
                        <option value="Walk in">Walk in</option>
                        <option value="Gcash">Gcash</option>
                    </select><br><br>
                    <label style="font-size: 17px;">Gcash Reference Number: </label>
                    <input type="text" name="ref" id="request" placeholder="If gcash has been choose GCASH: 09837217823" style="border: 2px solid black; height: 20px; width: 300px; border-radius: 5px; margin-left: 10px;"><br><br>
                    <input type="submit" value="Reserve" name="submit" class="submit">
                    <input type="submit" value="Back to Services" name="back" class="submit">
                </form>
            </div>
        </div>
</body>
</html>