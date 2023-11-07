<?php

$conn = mysqli_connect("localhost","root","","website");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$que = "SELECT COUNT(numberOfCancel) FROM tbl_cancel";
$res = mysqli_query($conn,$que);

    while($row = mysqli_fetch_assoc($res))
    {
        $can = $row['COUNT(numberOfCancel)'];
    }


$query = "SELECT COUNT(Year), COUNT(Month), COUNT(Day) FROM reserve";
$result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($result))
    {
        $year = $row['COUNT(Year)'];
        $month = $row['COUNT(Month)'];
        $day = $row['COUNT(Day)'];
    }

if (isset($_POST['subyear']))
{
    $year2 = $_POST['year'];
    if ($year2 == "All")
    {
        $query = "SELECT COUNT(Year) FROM reserve";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result))
        {
            $year = $row['COUNT(Year)'];
        }
    }

    else {
        $query = "SELECT COUNT(Year) FROM reserve WHERE Year = '$year2'";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result))
        {
            $year = $row['COUNT(Year)'];
        }
    }
}

else if (isset($_POST['submonth']))
{
    $month2 = $_POST['month'];
    if ($month2 == "All")
    {
        $query = "SELECT COUNT(Month) FROM reserve";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result))
        {
            $month = $row['COUNT(Month)'];
        }
    }

    else {
        $query = "SELECT COUNT(Month) FROM reserve WHERE Month = '$month2'";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result))
        {
            $month = $row['COUNT(Month)'];
        }
    }
}

else if (isset($_POST['subday']))
{
    $day2 = $_POST['day'];
    if ($day2 == "All")
    {
        $query = "SELECT COUNT(Day) FROM reserve";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result))
        {
            $month = $row['COUNT(Day)'];
        }
    }

    else {
        $query = "SELECT COUNT(Day) FROM reserve WHERE Day = '$day2'";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_assoc($result))
        {
            $day = $row['COUNT(Day)'];
        }
    }
}

else if (isset($_POST['busyear']))
{
    $year2 = $_POST['year'];
    if ($year2 == "All")
    {
        $query = "SELECT * FROM reserve";
        $result = mysqli_query($conn,$query);
    }

    else {
        $query = "SELECT * FROM reserve WHERE Year = '$year2'";
        $result = mysqli_query($conn,$query);

    }
}

else if (isset($_POST['busmonth']))
{
    $month2 = $_POST['month'];
    if ($month2 == "All")
    {
        $query = "SELECT * FROM reserve";
        $result = mysqli_query($conn,$query);
    }

    else {
        $query = "SELECT * FROM reserve WHERE Month = '$month2'";
        $result = mysqli_query($conn,$query);

    }
}

?>

<html>
    <head>
        <title>Lherwin Party</title>
        <link href="./style.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/480d0c770a.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <a href="index.html">
                <div class="logo"></div>
            </a>
            <ul>
                <li><a href="admin.html">Dashboard</a></li>
                <li><a href="adminRecord.php">Records</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </div>
        <br><br><br><br>
        <div style="display: flex; flex-wrap: wrap;">
            <div style="width: 321px; height: 370px; margin-left: 15px; background: aliceblue; box-shadow: 0px 0px 5px black;">
            <br>
            <h1 style="font-size: 25px; color: black; text-align: center;">Cancellation Report</h1>
            <br><br><br><br>
            <i class="fa-solid fa-calendar-xmark" style="font-size: 150; color: black; margin-left: 85px;"></i>
                <br><br>
                <h1 style="text-align: center; font-size: 50px;"><?php echo $can; ?></h1>
            </div>
            <div style="width: 321px; height: 370px; margin-left: 15px; background: aliceblue; box-shadow: 0px 0px 5px black;">
                <br>
                <h1 style="font-size: 25px; color: black; text-align: center;">Year Report</h1>
                <br>
                <form action="" method="POST">
                <select name="year" id="year" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 87px;">
                    <option value="All">All</option>
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
                </select><br><center><input type="submit" value="Enter" name="subyear"></center><br>
                </form>
                <i class="fa-regular fa-calendar" style="font-size: 150; color: black; margin-left: 100px;"></i>
                <br><br>
                <h1 style="text-align: center; font-size: 50px;"><?php echo $year; ?></h1>
                <br>
            </div>
            <div style="width: 321px; height: 370px; margin-left: 15px; background: aliceblue; box-shadow: 0px 0px 5px black;">
                <br>
                <h1 style="font-size: 25px; color: black; text-align: center;">Monthly Report</h1>
                <br>
                <form action="" method="POST">
                <select name="month" id="month" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 87px;">
                    <option value="All">All</option>
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
                </select><br><center><input type="submit" value="Enter" name="submonth"></center><br>
                </form>
                <i class="fa-regular fa-calendar-days" style="font-size: 150; color: black; margin-left: 100px;"></i>
                <br><br>
                <h1 style="text-align: center; font-size: 50px;"><?php echo $month; ?></h1>
            </div>
            <div style="width: 321px; height: 370px; margin-left: 15px; background: aliceblue; box-shadow: 0px 0px 5px black;">
                <br>
                <h1 style="font-size: 25px; color: black; text-align: center;">Day Report</h1>
                <br>
                <form action="" method="POST">
                <select name="day" id="day" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px; margin-left: 87px;">
                    <option value="All">All</option>
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
                </select><br><center><input type="submit" value="Enter" name="subday"></center><br>
                </form>
                <i class="fa-solid fa-calendar" style="font-size: 150; color: black; margin-left: 100px;"></i>
                <br><br>
                <h1 style="text-align: center; font-size: 50px;"><?php echo $day; ?></h1>
            </div>
        </div>
        <br>
        <h1 style="text-align: center; font-size: 25px;">Year Report</h1>
        <br>
        <form action="" method="POST">
            <center><select name="year" id="year" style="border: 2px solid black; height: 20px; width: 150px; border-radius: 5px;">
                    <option value="All">All</option>
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
                </select></center><br><center><input type="submit" value="Enter" name="busyear"></center><br>
        <div style="display: flex; justify-content: center;">
            <div>
                <table style="height: auto; width: 900px; border-collapse: collapse; ">
                    <tr style="background: lightblue;">
                        <th style="color: black; border-right: 1px solid aliceblue;">BirthdayCelebrant</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Package</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Price</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Year</th>
                        <th style="color: black; border-right: 1px solid aliceblue;">Time</th>
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
                        <td style="background: aliceblue; "><?php echo $row['Time']; ?></td>
                    </tr>
                    <?php
                        }

                        ?>
                </table>
            </div>
        </div>
    </form>

    <!-- Unfinished -->
    </body>
</html>