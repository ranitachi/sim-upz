<div class="container-fluid">
    <h2>Table Data Bank</h2>
    <hr>
    <table class="table">
        <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $datas)
            <tr>
                <th>{{ $datas->id }}</th>
                <th>{{ $datas->name }}</th>
                <th>{{ $datas->email }}</th>
                <td>
                    <form action="{{ route('akun.destroy', $datas->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <a href="#" name="btnEdit" id="btnEdit" data-toggle="modal" data-target="#exampleModal" data-names="{{$datas->name}}" data-emails="{{$datas->email}}" data-ids="{{$datas->id}}" class="btn btn-sm btn-primary">Edit</a>
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
                <form action="{{ route('akun.update', 1) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control id" name="ids" required="required">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control name" name="nama" required="required">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control email" name="email" required="required">
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
        var name = button.data('names')
        var email = button.data('emails')
        var id = button.data('ids')
        var modal = $(this)

        modal.find('.modal-body .name').val(name)
        modal.find('.modal-body .email').val(email)
        modal.find('.modal-body .id').val(id)
    })
</script>