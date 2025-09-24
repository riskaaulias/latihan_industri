<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\ProductController;
use App\Models\Post;
use App\Models\Biodata;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Selamat datang di halaman about';
});

Route::get('/profile', function () {
    return 'Selamat datang di halaman profile';
});

Route::get('/biodata/{nama_lengkap}/{tanggal_lahir}/{jenis_kelamin}/{tempat_lahir}/{alamat}/{agama}/{telepon}',
    function ($nama_lengkap, $tanggal_lahir, $jenis_kelamin, $tempat_lahir, $alamat, $agama, $telepon) {
    return "<center><h1>Biodata</h1> <br>" . 
        "Nama Lengkap   :$nama_lengkap <br>" . 
        "Tanggal Lahir  :$tanggal_lahir <br>" . 
        "Jenis Kelamin  :$jenis_kelamin <br>" . 
        "Tempat Lahir   :$tempat_lahir <br>" . 
        "Alamat         :$alamat <br>" . 
        "Agama          :$agama <br>" . 
        "Telepon        :$telepon <br> </center>";

});

Route::get('/hitung/{bilangan1}/{bilangan2}', function ($bilangan1, $bilangan2) {
    $hasil = $bilangan1 + $bilangan2;
    return "Bilangan 1 : $bilangan1 <br>" . 
           "Bilangan 2 : $bilangan2 <br>" .
           "Hasil      : $hasil";
});

Route::get('/persegi/{sisi}', function ($sisi) {
    $hasil = $sisi * $sisi;
    return "Sisi    :$sisi <br>" . 
           "Luas Persegi      : $hasil";
});

Route::get('/persegi_panjang/{panjang}/{lebar}', function ($panjang, $lebar) {
    $hasil = $panjang * $lebar;
    return "Panjang    :$panjang <br>" . 
           "Lebar    :$lebar <br>" . 
           "Luas Persegi Panjang      : $hasil";
});

Route::get('/segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    $hasil = $alas * $tinggi;
    return "Alas    :$alas <br>" . 
           "Tinggi    :$tinggi <br>" . 
           "Luas Segitiga     : $hasil";
});

Route::get('/lingkaran/{jari2}', function ($jari2) {
    $hasil = 3.14 * $jari2 **2;
    return "Jari-jari    :$jari2 <br>" . 
           "Luas Lingkaran     : $hasil";
});

Route::get('/warung/{nama_pemesan}/{no_telepon}/{tanggal_beli}/{jenis}/{menu}/{jumlah}',
    function ($nama_pemesan, $no_telepon, $tanggal_beli, $jenis, $menu, $jumlah) { 

if ($jenis == "Makanan") {
    if ($menu == "Seblak") {
   $harga = 10000;
    }else if ($menu == "Pentol") {
   $harga = 15000;
    }else if ($menu == "Batagor") {
    $harga = 20000;
    } else {
       $harga = 0;
    }

}else if($jenis == "Minuman") {
   if ($menu == "Kopi"){
   $harga = 5000;}
    else if ($menu == "Thai Tea") {
   $harga = 15000;
    }else if ($menu == "Jus") {
    $harga = 10000;
    } else {
         $harga = 0;
    };
    } else {
        echo "Menu Tidak Ada";
    }

$total = $harga * $jumlah;

if ($total > 50000) {
    $diskon = 0.1 * $total;
    $totalHarga = $total - $diskon;
    $cetak = "Diskon 10% = $diskon <br>";
    
} else {
    $cetak = "Tidak Ada Diskon <br>";
    $totalHarga = $total;
    };
 "- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - <br>". 


 "= = = = = = = = =Thank You muach= = = = = = = = = =";
   
 return "<h2>~Warkop 5 Lantai~</h2> <br>" . 
        "= = = = = = = = = = = = = = = = = = <br>" .
        "Nama Pemesan   :$nama_pemesan <br>" . 
        "No Telepon     :$no_telepon <br>" . 
        "Tanggal Beli   :$tanggal_beli <br>" . 
        "Jenis          :$jenis <br>" . 
        "Harga          :$harga <br>" . 
        "Menu           :$menu <br>" . 
        "Jumlah         :$jumlah <br>" .
         "- - - - - - - - - - - - - - - - - - - - - - - - - <br>". 
        "Total         :$total<br>" .
        "$cetak". 
        "- - - - - - - - - - - - - - - - - - - - - - - - - <br>". 
        "Total Bayar   :$totalHarga <br>";


});

Route::get('halaman1', function () {

    $hobi = ["Membaca", "Menulis", "Menggambar", "Mewarnai", "Memasak", "Mengaji", "Makan", "Mendengar musik", "Bernyanyi", "Tidur"];

    return view ('tampil1', compact ('hobi'));
});

Route::get('halaman2', function () {

    $makanan = ["Seblak", "Topokki", "Batagor", "Baso", "Batagor", "Mie Ayam", "Ramen", "Dimsum", "Takoyaki", "Yamin"];

    return view ('tampil2', compact('makanan'));
});

Route::get('halaman3', function () {

    $siswa = ["Riska", "Nabil", "Ani", "Salwa", "Jajas", "Anggi", "Dila", "Didil", "Yaya", "Maryana"];

    return view ('tampil3', compact('siswa'));
});

// Route::get('post', function () {

//    return $post = Post::all();

//    $post = Post::all();

//    return view('halaman_post', compact('post'));

// });

Route::get('siswa', function () {

//    return $siswa = Siswa::all();

    $siswa = Siswa::all();
    
   return view('halaman_siswa', compact('siswa'));
});

// Route::get('post', function(){
//     $post = Post::find(1);
//     $post->delete();
//     return $post;
// });     


Route::get('post', function(){
    $post = new Post;
    $post->title ="menjadi teman yang baik";
    $post->content ="menjadi teman yang baik adalah hal positif";
    $post->save();
    return $post;
});     

Route::get('biodata2', function () {
  // return $siswa = Siswa::all();
  $biodata = Biodata::all();
    return view('halamanbiodata', compact('biodata'));
});

Route::get('/product',[ProductController::class,'index'])->name('product');

