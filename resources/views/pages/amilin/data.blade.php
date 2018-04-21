<div class="">
    <h2>Table Data Amilin</h2>
    <hr>
    <div class="table-responsive">
    <table class="table">
        <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Id User</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Email</th>
            <th>Hp</th>
            <th>Flag</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $datas)
            <tr>
                <th>{{ $datas->id }}</th>
                <th>{{ $datas->kode }}</th>
                <th>{{ $datas->nama }}</th>
                <th>{{ $datas->user_id }}</th>
                <th>{{ $datas->alamat }}</th>
                <th>{{ $datas->gender }}</th>
                <th>{{ $datas->email }}</th>
                <th>{{ $datas->hp }}</th>
                <th>{{ $datas->flag }}</th>
                <td>
                    <form action="{{ route('amilin.destroy', $datas->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="#" name="btnEdit" id="btnEdit" data-toggle="modal" data-target="#exampleModal" data-kodes="{{$datas->kode}}" data-ids="{{$datas->id}}" data-namas="{{$datas->nama}}" data-idusers="{{$datas->user_id}}" data-alamats="{{$datas->alamat}}" data-genders="{{$datas->gender}}" data-emails="{{$datas->email}}" data-hps="{{$datas->hp}}" data-flags="{{$datas->flag}}" class="btn btn-sm btn-primary" style="width: 100px">Edit</a>
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')" style="width: 100px">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('amilin.update', 1) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control id" name="ids" required="required">
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" class="form-control kode" name="kode" required="required">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control nama" name="nama" required="required">
                    </div>
                    <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" class="form-control id_user" name="id_user" required="required">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control alamat" name="alamat" required="required" style="resize: none;"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control gender" name="gender">
                            <option value="Laki Laki">Laki Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control email" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <label for="hp">No Hp</label>
                        <input type="text" class="form-control hp" name="hp" required="required">
                    </div>
                    <div class="form-group">
                        <label for="flag">Flag</label>
                        <select class="form-control flag" name="flag">
                            <option value="1">Active</option>
                            <option value="0">Non Active</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Update</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var kode = button.data('kodes')
        var nama = button.data('namas')
        var id_user = button.data('idusers')
        var alamat = button.data('alamats')
        var gender = button.data('genders')
        var email = button.data('emails')
        var hp = button.data('hps')
        var flag = button.data('flags')
        var id = button.data('ids')
        var modal = $(this)

        modal.find('.modal-body .kode').val(kode)
        modal.find('.modal-body .nama').val(nama)
        modal.find('.modal-body .id_user').val(id_user)
        modal.find('.modal-body .alamat').val(alamat)
        modal.find('.modal-body .gender').val(gender)
        modal.find('.modal-body .email').val(email)
        modal.find('.modal-body .hp').val(hp)
        modal.find('.modal-body .flag').val(flag)
        modal.find('.modal-body .id').val(id)
    })
</script>