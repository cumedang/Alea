<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
    session_start();
    $conn=mysqli_connect("localhost","yusun2234sun1","sunlove8421!","yusun2234sun1");
    //$conn=mysqli_connect('localhost','root','sunlove8421!','member');
    $id = $_POST['id'];
    $password = $_POST['password'];
    SQLFiltering($id);
    SQLFilteringp($password);
    function SQLFiltering($id){
        // 해킹 공격을 대비하기 위한 코드
        $id=preg_replace("/\s{1,}1\=(.*)+/","",$id); // 공백이후 1=1이 있을 경우 제거
        $id=preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i"," ",$id); // 공백이후 or, and 등이 있을 경우 제거
        $id = preg_replace("/[\s\t\'\;\=]+/","", $id); // 공백이나 탭 제거, 특수문자 제거
    }
    function SQLFilteringp($password){
        // 해킹 공격을 대비하기 위한 코드
        $password=preg_replace("/\s{1,}1\=(.*)+/","",$password); // 공백이후 1=1이 있을 경우 제거
        $password=preg_replace("/\s{1,}(or|and|null|where|limit|alert|location)/i"," ",$password); // 공백이후 or, and 등이 있을 경우 제거
        $password = preg_replace("/[\s\t\'\;\=]+/","", $password); // 공백이나 탭 제거, 특수문자 제거
    }
    $sql = "SELECT * FROM user WHERE id ='{$id}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $row['id'];
    $hashedPassword = $row['password'];
    $passwordResult = password_verify($password, $hashedPassword);
    if($passwordResult == true){
        $_SESSION['userid'] = $row['id'];
        ?>
        <script>
            alert("로그인에 성공");
            location.href = "index.php";
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("로그인에 실패하였습니다");
        location.href = "login.html";
        </script>
        <?php
    }

?>