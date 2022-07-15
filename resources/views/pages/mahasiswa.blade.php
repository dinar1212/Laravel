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
        @foreach ($mahasiswa as $kuliah)
            @php
                $total = 0;
            @endphp
            Nama Dosen : {{ $kuliah['dosen'] }} <br>
            Mata Kuliah : {{ $kuliah['matkul'] }} <br>
            Mahasiswa : <br>
            @foreach ($kuliah['maha'] as $maha)
                <li>{{ $maha['nama'] }} <br>
                    Nilai : {{ $maha['nilai'] }}
                </li>
                <hr>
                @php $total += $maha['nilai'] @endphp
            @endforeach
            @php $rata = $total / count($kuliah['maha']) @endphp
            Total Nilai : {{ $total }} <br>
            Rata Rata : {{ $rata }} <br>
            <hr>
        @endforeach

    </fieldset>
</body>

</html>
