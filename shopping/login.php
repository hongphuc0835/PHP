<?php


        $host = "localhost:3306";
        $username = "root";
        $password = "";
        $dbname = "fptaptechdb";

        $conn = new mysqli($host, $username, $password, $dbname);
//check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    //thực hiẹn truy vấn để kiểm tra  thông tin đăng nhập
    $query = "SELECT * FROM account WHERE username= '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows >0){
        echo "Đăng nhập thành công";
        header("location:dashboard.php");

    }else{
        echo "Đăng nhập thất bại .vui lòng kiểm tra lại thông tin đăng nhập.";
    }

}

//đóng kết nối sau khi kiểm tra
$conn->close();
?>


