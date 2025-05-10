<!-- Modal Tambah Barang -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title m-0 font-weight-bold text-primary" id="inputModalLabel">Tambah Barang</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="/admin/service/bukuMenuUpdate.php" method="POST">
            <div class="modal-body">
                <div class="form-group">
                    <label for="namaBarang2">Nama barang</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Barang" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi2">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi"></textarea>
                </div>
                <div class="form-group">
                    <label for="kategori2">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <option value="" hidden></option>
                        <option value="3">Kancing</option>
                        <option value="2">Kain</option>
                        <option value="1">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga2">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" required>
                </div>
                <div class="form-group">
                    <label for="jumlah2">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" required>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-info">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
