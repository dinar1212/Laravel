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
            Data Belanja
        </legend>
        @foreach ($belanja as $beli)
            Nama : {{ $beli['nama'] }} <br>
            @php
                $total = 0;
            @endphp
            @foreach ($beli['belanja'] as $belanja)
                <li> Nama : {{ $belanja['barang'] }} <br> </li>
                &nbsp; &nbsp; &nbsp; Harga : Rp.{{ $belanja['harga'] }}

                @php
                    $total += $belanja['harga'];
                @endphp
            @endforeach <br><br>
            Total Harga : Rp.{{ $total }}
            @php
                $cashback;
                if ($total > 500000) {
                    $cashback = (10 / 100) * $total;
                } elseif ($total > 250000) {
                    $cashback = (5 / 100) * $total;
                } else {
                    $cashback = 0;
                }
            @endphp
            <br>
            Cashback : {{ $cashback }} <br>
            <b> Total Bayar : Rp.{{ $total - $cashback }} </b>
            <hr>
        @endforeach

    </fieldset>
</body>

</html>
