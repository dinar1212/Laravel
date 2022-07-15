<?php

//menggunkan/ mengimport LatihanController
use App\Http\Controllers\LatihanController;
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

// route Basic
Route::get('/about', function () {
    return view('tentang');
});

Route::get('profile', function () {
    $nama = "Dinar AS";
    return view('pages.profile', compact('nama'));
});

/*Route::get('biodata', function () {
$nama ="Dinar AS";
$kelas ="XII";
$jurusan ="RPL";
$umur ="17 Thn";
$jenis ="Laki-Laki";
return view('pages.biodata', compact(
'nama',
'kelas',
'jurusan',
'umur',
'jenis',));
}); */

//route parameter
Route::get('biodata/{nama}', function ($a) {
    return view('pages.biodata', compact('a'));
});

Route::get('parameter/{makanan}/{minuman}/{harga}', function ($makanan, $minuman, $harga) {
    return view('pages.parameter', compact('makanan', 'minuman', 'harga'));
});

Route::get('pesan/{menu?}', function ($pesan = "-") {
    return view('pages.pesan', compact('pesan'));
});

Route::get('pemesanan/{makanan?}/{minuman?}/{cemilan?}', function ($a = "silahkan pesan", $b = "silahkan pesan", $c = "silahkan pesan") {
    return view('pages.pemesanan', compact('a', 'b', 'c'));
});

Route::get('latihan/{nama?}/{alamat?}/{umur?}', [LatihanController::class, 'perkenalan']);

Route::get('siswa/{name?}/{aget?}/{mapel?}', [LatihanController::class, 'siswa']);

Route::get('mahasiswa/', [LatihanController::class, 'mahasiswa']);

Route::get('tv/', [LatihanController::class, 'tv']);
Route::get('belanja/', [LatihanController::class, 'belanja']);
Route::get('raport/', [LatihanController::class, 'raport']);
