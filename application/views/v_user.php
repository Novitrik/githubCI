<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Database Obat di Rumah Sakit </h1>
	<table border="1">
		<tr>
			<th>Kode Obat</th>
			<th>Nama Obat</th>
			<th>Jenis Obat</th>
      <th>Kategori</th>
      <th>Harga Obat</th>
      <th>Jumlah Obat</th>
		</tr>
		<?php foreach($obat as $u){ ?>
		<tr>
			<td><?php echo $u->kodeobat ?></td>
			<td><?php echo $u->namaobat ?></td>
			<td><?php echo $u->jenisobat ?></td>
      <td><?php echo $u->kategori ?></td>
      <td><?php echo $u->hargaobat ?></td>
      <td><?php echo $u->jumlahobat ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
