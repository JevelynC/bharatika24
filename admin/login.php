

<?php

require_once '../vendor/autoload.php';
require "../connect.php";

$client = new Google_Client();
$client->setClientId('541343205009-6mirmj9bql40qcvnai5ni1g0lkqtou4c.apps.googleusercontent.com'); 
$client->setClientSecret('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');
$client->setRedirectUri('https://bharatikafest.petra.ac.id/2024/main/admin/login.php');
// $client->setRedirectUri('http://localhost/bhara/bharatika2024/admin/login.php');

$client->addScope('email');
$client->addScope('profile');

if (isset($_GET['code'])) {
    $msg = "";

    \Firebase\JWT\JWT::$leeway = 60;
    do{
        $attempt = 0;
        try{
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            if(!isset($token['error'])){
                
                $client->setAccessToken($token['access_token']);
                $service = new Google_Service_Oauth2($client);
                $profile = $service->userinfo->get();

                if($profile){
                    if(isset($profile['hd']) && str_ends_with($profile['hd'], 'john.petra.ac.id')){
                        $gmail = $profile['email'];
                        $username = $profile['name'];
                        $id = $profile['id'];
                        $nrp = strtolower(substr($gmail, 0, 9));
                        
                        // check is admin
                        $sql = "SELECT a.*, d.name as divisi FROM admin a
                        JOIN divisi d on a.id_divisi = d.id
                        where nrp = ?;";
                        $stmt = $conn->prepare($sql);
                        $stmt->execute([$nrp]);
                        $data = $stmt->fetch();
                        if($stmt->rowCount() > 0 && $data['role'] === 'admin' ){
                            $_SESSION['access_token'] = $token['access_token'];
                            $_SESSION['gmail'] = $gmail;
                            $_SESSION['username'] = $data['nama'];
                            $_SESSION['division'] = $data['divisi']; 
                            $_SESSION['nrp'] = $nrp;

                            header('Location: ./index.php');
                        }else{
                            //is not admin
                            $msg = "You are not admin";
                        }
                    }else{
                        //silahkan pakai email petra
                        $msg = "Silahkan pakai email petra";
                    }
                }else{
                    //error get data from google
                    $msg = "Error get data from google";
                }          
            }
            $retry = false;
        }catch(\Firebase\JWT\BeforeValidException $e){
            $retry = $attempt < 2;
            $attempt++; 
        }
    }while($retry);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <?php include "../assets/link.html" ?>
    <!-- CSS / LINK -->
    <link rel="stylesheet" href="../assets/css/general.css">
    <link rel="stylesheet" href="./login.css">
    <script src="https://accounts.google.com/gsi/client" async></script>
    <title>Admin Bharatikafest 2024 | Login</title> 
</head>
<body>
    <?php
        if (!empty($msg)){
            echo "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Login Failed',
                text: '$msg'
            })
            </script>";
        }
    ?>
    <div class="login-holder">
    <div class="login-container">
        <div class="image-bhara">
            <img src="../assets/img/logo_icon.png" alt="logo">
        </div>
        <div class="button-container mt-3">
            <a href="<?= $client->createAuthUrl(); ?>">
                <button class="admin-login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z"/>
                    </svg>
                    Sign In with Google Account
                </button>
            </a>
        </div>
        <h3 class="text-admin">* Gunakan Email PCU</h3>
    </div>
</div>


</body>

</html>