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
            array('id' => 1, 'name' => 'Dadang', 'age' => 15, 'hobi' => ['mancing', 'futsal', 'renang']),
            array('id' => 2, 'name' => 'Dudung', 'age' => 18, 'hobi' => ['baca buku', 'bernyanyi']),

        ];
        return view('pages.siswa', ['siswa' => $a]);
    }

    public function mahasiswa()
    {
        $a = [

            ['dosen' => 'yusuf',
                'matkul' => 'pemprograman mobile',
                'maha' => [

                    ['nama' => 'Muhammad sholeh', 'nilai' => 75],
                    ['nama' => 'jujun junaedi', 'nilai' => 85],
                    ['nama' => 'mamat alkatiri', 'nilai' => 90],
                ],
            ],

            ['dosen' => 'yaris',
                'matkul' => 'pemprograman web',
                'maha' =>
                [
                    ['nama' => 'alfred mctominay', 'nilai' => 67],
                    ['nama' => 'bruno kasmir', 'nilai' => 90],
                ],
            ],

        ];
        return view('pages.mahasiswa', ['mahasiswa' => $a]);
    }
}
