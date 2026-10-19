<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('main.parent')
    @section('artikel')
    <form method="POST" action="/edpost">
        @csrf
        <table>
                <tbody>
                    <tr>
                        <td>
                            <label for="nim">Masukkan nim:</label>
                        </td>
                        <td>
                            <input type="text" name="nim">
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <label for="nim">Masukkan nama:
                            </label>
                        </td>
                        <td>
                            <input type="text" name="nama">
                        </td>
                    </tr>
                    <td>
                        <button type="submit">Submit</button>
                    </td>
                </tbody>
            </table>
        </form>
    @endsection
</body>
</html>