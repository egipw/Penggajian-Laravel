<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Laporan Penggajian</title>
        <body>
            <style type="text/css">
                .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
                .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                .tg .tg-3wr7{font-weight:bold;font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
                .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
            </style>
  
            <div style="font-family:Arial; font-size:12px;">
                <center><h2>LAPORAN PENGGAJIAN PEGAWAI SMP IT FITRAH INSANI<br></h2></center>

            </div>
            
            <br>
    <table class="tg">
        
        <tr>
            <th class="tg-3wr7">No.</th>
                            <th class="tg-3wr7">Tanggal Gajian</th>
                            <th class="tg-3wr7">NIP</th>                   
                            <th class="tg-3wr7">Nama Pegawai</th>
                            <th class="tg-3wr7">Jabatan</th>
                            <th class="tg-3wr7">Status</th>
                            <th class="tg-3wr7">Ket.</th>
                            <th class="tg-3wr7">Gaji Pokok</th>
                        
                            <th class="tg-3wr7">Tunjangan Keluarga</th>
                            <th class="tg-3wr7">Tunjangan Fungsioanl</th>
                            <th class="tg-3wr7">Tunjangan Jabatan</th>
                            <th class="tg-3wr7">Jumlah Transport</th>
                            <th class="tg-3wr7">Tunjangan Transportasi</th>
                            <th class="tg-3wr7">Jumlah Kinerja</th>
                            <th class="tg-3wr7">Tunjangan Kinerja</th>
                            <th class="tg-3wr7">Tunjangan GTT-PTT</th>
                            <th class="tg-3wr7">Potongan Kesehatan</th>                                    
                            <th class="tg-3wr7">Potongan Pensiun</th>
                            <th class="tg-3wr7">Potongan Lain</th>
                            <th class="tg-3wr7">Jumlah Total</th>
                            <th class="tg-3wr7">Jumlah Potongan</th>
                            <th class="tg-3wr7">Total GajiBersih</th>
                           
            </tr>
    
    
        <?php $no = 1; ?>
                        @foreach($data as $data)
                        <tr>
                            <td class="tg-rv4w" width="10%"><?php echo $no++; ?></td>
                            <td class="tg-rv4w" width="20%">{{$data->tanggal_gajian}}</td>
                            <td class="tg-rv4w" width="20%">{{$data->nip}}</td>                            
                            <td class="tg-rv4w" width="20%">{{$data->nama}}</td>
                            <td class="tg-rv4w" width="20%">{{$data->jabatan}}</td>
                            <td class="tg-rv4w" width="20%">{{$data->nama_status}}</td>
                            <td class="tg-rv4w" width="20%">{{$data->keterangan}}</td>
                            
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->gapok, 0, ',','.')}}</td>
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->keluarga, 0, ',','.')}}</td>
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->fungsional, 0, ',','.')}}</td>
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->tjabatan, 0, ',','.')}}</td>

                            <td class="tg-rv4w" width="20%">{{$data->jmlh_transport}} hari</td>

                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->transportasi, 0, ',','.')}}</td>                         
                            <td class="tg-rv4w" width="20%">{{$data->jmlh_kinerja}} hari</td>

                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->kinerja, 0, ',','.')}}</td> 
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->gtt, 0, ',','.')}}</td>                         
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->kesehatan, 0, ',','.')}}</td>                        
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->pensiun, 0, ',','.')}}</td>
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->potonganlain, 0, ',','.')}}</td>
                                                  
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->total, 0, ',','.')}}</td>
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->jumlahpotongan, 0, ',','.')}}</td>
                            <td class="tg-rv4w" width="20%">Rp. {{number_format($data->total_bersih, 0, ',','.')}}</td>
                                
        </tr>
        @endforeach
   
    </table>
</body>
</html>