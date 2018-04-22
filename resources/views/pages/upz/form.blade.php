<div class="container-fluid" >
    <h2>Input Data UPZ</h2>
    <hr>
    <form action="{{ route('upz.store') }}" method="POST" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control kode" name="kode" required="required">
        </div>
        <div class="form-group">
            <label for="nama">Nama Upz</label>
            <input type="text" class="form-control namaUpz" name="namaUpz" required="required">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control alamat" name="alamat" required="required" style="resize: none;"></textarea>
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi ID</label>
            <input type="number" class="form-control provinsi" name="provinsi" required="required">
        </div>
        <div class="form-group">
            <label for="kabupaten">Kabupaten Kota ID</label>
            <input type="number" class="form-control kabupaten" name="kabupaten" required="required">
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control kecamatan" name="kecamatan" required="required">
        </div>
        <div class="form-group">
            <label for="kelurahan">Kelurahan ID</label>
            <input type="number" class="form-control kelurahan" name="kelurahan" required="required">
        </div>
        <div class="form-group">
            <label for="kodepos">Kode Pos</label>
            <input type="number" class="form-control kodepos" name="kodepos" required="required">
        </div>
        <div class="form-group">
            <label for="pimpinan">Pimpinan</label>
            <input type="text" class="form-control pimpinan" name="pimpinan" required="required">
        </div>
        <div class="form-group">
            <label for="notelp">No Telepon</label>
            <input type="text" class="form-control notelp" name="notelp" required="required">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control email" name="email" required="required">
        </div>
        <div class="form-group">
            <label for="longtitude">Longititude</label>
            <input type="text" class="form-control tongtitude" name="longtitude" required="required">
        </div>
        <div class="form-group">
            <label for="latitude">Lattitude</label>
            <input type="text" class="form-control latitude" name="latitude" required="required">
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control website" name="website" required="required">
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea class="form-control desc" name="desc" required="required" style="resize: none;"></textarea>
        </div>
        <div class="form-group">
            <label for="flag">Flag</label>
            <select class="form-control" name="flag">
                <option value="1">Active</option>
                <option value="0">Non Active</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
    </form>
</div>