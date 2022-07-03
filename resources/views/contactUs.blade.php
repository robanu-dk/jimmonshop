@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row" style="padding-top: 100px">
            <div class="col">
                <form action="" method="GET">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Anda" id="nama">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="email@example.com" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda kepada orang lain.</div>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject Email</label>
                        <select class="form-select" name="subject" aria-label="Default select example">
                            <option selected>Pilih Subject</option>
                            <option value="Tidak bisa daftar event">Tidak bisa daftar event</option>
                            <option value="Toko bermasalah">Toko bermasalah</option>
                            <option value="Lapor Produk">Lapor Produk</option>
                            <option value="Lapor Event">Lapor Event</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="keluhan" class="form-label">Keluhan</label>
                        <input name="keluhan" id="keluhan" type="hidden">
                        <trix-editor input="benefits" style="background-color: white;" placeholder="Tulis Keluhan Anda di Sini"></trix-editor>
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </form>
            </div>
            <div class="col" style="padding-left: 200px;">
                <img src={{ asset('icon-cs.png') }} alt="icon customer service" width="400px" style=" padding-top: 10%;">
            </div>
        </div>
    </div>

@endsection

<?php

$statusMsg = '';
$msgClass = '';
if(isset($_GET['submit'])){
    // Get the submitted form data
    $name = $_GET['nama'];
    $email = $_GET['email'];
    $subject = $_GET['subject'];
    $message = $_GET['keluhan'];

    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'buat.tugas.login@gmail.com';
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2> via Form Kontak Website</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}

?>
