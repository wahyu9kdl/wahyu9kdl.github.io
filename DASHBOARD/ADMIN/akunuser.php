<?php
//memulai Session
session_start();
//memuat dan menginisialisasi class User
include 'user.php';
$user = new User();
if(isset($_POST['daftarSubmit'])){
	//memeriksa apakah rincian user kosong
    if(!empty($_POST['nama_awal']) && !empty($_POST['nama_akhir']) && !empty($_POST['email']) && !empty($_POST['telp']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])){
		//membandingkan password and konfirmasi password
        if($_POST['password'] !== $_POST['confirm_password']){
            $sesiData['status']['type'] = 'error';
            $sesiData['status']['msg'] = 'Konfirmasi password harus sama dengan password.'; 
        }else{
			//memeriksa apakah user sudah ada di dalam database
            $kondSblmnya['where'] = array('email'=>$_POST['email']);
            $kondSblmnya['return_type'] = 'count';
            $userSblmnya = $user->getRows($kondSblmnya);
            if($userSblmnya > 0){
                $sesiData['status']['type'] = 'error';
                $sesiData['status']['msg'] = 'Email sudah ada, silakan gunakan email yang lain.';
            }else{
				//memasukkan data user dalam database
                $userData = array(
                    'nama_awal' => $_POST['nama_awal'],
                    'nama_akhir' => $_POST['nama_akhir'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'telp' => $_POST['telp']
                );
                $insert = $user->insert($userData);
				//Status ditetapkan berdasarkan data yang dimasukkan
                if($insert){
                    $sesiData['status']['type'] = 'sukses';
                    $sesiData['status']['msg'] = 'Anda telah berhasil didaftarkan.';
                }else{
                    $sesiData['status']['type'] = 'error';
                    $sesiData['status']['msg'] = 'Terjadi masalah, silahkan coba lagi.';
                }
            }
        }
    }else{
        $sesiData['status']['type'] = 'error';
        $sesiData['status']['msg'] = 'Isi semua bidang.'; 
    }
	//menyimpan status pendaftaran ke dalam Session
    $_SESSION['sesiData'] = $sesiData;
    $redirectURL = ($sesiData['status']['type'] == 'sukses')?'index.php':'daftar.php';
	//mengalihkan ke halaman index/pendaftaran
    header("Location:".$redirectURL);
}elseif(isset($_POST['loginSubmit'])){
    //memeriksa apakah login yang diinput kosong
    if(!empty($_POST['email']) && !empty($_POST['password'])){
		//mendapatkan data user dari class user
        $kondisi['where'] = array(
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
            'status' => '1'
        );
        $kondisi['return_type'] = 'single';
        $userData = $user->getRows($kondisi);
		//Menetapkan data dan status user berdasarkan login
        if($userData){
            $sesiData['userLoggedIn'] = TRUE;
            $sesiData['userID'] = $userData['id'];
            $sesiData['status']['type'] = 'sukses';
            $sesiData['status']['msg'] = 'Selamat Datang '.$userData['nama_awal'].'!';
        }else{
            $sesiData['status']['type'] = 'error';
            $sesiData['status']['msg'] = 'Email atau password salah, silahkan coba lagi.'; 
        }
    }else{
        $sesiData['status']['type'] = 'error';
        $sesiData['status']['msg'] = 'Masukkan email and password.'; 
    }
	//menyimpan status login ke dalam Session
    $_SESSION['sesiData'] = $sesiData;
	//mengalihkan ke halaman home
    header("Location:index.php");
}elseif(!empty($_REQUEST['logoutSubmit'])){
	//menghapus data Session
    unset($_SESSION['sesiData']);
    session_destroy();
	//menyimpan Status logout ke dalam Session
    $sesiData['status']['type'] = 'sukses';
    $sesiData['status']['msg'] = 'Anda telah berhasil logout dari akun Anda.';
    $_SESSION['sesiData'] = $sesiData;
	//mengalihkan ke halaman home
    header("Location:index.php");
}else{
	//mengalihkan ke halaman home
    header("Location:index.php");
}