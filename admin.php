<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Pannel</title>
        <link rel="stylesheet" href="assets/css/admin.min.css" />
        <meta name="author" content="Lazar Petrović">
        <link rel="shortcut icon" type="icon" href="images/favicon.ico"/>
    </head>
        <?php
            include_once("assets/php/veza/veza.php");
            
            if(isset($_SESSION["login"])) {
                if($_SESSION["login"] == "admin") {
                    if(isset($veza)) {
                        $upit = "select * from user";
                        $rez = $veza -> query($upit);
                        $row = $rez -> fetchAll();
                        echo "<a href='index.php'>&larr; Back to the main page</a>";
                        echo "<h1 style='text-align:center;'>ADMIN PANNEL</h1>";
                        echo "<h2 style='text-align:center;'>USER TABLE</h2>";

                        echo "<form action='assets/php/admin/delete.php' method='POST'>";
                        echo "<table cellpadding='5' style='margin:auto;'>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>NAME</th>";
                        echo "<th>EMAIL</th>";
                        echo "<th>PASSWORD</th>";
                        echo "<th>ADMIN</th>";
                        echo "<th>DELETE</th>";
                        echo "</tr>";
                        foreach( $row as $r) {
                            $id = $r->id;
                            $name = $r->name;
                            $email = $r->email;
                            $password = $r->password;
                            $admin = $r->admin;
                            echo "<tr>";
                            echo "<td>".$id."</td>";
                            echo "<td>".$name."</td>";
                            echo "<td>".$email."</td>";
                            echo "<td>".$password."</td>";
                            echo "<td>".$admin."</td>";
                            echo "<td><button name='delete' type='submit' value='$id' style='width:100%'>DELETE</button></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "</form><br/><br/>";
        
                        echo "<h2 style='text-align:center;'>ADD NEW USER</h2>";
                        echo "<form action='assets/php/admin/add.php' method='POST' onsubmit='return provera()'>";
                        echo "<table cellpadding='5' style='margin:auto;'>";
                        echo "<tr>";
                        echo "<th>NAME</th>";
                        echo "<th>EMAIL</th>";
                        echo "<th>PASSWORD</th>";
                        echo "<th>ADMIN</th>";
                        echo "<th>ADD</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><input type='text' name='name' id='name'</td>";
                        echo "<td><input type='email' name='email' id='email'</td>";
                        echo "<td><input type='text' name='password' id='password'</td>";
                        echo "<td><input type='number' name='admin' id='admin'</td>";
                        echo "<td><input type='submit' value='ADD' style='width:100%'></td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "</form><br/><br/>";
                        echo "<script src='assets/js/adminAdd.min.js'></script>";

                        echo "<h2 style='text-align:center;'>PRODUCT TABLE</h2>";
                        $upit2 = "select * from vacation";
                        $rez2 = $veza -> query($upit2);
                        $row2 = $rez2 -> fetchAll();
                        echo "<form action='assets/php/admin/deleteVac.php' method='POST'>";
                        echo "<table cellpadding='5' style='margin:auto;'>";
                        echo "<tr>";
                        echo "<th>ID</th>";
                        echo "<th>NAME</th>";
                        echo "<th>DESCRIPTION</th>";
                        echo "<th>FILE</th>";
                        echo "<th>PRICE</th>";
                        echo "<th>DELETE</th>";
                        echo "</tr>";
                        foreach( $row2 as $r2) {
                            $id_img = $r2->id_img;
                            $name_img = $r2->name_img;
                            $desc_img = $r2->desc_img;
                            $file_img = $r2->file_img;
                            $price = $r2->price;
                            echo "<tr>";
                            echo "<td>".$id_img."</td>";
                            echo "<td>".$name_img."</td>";
                            echo "<td>".$desc_img."</td>";
                            echo "<td>".$file_img."</td>";
                            echo "<td>".$price."</td>";
                            echo "<td><button name='deleteVac' type='submit' value='$id_img' style='width:100%'>DELETE</button></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "</form><br/><br/>";

                        echo "<h2 style='text-align:center;'>ADD NEW PRODUCT</h2>";
                        echo "<form action='assets/php/admin/addVac.php' method='POST'>";
                        echo "<table cellpadding='5' style='margin:auto;'>";
                        echo "<tr>";
                        echo "<th>NAME</th>";
                        echo "<th>DESCRIPTION</th>";
                        echo "<th>FILE</th>";
                        echo "<th>PRICE</th>";
                        echo "<th>ADD</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><input type='text' name='name_img' id='name_img'/></td>";
                        echo "<td><input type='text' name='desc_img' id='desc_img'/></td>";
                        echo "<td><input type='text' name='file_img' id='file_img'/></td>";
                        echo "<td><input type='number' name='price' id='price'/></td>";
                        echo "<td><input type='submit' value='ADD' style='width:100%'></td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "</form><br/><br/>";

                        echo "<h2 style='text-align:center;'>ORDER TABLE</h2>";
                        $upit3 = "select * from booking";
                        $rez3 = $veza -> query($upit3);
                        $row3 = $rez3 -> fetchAll();
                        echo "<form action='assets/php/admin/deleteBook.php' method='POST'>";
                        echo "<table cellpadding='5' style='margin:auto;'>";
                        echo "<tr>";
                        echo "<th>ORDER ID</th>";
                        echo "<th>PRODUCT ID</th>";
                        echo "<th>USER ID</th>";
                        echo "<th>DELETE</th>";
                        echo "</tr>";
                        foreach( $row3 as $r3) {
                            $id_book = $r3->id_book;
                            $id_vacation = $r3->id_vacation;
                            $id_user = $r3->id_user;
                            echo "<tr>";
                            echo "<td>".$id_book."</td>";
                            echo "<td>".$id_vacation."</td>";
                            echo "<td>".$id_user."</td>";
                            echo "<td><button name='deleteBook' type='submit' value='$id_book' style='width:100%'>DELETE</button></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        echo "</form><br/><br/>";

                        echo "<h2 style='text-align:center;'>ADD NEW ORDER</h2>";
                        echo "<form action='assets/php/admin/addBook.php' method='POST'>";
                        echo "<table cellpadding='5' style='margin:auto;'>";
                        echo "<tr>";
                        echo "<th>PRODUCT ID</th>";
                        echo "<th>USER ID</th>";
                        echo "<th>ADD</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><input type='number' name='product_id' id='product_id'/></td>";
                        echo "<td><input type='number' name='user_id' id='user_id'/></td>";
                        echo "<td><input type='submit' value='ADD' style='width:100%'></td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "</form><br/><br/>";

                        echo "<h2 style='text-align:center;'>SURVEY TABLE</h2>";
                        $upit5 = "select * from survey";
                        $rez5 = $veza -> query($upit5);
                        $row5 = $rez5 -> fetchAll();
                        echo "<table cellpadding='5' style='margin:auto;'>";
                        echo "<tr>";
                        echo "<th>SURVEY ID</th>";
                        echo "<th>USER ID</th>";
                        echo "<th>ANSWER</th>";
                        echo "</tr>";
                        foreach( $row5 as $r5) {
                            $id_surv = $r5->id_surv;
                            $id_user_s = $r5->id_user_s;
                            $answer = $r5->answer;
                            echo "<tr>";
                            echo "<td>".$id_surv."</td>";
                            echo "<td>".$id_user_s."</td>";
                            echo "<td>".$answer."</td>";
                            echo "</tr>";
                        }
                        echo "</table><br/><br/>";

                        echo "<h2 style='text-align:center;'>CONTACT</h2>";
                        $upit4 = "select * from contact";
                        $rez4 = $veza -> query($upit4);
                        $row4 = $rez4 -> fetchAll();
                        foreach( $row4 as $r4) {
                            $id_c = $r4 -> id_c;
                            $name_c = $r4 -> name_c;
                            $email_c = $r4 -> email_c;
                            $message_c = $r4 -> message_c;
                            echo "<section style='text-align:center; font-size:18px;'>";
                            echo "<p>From: ".$name_c."</p>";
                            echo "<p>Email: ".$email_c."</p>";
                            echo "<p>Message:<br/>".$message_c."</p>";
                            echo "<form method='POST' action='assets/php/admin/deleteCon.php'>";
                            echo "<button type='submit' value='".$id_c."' name='deleteCon'>DELETE</button>";
                            echo "</form>";
                            echo "</section><br/><br/>";
                        }
                    }
                    else http_response_code(503);
                }
                else http_response_code(404);
            }
            else http_response_code(404);
        ?>   
    </body>
</html>