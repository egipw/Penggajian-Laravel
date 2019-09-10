<!DOCTYPE html>
<html>
<head>
    <title>Slip Gaji</title>
    <center><h2>SLIP GAJI PEGAWAI <br>SMP IT FITRAH INSANI</h2></center>
    <hr>
    <link href=" {{ asset ('public bootstrap/css/
bootstrap.min.css') }} "rel="stylesheet">
    <style type="text/css">
 * {
     font-family: "Times";
     font-size: 12px;
     
    }
</style>
</head>
<body>
    <table class="table">
        <tbody>
            <tr>
                <td><strong>Pegawai</strong></td>
                <td><strong>: {{$data->nama}}</strong></td>
                <td><strong>( {{$data->nip}} )</strong></td>
            </tr>
            <tr>
                <td><strong></strong></td>
                <td><strong>: {{$data->jabatan}}</strong></td> <br><br>
                <td><strong>( {{$data->keterangan}} )</strong></td> <br><br> 
            </tr> 
            <tr>
                <td><strong>Tanggal</strong></td>
                <td><strong>: {{$data->tanggal_gajian}}</strong></td>
            </tr>
            <tr>
                    <td></td><br>
                </tr> 
                
            <tr>
                <td>Gaji Pokok</td>
                <td>: Rp. {{number_format($data->gapok, 0, ',','.')}}</td>
            </tr>  
            <tr>
                <td>T. Keluarga</td>
                <td>: Rp. {{number_format($data->keluarga, 0, ',','.')}}</td>
                <td>T. Kinerja</td>
                <td>: Rp. {{number_format($data->kinerja, 0, ',','.')}} x</td>
                <td>{{$data->jmlh_kinerja}} hari</td>

            </tr>
            <tr>
                <td>T. Jabatan</td>
                <td>: Rp. {{number_format($data->tjabatan, 0, ',','.')}}</td>
                <td>T. Transportasi</td>
                <td>: Rp. {{number_format($data->transportasi, 0, ',','.')}} x</td>
                <td>{{$data->jmlh_transport}} hari</td>
            </tr>
            <tr>
                <td>P. Kesehatan</td>
                <td>: Rp. {{number_format($data->kesehatan, 0, ',','.')}}</td>
                <td>T. Fungsional</td>
                <td>: Rp. {{number_format($data->fungsional, 0, ',','.')}}</td>
            </tr>

            <tr>
                <td>P. Pensiun</td>
                <td>: Rp. {{number_format($data->pensiun, 0, ',','.')}}</td>
                <td>T. GTT-PTT</td>
                <td>: Rp. {{number_format($data->gtt, 0, ',','.')}}</td>
            </tr>

            <tr>
                <td>Potongan Lain</td>
                <td>: Rp. {{number_format($data->potonganlain, 0, ',','.')}}</td>
            </tr>
        </tbody>
    </table>


    <table align="left">      
        <tr>
            <td>Total</td>
            <td>: Rp. {{number_format($data->total, 0, ',','.')}}</td>
        </tr>
        <tr>
            <td>Jumlah Potongan</td>
            <td>: Rp. {{number_format($data->jumlahpotongan, 0, ',','.')}}</td>
        </tr>
        <tr>
            <td><strong>Jumlah Gaji Bersih</strong></td>
            <td><strong>: Rp. {{number_format($data->total_bersih, 0, ',','.')}}</strong></td>
            
        </tr>
    </table>
    


    <table  align="center">
        <tbody>
         <tr>
            <td><strong></strong></td>
            <td>Ttd. Bendahara</td>
            <td>&nbsp;</td>
        </tr>
        </tbody>
    </table>
    <table  align="center">
        <tbody>
         <tr>
            <td><strong></strong></td>
            <td> </td>
        </tr>
        </tbody>
    </table>
    <table  align="center">
        <tbody>
         <tr>
            <td><strong></strong></td>
            <td> </td>
        </tr>
        </tbody>
    </table>
    <table  align="center">
        <tbody>
         <tr>
            <td><strong></strong></td>
            <td> </td>
        </tr>
        </tbody>
    </table>
    <table  align="center">
        <tbody>
         <tr>
            <td><strong></strong></td>
            <td>Riska</td>
        </tr>
        </tbody>
    </table>
</body>
</html>