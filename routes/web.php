<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/about', function() {
    return 'Selamat datang di halaman home';
});

Route:: get('/home', function() {
    return 'Selamat datang di halaman About';
});

Route:: get('/contact', function() {
    return 'Selamat datang di halaman contact';
});

Route:: get('/contact/{nama2}/{umur}', function($nama, $umur) {
    return "Nama : ".$nama."<br>".
           "Umur : ".$umur;

});

Route:: get('/hitung/{angka1}/{angka2}', function($angka1, $angka2){
    $hasil = $angka1 + $angka2;
    return "Bilangan 1 : ".$angka1."<br>".
           "Bilangan 2 : ".$angka2."<br>".
    "Hasil : ".$hasil;
});


Route:: get('/latihan/{nama}/{telepon}/{jenis}/{barang}/{jumlah}/{pembayaran}', function($nama, $telepon,$jenisbarang, $barang, $jumlah, $pembayaran){
    if ($jenisbarang == "Handphone") {
        
    
    if ($barang == "Samsung") {
        $harga = 5000000;
        $total = $harga*$jumlah;

    }elseif ($barang == "Poco") {
        $harga = 3000000;
        $total = $harga*$jumlah;

    }elseif($barang == "Iphone") {
        $harga = 15000000;
        $total = $harga*$jumlah;

    }


}
if ($jenisbarang == "Laptop") {
        
    
    if ($barang == "Lenovo") {
        $harga = 4000000;
        $total = $harga*$jumlah;

    }elseif ($barang == "Acer") {
        $harga = 8000000;
        $total = $harga*$jumlah;

    }elseif($barang == "Macbook") {
        $harga = 20000000;
        $total = $harga*$jumlah;

    }


}
if ($jenisbarang == "TV") {
        
    
    if ($barang == "Toshiba") {
        $harga = 5000000;
        $total = $harga*$jumlah;

    }elseif ($barang == "Samsung") {
        $harga = 8000000;
        $total = $harga*$jumlah;

    }elseif($barang == "LG") {
        $harga = 10000000;
        $total = $harga*$jumlah;

    }


}

if ($total>10000000) {
    $cashback = 500000;

 
}else{
    $cashback =0;
}

if ($pembayaran == "transfer") {
    $potongan = 50000;
}else{
    $potongan = 0;
}
$totalbayar = $total-$potongan-$cashback;
      return "Nama pembeli : ".$nama."<br>".
            "Telepon : ".$telepon."<br>".         
            "Jenis Barang : ".$jenisbarang."<br>".
            "-------------------------<br>".
            "Nama Barang : ".$barang. "<br>".
            "Harga Barang :".number_format($harga)."<br>".
            "Jumlah : ".$jumlah."<br>".
            "--------------------------<br>".
            "Total : ".number_format($total)."<br>".
            "Cashback : ". number_format($cashback)."<br>".
            "Pembayaran : ". $pembayaran."<br>".
            "Potongan : ". number_format($potongan)."<br>".
            "--------------------------- <br>". 
            "Total Pembayaran : ". number_format($totalbayar);


        

            

});




