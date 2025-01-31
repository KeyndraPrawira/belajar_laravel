<?php

use Illuminate\Support\Facades\Route;
use App\Models\Barang;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PpdbsController;
use App\Http\Controllers\SiswasController;
use App\Http\Controllers\PenggunasController;
use App\Http\Controllers\TeleponController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProduksController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CostumersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PenerbitsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\BukusController;
use App\Http\Controllers\PembelisController;
use App\Http\Controllers\TransaksisController;



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

Route::get('/siswa', function(){

    $data_siswa = ['Keyndra', 'Agus', 'Hendri', 'Karissa', 'Fahri'];

    return view('tampil', compact('data_siswa'));
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

//bikin model 
Route::get('/post', [PostsController::class, 'menampilkan']);


// Route::get('/barang', function(){

//     $barang = Barang::where('nama_barang', 'like', '%Sikat Gigi%')->get();
//     return view('tampil_barang', compact('barang'));
// }
// );

Route::get('/barang', [PostsController::class, 'menampilkan2']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('siswa', SiswasController::class);
Route::resource('ppdb', PpdbsController::class);
Route::resource('pengguna', PenggunasController::class);
Route::resource('telepon', TeleponController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('produk', ProduksController::class);
Route::resource('product', ProductsController::class);
Route::resource('costumer', CostumersController::class);
Route::resource('order', OrdersController::class);
Route::resource('penerbit', PenerbitsController::class);
Route::resource('genre', GenresController::class);
Route::resource('buku', BukusController::class);
Route::resource('pembeli', PembelisController::class);
Route::resource('transaksi', TransaksisController::class);


