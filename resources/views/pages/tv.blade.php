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
            Data TV
        </legend>
        @foreach ($tv as $tp)
            @foreach ($tp['statiun'] as $statiun)
                <li>{{ $statiun['tv'] }}</li>

                {{-- Televisi : {{ $statiun['tv'] }} <br> --}}
                Acara : {{ $statiun['acara'] }} <br>
                Jam : {{ $statiun['jam'] }} <br>
                Tanggal : {{ $statiun['tanggal'] }}
                <hr>
            @endforeach
        @endforeach
    </fieldset>


</body>

</html>
