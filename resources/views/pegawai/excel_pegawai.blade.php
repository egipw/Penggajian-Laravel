<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pegawai</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token}}">
        <input type="file" name="pegawai">
        <input type="submit" name="Import"></input>
    </form>

</body>
</html>