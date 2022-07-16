<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body bgcolor="lime">
    <fieldset>
        <legend>Data Post</legend>
        <br>
        <marquee behavior="12" direction="12">
            <table border="1">
                <tr>
                    <th>Nomor</th>
                    <th>Judul</th>
                    <th>Konten</th>
                </tr>
                @php $no = 1; @endphp
                @foreach ($post as $data)
                    <tr>
                        <td>{{ $no++ }} </td>
                        <td>{{ $data->title }} </td>
                        <td>{{ $data->content }} </td>
                    </tr>
                @endforeach
        </marquee>

        </table>
    </fieldset>

</body>

</html>
