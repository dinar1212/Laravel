<?php

namespace App\Http\Controllers;

class LatihanController extends Controller
{
    public function perkenalan($nama, $alamat, $umur)
    {
        //passing variable to vie
        // $nama = "Dinar";
        // $alamat = "Bandung";
        // $umur = 18;

        return view('pages.perkenalan', compact('nama', 'alamat', 'umur'));
    }
    public function siswa()
    {
        $a = [
            array('id' => 1, 'name' => 'Dadang', 'age' => 15),
            array('id' => 2, 'name' => 'Dudung', 'age' => 18),

        ];
        return view('pages.siswa', ['siswa' => $a]);
    }
}
