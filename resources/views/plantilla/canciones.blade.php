<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de @yield('title') </title>
</head>
<body>
    
    <center>
    <table border=1 width="50%">
        <tr>
            <td colspan=2><center><b> @yield('title_table')</b</center></td>
        </tr>

        @foreach($canciones as $dato)
        <tr>
            
            <td> {{$dato}} </td>
            
        </tr>

    @foreach
        <tr>
            <td colspan=2><center><b> @yield('footer') </b</center></td>
        </tr>
    </table>
    </center>
    
</body>
</html>