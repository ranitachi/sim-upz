<div class="container-fluid">
    <h2>Input Data jenis Infak</h2>
    <hr>
    <form action="{{ route('jenis-infak.store') }}" method="POST" >
        {{ csrf_field() }}
        <div class="form-group">
            <label for="kode">Kode</label>
            <input type="text" class="form-control kode" name="kode" required="required">
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control jenis" name="jenis" required="required">
        </div>
        <div class="form-group">
            <label for="desc">Deskripsi</label>
            <textarea class="form-control desc" name="desc" required="required" style="resize: none;"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
        </div>
    </form>
</div>