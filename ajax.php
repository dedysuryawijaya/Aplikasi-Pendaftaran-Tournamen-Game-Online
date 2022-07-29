<?php 
    include 'koneksi.php';
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM tim WHERE 
                                        nama like '%$keyword%' OR
                                        asal like '%$keyword%' OR
                                        nomor like '%$keyword%' ";
    $tim = query($query);



?>

<table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Pendaftaran</th>
                        <th scope="col">Nama tim</th>
                        <th scope="col">Asal kota/Kab</th>
                        <th scope="col">AKsi</th>
                    </tr>
                </thead>
                <?php $i = 1; foreach($tim as $key => $pg): ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $pg['nomor'] ?></td>
                        <td><?= $pg['nama'] ?></td>
                        <td><?= $pg['asal'] ?></td>
                        <td><a class="link-info" style="padding-right: 5px;" href="detailtim.php?i=<?php echo $pg['nomor']; ?>">Lihat</a><a class="link-danger" href="hapus.php?i=<?php echo $pg['nomor']; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a></td>
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>