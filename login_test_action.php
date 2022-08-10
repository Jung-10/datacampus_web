<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "yell10!";
$db_name = "better";

$con = new mysqli($db_host, $db_user, $db_password, $db_name) or die ("Can't access DB"); // DB 접속

$id = $_POST['id'];
$password = $_POST['password'];
$name = $_POST['name'];

$query = "insert into question (id,password,name) values('".$id."','".$password."','".$name."')"; //insert를 위한 SQL문

$result=mysqli_query($con,$query); 

if(!$result){
    ?> <script>
alert('다시 시도해 주세요.');
location.href = "..";
</script>
<?php }
else {
    ?> <script>
alert('문의접수가 완료되었습니다.');
location.href = "index.html"; // 문의접수가 완료되면 홈화면으로 이동
</script>
<?php } 

?>

<?php
session_start();
$id=$_POST['id'];
$password=$_POST['password'];
$mysqli=mysqli_connect("localhost","root","yell10!","better");
 
$check="SELECT * FROM user_db WHERE id='$id'";
$result=$mysqli->query($check); 
if($result->num_rows==1){
    $row=$result->fetch_array(MYSQLI_ASSOC); //하나의 열을 배열로 가져오기
    if($row['password']==$password){  //MYSQLI_ASSOC 필드명으로 첨자 가능
        $_SESSION['userid']=$id;           //로그인 성공 시 세션 변수 만들기
        if(isset($_SESSION['userid']))    //세션 변수가 참일 때
        {
            ?>
<script>
alert("로그인에 성공하였습니다.")
location.href = "index.html";
</script>

<?php
        }
        else{
            echo "세션 저장 실패";
        }            
    }
    else{
        ?>
<script>
alert("로그인에 실패하였습니다");
location.href = "login_test.php";
</script>

<?php
    }
}
else{
    ?>
<script>
alert("로그인에 실패하였습니다");
location.href = "login_test.php";
</script>

<?php
}
?>