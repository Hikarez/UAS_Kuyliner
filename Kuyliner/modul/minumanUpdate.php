<?php
require "includes/config.php";
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_minuman WHERE id_minuman=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}

// Skrip Proses Update
// cek apakah tombol update sudah diklik atau blum?
if (isset($_POST['update'])) {
    $id2 = $_POST['id'];
    $nama_minuman = $_POST['nama_minuman'];
    $daerah_minuman = $_POST['daerah_minuman'];
    // update data
    $query2 = "UPDATE tbl_minuman SET nama_minuman='$nama_minuman',
daerah_minuman='$daerah_minuman' WHERE id_minuman='$id2'";
    $sql2 = mysqli_query($conn, $query2);
    // apakah proses update berhasil?
    if ($sql2) {
        echo "<script>window.alert('Data berhasil diupdate!');
window.location='?page=minuman';</script>";
    } else {
        echo "<script>window.alert('Gagal update data!');
window.location='?page=minuman';</script>";
    }
}
?>
<div class="p-4">
    <div class="d-flex justify-content-center">
        <div class="row-12 w-75">
            <div class="card bg-dark text-light border-secondary mb-4 card-outline">
                <div class="card-header">
                    <h5 class="m-0">Update Data Daftar Minuman</h5>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <!-- menampung nilai id yang akan di edit -->
                        <input type="hidden" name="id" value="<?=

                                                                $data['id_minuman'] ?>" />

                        <div class="row">
                            <div class="mb-3">
                                <label for="formGroupExampleInput"

                                    class="form-label">Nama Minuman</label>

                                <input type="text" class="form-control bg-dark text-light border-secondary"

                                    name="nama_minuman"

                                    value="<?= $data['nama_minuman'] ?>" />
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2"

                                    class="form-label">Daerah Minuman</label>

                                <input type="text" class="form-control bg-dark text-light border-secondary"

                                    name="daerah_minuman" name="daerah_minuman"

                                    value="<?= $data['daerah_minuman'] ?>" />
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" name="update" class="btn

btn-success waves-effect waves-light mx-2"

                                style="width: 6em;

height:2.4em">Update</button>

                            <a class="btn btn-primary" href="?page=minuman"

                                role="button"

                                style="width: 6em; height:2.4em">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>