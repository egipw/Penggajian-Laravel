<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Laporan Gaji Honor</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
            <div style="font-family:Arial; font-size:12px;">
                <center><h2>LAPORAN GAJI HONOR PEGAWAI SMP IT FITRAH INSANI</h2>
              </center>  
            </div>
            <br>
    <table class="tg">
        
        <tr>
            <th>No.</th>
                            <th class="tg-3wr7">Tanggal Gaji Honor</th> 
                            <th class="tg-3wr7">Nama Pegawai</th>                  
                            <th class="tg-3wr7">Honor Gaji</th>
                            <th class="tg-3wr7">Nominal</th> 
                            <th class="tg-3wr7">Paraf</th>                         
            </tr>
    
    
        <?php $no = 1; ?>
                        @foreach($data as $data)
                        <tr>
                            <td><?php echo $no++; ?></td>
                            
                            <td class="tg-rv4w" width="20%">{{$data->tanggal_honor}}</td>
                            <td class="tg-rv4w" width="20%">{{$data->pegawai['nama']}}</td>
                                                     
                            <td class="tg-rv4w" width="20%">{{$data->jenis_honor}}</td>
                         
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->nominal, 0, ',','.')}}</td>
                            <td></td>        
                            </td>
        </tr>
        @endforeach
   
    </table>
</body>
</html>