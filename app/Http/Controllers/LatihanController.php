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

    public function tv()
    {
        $a = [
            [
                'statiun' => [

                    ['tv' => 'Net TV', 'acara' => 'Ini Talkshow', 'jam' => '18:00', 'tanggal' => '20-08-2022'],
                    ['tv' => 'TVRI', 'acara' => 'Berita', 'jam' => '07:00', 'tanggal' => '21-08-2002'],
                    ['tv' => 'BEINSPORT', 'acara' => 'Berita sport', 'jam' => '08:00', 'tanggal' => '22-08-2022'],
                    ['tv' => 'Ochannel', 'acara' => 'Si Bolang', 'jam' => '13:00', 'tanggal' => '01-08-2022'],
                    ['tv' => 'Indosiar', 'acara' => 'Upin & Ipun', 'jam' => '23:00', 'tanggal' => '20-08-2000'],
                ],
            ],

        ];
        return view('pages.tv', ['tv' => $a]);
    }
    public function belanja()
    {
        $a = [

            ['nama' => 'Alfian',
                'belanja' => [

                    ['barang' => 'Sepatu', 'harga' => 250000],
                    ['barang' => 'Baju', 'harga' => 100000],
                    ['barang' => 'Celana', 'harga' => 150000],
                    ['barang' => 'Kupluk', 'harga' => 100000],
                ],
            ],

            ['nama' => 'Dida',
                'belanja' =>
                [
                    ['barang' => 'Topi', 'harga' => 100000],
                    ['barang' => 'Baju', 'harga' => 75000],
                    ['barang' => 'Celana', 'harga' => 125000],
                ],
            ],

        ];
        return view('pages.belanja', ['belanja' => $a]);
    }
    public function raport()
    {
        $a = [

            ['nama' => 'Agus',
                'jurusan' => 'TKRO',
                'mata' => [

                    ['mapel' => 'indonesia', 'nilai' => 80],
                    ['mapel' => 'inggris', 'nilai' => 97],
                    ['mapel' => 'produktif', 'nilai' => 67],
                    ['mapel' => "mtk", 'nilai' => 100],

                ],

            ],
            ['nama' => 'Mahmud',
                'jurusan' => 'TKRO',
                'mata' => [

                    ['mapel' => 'indonesia', 'nilai' => 78],
                    ['mapel' => 'inggris', 'nilai' => 86],
                    ['mapel' => 'produktif', 'nilai' => 90],
                    ['mapel' => "mtk", 'nilai' => 67],

                ],

            ],
            ['nama' => 'Rendi',
                'jurusan' => 'TSM',
                'mata' => [

                    ['mapel' => 'indonesia', 'nilai' => 90],
                    ['mapel' => 'inggris', 'nilai' => 50],
                    ['mapel' => 'produktif', 'nilai' => 65],
                    ['mapel' => "mtk", 'nilai' => 78],

                ],

            ],
            ['nama' => 'firman',
                'jurusan' => 'RPL',
                'mata' => [

                    ['mapel' => 'indonesia', 'nilai' => 78],
                    ['mapel' => 'inggris', 'nilai' => 90],
                    ['mapel' => 'produktif', 'nilai' => 56],
                    ['mapel' => "mtk", 'nilai' => 78],

                ],

            ],
            ['nama' => 'Abdul',
                'jurusan' => 'RPL',
                'mata' => [

                    ['mapel' => 'indonesia', 'nilai' => 89],
                    ['mapel' => 'inggris', 'nilai' => 67],
                    ['mapel' => 'produktif', 'nilai' => 80],
                    ['mapel' => "mtk", 'nilai' => 90],

                ],

            ],

        ];
        return view('pages.raport', ['raport' => $a]);
    }

}
