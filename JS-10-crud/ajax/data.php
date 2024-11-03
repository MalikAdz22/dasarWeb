<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    include 'koneksi.php';
    $no = 1;
    $query = "SELECT * FROM anggota ORDER BY id DESC";
    $sql = $db1->prepare($query);
    $sql->execute();
    $resl = $sql->get_result();
    if ($resl->num_rows > 0) {
        while ($row = $resl->fetch_assoc()) {
            $id = $row['id'];
            $nama = $row['nama'];
            $jenis_kelamin = ($row['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan'; // Perbaikan sintaks
            $alamat = $row['alamat'];
            $no_telp = $row['no_telp'];
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $jenis_kelamin; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $no_telp; ?></td>
                <td>
                    <button id="<?php echo $id; ?>" class="btn btn-success btn-sm edit_data"> <i class="fa fa-edit"></i> Edit </button>
                    <button id="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus_data"> <i class="fa fa-trash"></i> Hapus </button>
                </td>
            </tr>
    <?php
        }
    } else {
    ?>
        <tr>
            <td colspan='7'>Tidak ada data ditemukan</td>
        </tr>
    <?php
    }
    ?>
</tbody>
</table>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
    
    function reset() {
        document.getElementById("err_nama").innerHTML = "";
        document.getElementById("err_jenis_kelamin").innerHTML = "";
        document.getElementById("err_alamat").innerHTML = "";
        document.getElementById("err_no_telp").innerHTML = "";
    }

    $(document).on('click', '.edit_data', function() {
    $('html, body').animate({ scrollTop: 0}, 'slow');
    var id = $(this).attr('id'); // Mendapatkan ID dari tombol yang diklik
    $.ajax({
        type: 'POST',
        url: "get_data.php", // Pastikan file ini berfungsi dengan baik
        data: {id:id},
        dataType: 'json',
        success: function (response) {
            reset(); // Reset pesan kesalahan
            $('html, body').animate({ scrollTop: 30 }, 'slow');
            document.getElementById("id").value = response.id; // Mengisi ID
            document.getElementById("nama").value = response.nama; // Mengisi Nama
            document.getElementById("alamat").value = response.alamat; // Mengisi Alamat
            document.getElementById("no_telp").value = response.no_telp; // Mengisi No Telepon
            
            // Mengisi jenis kelamin
            if (response.jenis_kelamin == "L") {
                document.getElementById("jenkel1").checked = true; // Laki-laki
            } else {
                document.getElementById("jenkel2").checked = true; // Perempuan
            }
        },
        error: function (response) {
            console.log(response.responseText); // Log error jika ada
        }
    });
});


$(document).on('click', '.hapus_data', function() {
    var id = $(this).attr('id');
    
    $.ajax({
        type: 'POST',
        url: "hapus_data.php",
        data: {id:id},
        success: function(response) {
            console.log(response); // Tambahkan log untuk melihat respons
            if (response.success) {
                // Memuat ulang data setelah berhasil dihapus
                $('.data').load("data.php");
            } else {
                alert(response.error); // Tampilkan pesan kesalahan jika ada
            }
        },
        error: function (response) {
            console.log(response.responseText);
        }
    });
});
</script>