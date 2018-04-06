<?php
    include('dbo.php');
    
    $id_user = $_POST['id_admin'];
    $pass=md5($_POST['pass_admin']);
    $query = "select * from tb_admin where id_admin='".$id_user."' and password='".$pass."' or uniname='".$id_user."' and password='".$pass."'";
    $execute = mysql_query($query);
    $result = mysql_num_rows($execute);
    $data = mysql_fetch_array($execute);
    if($id_user=="" || $pass==""){
        header("location:login.php?user=blank");
    } else if ($result==0){
        header("location:login.php?user=wrong");
    }else{
        session_start(); //memulai session
        $_SESSION['admin'] = $data;
        $_SESSION['adminid'] = $data['ID_ADMIN'];
        $_SESSION['adminname'] = $data['NAME'];
        $_SESSION['adminuname'] = $data['UNINAME'];
        $_SESSION['adminpass'] = $data['PASSWORD'];
        $adminid = $_SESSION['adminid'];
        header("location:index.php?");
    }
?>