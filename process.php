<?php

    include "./connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mssv = $_POST["code"];
        $username = $_POST["fullname"];
        $email = $_POST["email"];
        $gioitinh = $_POST["gender"];
        $sothich = "";
        $quoctich = $_POST["nationality"];
        $ghichu = $_POST["note"];

        echo "MSSV: " . $mssv . "<br>";

        echo "Tên người dùng: " . $username . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Giới tính: " . $gioitinh . "<br>";

        if (isset($_POST["hobby"])) {
            $hobbies = $_POST["hobby"];
        
            foreach ($hobbies as $hobby) {
                $sothich = $sothich . " - " . $hobby;
                
            }
        }

        echo "Giới tính:" . $sothich . "<br>";
        echo "Quốc tịch:" . $quoctich . "<br>";
        echo "Ghi chú:" . $ghichu . "<br>";

        $db = new connect();
        $query = "INSERT INTO `user`(`hoten`, `mssv`, `email`, `sothich`, `quoctich`, `ghichu`, `gioitinh`) VALUES ('".$username."','".$mssv."','".$email."','".$sothich."','".$quoctich."','".$ghichu."','".$gioitinh."')";
        $db->getList($query);

    }

    header('Location: index.php');
?>