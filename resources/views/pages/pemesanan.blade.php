<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table>

        <tr>
            <td>Makanan</td>
            <td>:</td>
            <td>{{ $a }} </td>
        </tr>
        @if ($a)
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    @if ($a === 'Mie goreng')
                        Rp.5000
                    @elseif($a === 'seblak')
                        Rp.7500
                    @elseif($a === 'nasi padang')
                        Rp.15000
                    @else
                        -
                    @endif
                </td>
            </tr>

        @endif
        <tr>
            <td>Minuman</td>
            <td>:</td>
            <td>{{ $b }} </td>
        </tr>
        @if ($b = null)
            <strong> {{ $b }} </strong>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    @if ($b === 'kopi')
                        Rp.500
                    @elseif($a === 'jus')
                        Rp.10000
                    @elseif($a === 'teh')
                        Rp.7500
                    @else
                        -
                    @endif
                </td>
            </tr>
        @endif

    </table>
</body>

</html>
