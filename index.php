<?php
 require('config/auth.php');
 $cek = new Auth;
 
 require('layout/auth/header.php');

     if(!isset($_GET['page'])){
      echo "<script>";
      echo "alert('Logout berhasil!!!');";
        echo "window.location.href ='index.php?page=login';";
        echo "</script>";
     }

     if($_GET['page'] == 'login'){
        require('login.php');
     } elseif ($_GET['page'] == 'register'){
       require('register.php');
     } elseif($_GET['page'] == 'postlogin'){
     $cek->login($_POST['Email'],$_POST['Password']);
    } elseif($_GET['page'] == 'postregister'){
      if(!isset($_POST['Username'])){
        echo "<script>alert('Register dulu!');window.location.href ='index.php?page=login'</script>";
      } else {
        $data['Username'] = $_POST['Username'];
        $data['Password'] = $_POST['Password'];
        $data['Email'] = $_POST['Email'];
        $data['NamaLengkap'] = $_POST['NamaLengkap'];
        $data['Alamat'] = $_POST['Alamat'];
        $cek->register($data);
      }
        
    }
                  elseif($_GET['page'] == 'logout'){
                    $cek->logout();
   }
     require('layout/auth/footer.php');
?>