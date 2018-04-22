<div class="container-fluid">
    <h2>Input Data Kecamatan</h2>
    <hr>
    <form action="{{ route('kecamatan.store') }}" method="POST" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="idProvinsi">ID Kabupaten Kota</label>
            <input type="text" class="form-control kabupaten" name="kabupaten" required="required">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
    </form>
</div>