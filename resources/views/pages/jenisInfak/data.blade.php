<div class="container-fluid">
    <h2>Table Data Jenis Infak</h2>
    <hr>
    <table class="table">
        <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Jenis</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $datas)
            <tr>
                <th>{{ $datas->id }}</th>
                <th>{{ $datas->kode }}</th>
                <th>{{ $datas->jenis }}</th>
                <th>{{ $datas->desc }}</th>
                <td>
                    <form action="{{ route('jenis-infak.destroy', $datas->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="#" name="btnEdit" id="btnEdit" data-toggle="modal" data-target="#exampleModal" data-kodes="{{$datas->kode}}" data-id="{{$datas->id}}" data-jenis="{{$datas->jenis}}" data-desc="{{$datas->desc}}" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
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
                <form action="{{ route('jenis-infak.update', 1) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control id" name="id" required="required">
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
        var jenis = button.data('jenis')
        var desc = button.data('desc')
        var id = button.data('id')
        var modal = $(this)

        modal.find('.modal-body .id').val(id)
        modal.find('.modal-body .kode').val(kode)
        modal.find('.modal-body .jenis').val(jenis)
        modal.find('.modal-body .desc').val(desc)
    })
</script>