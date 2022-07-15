<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>
            Data mahasiswa
        </legend>
        @foreach ($raport as $isi)
            @php
                $total = 0;
            @endphp

            Nama : {{ $isi['nama'] }} <br>

            Jurusan : {{ $isi['jurusan'] }} <br>

            @foreach ($isi['mata'] as $mapel)
                Pelajaran : {{ $mapel['mapel'] }} <br>
                Nilai : {{ $mapel['nilai'] }} <br>
                @php $total += $mapel['nilai'] @endphp
            @endforeach
            @php $rata = $total / count($isi['mata']) @endphp
            Total Nilai : {{ $total }} <br>
            Rata Rata : {{ $rata }} <br>

            @php
                $grade;
                if ($rata >= 85) {
                    $grade = 'A';
                } elseif ($rata >= 75) {
                    $grade = 'B';
                } elseif ($rata >= 60) {
                    $grade = 'C';
                } elseif ($rata >= 50) {
                    $grade = 'D';
                } elseif ($rata >= 49) {
                    $grade = 'E';
                } else {
                    $grade = 0;
                }
            @endphp
            <br>
            Grade : {{ $grade }} <br>
            <hr>
        @endforeach

    </fieldset>
</body>

</html>
