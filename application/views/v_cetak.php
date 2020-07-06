<!DOCTYPE html><html lang="en"><head><title>Cetak Pembayaran</title></head><body style="font-family:Times New Roman;font-size:12px">
<center><h1>Cetak Pembayaran</h1></center>
<table border="1">
    <tr>
      <th style="vertical-align:middle;text-align:center;width:5%" rowspan=2>No</th>
      <th style="vertical-align:middle;text-align:center;width:5%;" rowspan=2>ID</td>
      <th style="vertical-align:middle;text-align:center;width:10%;" rowspan=2>Nama Pelanggan</th>
      <th style="vertical-align:middle; text-align:center;width:20%;" colspan=5>Hasil Pembacaan Meter Pelanggan</th>
      <th style="vertical-align:middle; text-align:center;width:20%;" colspan=5>Tagihan Pelanggan</th>
      <th style="vertical-align:middle;text-align:center;width:5%;" rowspan=2>Tarif </td>
      <th style="vertical-align:middle;text-align:center;width:5%;" rowspan=2>Beban</th>
      <th style="vertical-align:middle; text-align:center;width:30%;" colspan=3>Harga Per Meter</th>
    </tr>
    <tr>
      <th style="text-align:center;">Meter Awal</th>
      <th style="text-align:center;">Meter Akhir</th>
      <th style="text-align:center;">0 - 10</th>
      <th style="text-align:center;">11 - 50 </th>
      <th style="text-align:center;"> >50 </th>
      <th style="text-align:center;">Total Pemakaian</th>
      <th style="text-align:center;">Tagihan Gol 1</th>
      <th style="text-align:center;">Tagihan Gol 2</th>
      <th style="text-align:center;">Tagihan Gol 3 </th>
      <th style="text-align:center;"> Total Tagihan </th>
      <th style="text-align:center;">0 - 10</th>
      <th style="text-align:center;">11 - 50 </th>
      <th style="text-align:center;"> >50 </th>
    </tr>
  <?php
    $no = 1;
    foreach ($record as $data){
  ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= $data->no_pelanggan ?></td>
      <td><?= $data->nama_lengkap ?></td>
      <td><?= $data->mawal ?></td>
      <td><?= $data->makhir ?></td>
      <td><?= $data->gol1 ?></td>
      <td><?= $data->gol2 ?></td>
      <td><?= $data->gol3 ?></td>
      <td><?= $data->pemakaian ?></td>
      <td><?= @$total_gol1 = $data->gol1 * $data->h_gol1 ?></td>
      <td><?= @$total_gol2 = $data->gol2 * $data->h_gol2 ?></td>
      <td><?= @$total_gol3 =  $data->gol3 * $data->h_gol3 ?></td>
      <td><?= ($total_gol1 + $total_gol2 + $total_gol3) + $data->biaya_adm ?></td>
      <td><?= $data->golongan ?></td>
      <td><?= $data->biaya_adm ?></td>
      <td><?= $data->h_gol1 ?></td>
      <td><?= $data->h_gol2 ?></td>
      <td><?= $data->h_gol3 ?></td>
    </tr>
  <?php } ?>
</table>
</body></html>
