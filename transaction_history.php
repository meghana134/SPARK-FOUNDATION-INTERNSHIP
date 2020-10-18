<?php
include("database.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Transaction details</title>

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
                        <center>Transaction history</center>
                    </b></h1>
            </div>
            <center>

                <center>

                    <table class="table table-data2" border=1;>
                        <thead>
                            <tr>

                                <th>Sender Name</th>
                                <th>Receiver Name</th>
                                <th>Amount Transfered</th>

                            </tr>
                            <?php


                            $sql = "SELECT sender, receiver,credits FROM transaction";

                            $result = mysqli_query($conn, $sql);


                            while ($row = mysqli_fetch_array($result)) {


                            ?>

                                <tr>


                                    <td><?php echo $row['sender']; ?></td>
                                    <td><?php echo $row['receiver']; ?></td>
                                    <td><?php echo $row['credits']; ?></td>

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