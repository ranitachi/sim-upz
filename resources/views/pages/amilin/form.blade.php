<div class="container-fluid" >
    <h2>Input Data Amilin</h2>
    <hr>
    <form action="{{ route('amilin.store') }}" method="POST" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control" name="kode" required="required">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" required="required">
        </div>
        <div class="form-group">
            <label for="id_user">Id User</label>
            <input type="text" class="form-control" name="id_user" required="required">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" required="required" style="resize: none;"></textarea>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender">
                <option value="Laki Laki">Laki Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required="required">
        </div>
        <div class="form-group">
            <label for="hp">No Hp</label>
            <input type="text" class="form-control" name="hp" required="required">
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