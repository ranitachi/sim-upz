<div class="container-fluid">
    <h2>Input Data Muzzaki</h2>
    <hr>
    <form action="{{ route('muzzaki.store') }}" method="POST" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control kode" name="kode" required="required">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control nama" name="nama" required="required">
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
            <label for="kabupaten">Kabupaten ID</label>
            <input type="number" class="form-control kabupaten" name="kabupaten" required="required">
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan ID</label>
            <input type="number" class="form-control kecamatan" name="kecamatan" required="required">
        </div>
        <div class="form-group">
            <label for="kelurahan">Kelurahan ID</label>
            <input type="number" class="form-control kelurahan" name="kelurahan" required="required">
        </div>
        <div class="form-group">
            <label for="kodepos">Kode Pos</label>
            <input type="text" class="form-control kodepos" name="kodepos" required="required">
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender">
                <option value="Laki Laki">Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="noidentitas">No Identitas</label>
            <input type="text" class="form-control noidentitas" name="noidentitas" required="required">
        </div>
        <div class="form-group">
            <label for="jenisidentitas">Jenis Identitas</label>
            <input type="text" class="form-control jenisidentitas" name="jenisidentitas" required="required">
        </div>
        <div class="form-group">
            <label for="tempatlahir">Tempat Lahir</label>
            <input type="text" class="form-control tempatlahir" name="tempatlahir" required="required">
        </div>
        <div class="form-group">
            <label for="tgllahir">Tanggal Lahir</label>
            <input type="date" class="form-control tgllahir" name="tgllahir" required="required">
        </div>
        <div class="form-group">
            <label for="notelp">No Telp</label>
            <input type="text" class="form-control notelp" name="notelp" required="required">
        </div>
        <div class="form-group">
            <label for="nohp">No Hp</label>
            <input type="text" class="form-control nohp" name="nohp" required="required">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control email" name="email" required="required">
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" class="form-control pekerjaan" name="pekerjaan" required="required">
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