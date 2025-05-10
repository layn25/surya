<!-- Modal Tambah Pengguna -->
<div class="modal fade" id="tambahPenggunaModal" tabindex="-1" role="dialog" aria-labelledby="tambahPenggunaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0 font-weight-bold text-primary" id="tambahPenggunaModalLabel">Tambah Pengguna</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/admin/service/bukuMenuUpdate.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaBarang1">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="form-group">
                        <label for="namaBarang">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="namaBarang1">Password</label>
                        <input type="password" class="form-control" id="password" name="nama" placeholder="Masukkan Password" required>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Role</label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option value="" hidden></option>
                            <option value="3">Pengguna</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
