<?php
include("database.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Customer information</title>

    <style>
        .button {
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            background-color: black;
            border-radius: 6px;
            outline: none;
        }

        tr:hover {
            background-color: red;
            opacity: 0.6;
        }

        .bgimg {
            background-image: url("https://images.unsplash.com/photo-1528459801416-a9e53bbf4e17?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 1300px;
            width: 100%;
        }
    </style>
</head>

<body class="bgimg">
    <div class="view">
        <div class="container">
            <div class="page-header">
                <h1 style="margin-top: 30px;color:black;"><b>
                        <center>User information</center>
                    </b></h1>
            </div>
            <center>

                <center>
                    <form action="Transaction.php" method="POST">
                        <div>
                            <h2 style="font-size: 28pt;color:black;font-family:'bold'">Transaction</h2>
                            <h3 style="font-family: 'bold;color: black;">FROM</h3></br>
                            <select type="text" name="sender" Required>
                                <option>select sender name from the below options</option>
                                <option value="Rakesh">Rakesh</option>
                                <option value="Avinash">Avinash</option>
                                <option value="Netra">Netra</option>
                                <option value="Apruv">Apruv</option>
                                <option value="Ibhrahim">Ibhrahim</option>
                                <option value="Shreya">Shreya</option>
                                <option value="Nakshatra">Nakshatra</option>
                                <option value="Megha">Megha</option>
                                <option value="Nishitha">Nishitha</option>
                                <option value="Roushan">Roushan</option>
                            </select>
                            </br>
                            <h3 style="font-family: 'bold;color:black;">TO</h3></br>
                            <select type="text" name="receiver" Required>
                                <option>select recevier name from the below options</option>
                                <option value="Rakesh">Rakesh</option>
                                <option value="Avinash">Avinash</option>
                                <option value="Netra">Netra</option>
                                <option value="Apruv">Apruv</option>
                                <option value="Ibhrahim">Ibhrahim</option>
                                <option value="Shreya">Shreya</option>
                                <option value="Nakshatra">Nakshatra</option>
                                <option value="Megha">Megha</option>
                                <option value="Nishitha">Nishitha</option>
                                <option value="Roushan">Roushan</option>
                            </select></br></br>
                            Credits to be transfered :<input type="text" name="credits" placeholder="Enter credits" Required>
                            <br /></br>
                            <button class="button" type="submit" name="Transfer" value="Transfer">Transfer</button></br></br>
                            <a class="button" href="home.html">back</a>
                    </form>
                    <table class="table table-data2" border=10px;>
                        <thead>
                            <tr>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Credits</th>

                            </tr>
                            <?php


                            $sql = "SELECT name,email,phonenumber FROM cust";

                            $result = mysqli_query($conn, $sql);

                            
                            while ($row = mysqli_fetch_array($result)) {

                            ?>

                                <tr>

                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phonenumber']; ?></td>

                                </tr>
                            <?php

                            }

                            ?>

                        </thead>
                    </table>
        </div>

        </center>
</body>

</html>