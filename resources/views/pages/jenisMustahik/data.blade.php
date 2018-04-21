<div class="container-fluid">
    <h2>Table Data Mustahik</h2>
    <hr>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Provinsi ID</th>
                <th>Kabupaten Kota ID</th>
                <th>Kecamatan ID</th>
                <th>Kelurahan ID</th>
                <th>Kode Pos</th>
                <th>Gender</th>
                <th>No Identitas</th>
                <th>jenis Identitas</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Asnaf ID</th>
                <th>Deskripsi</th>
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
                    <th>{{ $datas->alamat }}</th>
                    <th>{{ $datas->provinsi_id }}</th>
                    <th>{{ $datas->kabupaten_kota_id }}</th>
                    <th>{{ $datas->kecamatan_id }}</th>
                    <th>{{ $datas->kelurahan_id }}</th>
                    <th>{{ $datas->kodepos }}</th>
                    <th>{{ $datas->gender }}</th>
                    <th>{{ $datas->no_indentitas }}</th>
                    <th>{{ $datas->jenis_identitas }}</th>
                    <th>{{ $datas->tempat_lahir }}</th>
                    <th>{{ $datas->tanggal_lahir }}</th>
                    <th>{{ $datas->asnaf_id }}</th>
                    <th>{{ $datas->desc }}</th>
                    <th>{{ $datas->flag }}</th>
                    <td>
                        <form action="{{ route('jenis-mustahik.destroy', $datas->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="#" style="width: 100px" name="btnEdit" id="btnEdit" data-toggle="modal" data-target="#exampleModal" data-ids="{{$datas->id}}" data-kodes="{{$datas->kode}}" data-namas="{{$datas->nama}}" data-alamats="{{$datas->alamat}}" data-provinsis="{{$datas->provinsi_id}}" data-kabupatens="{{$datas->kabupaten_kota_id}}" data-kecamatans="{{$datas->kecamatan_id}}" data-kelurahans="{{$datas->kelurahan_id}}" data-kodepos="{{$datas->kodepos}}" data-genders="{{$datas->gender}}" data-noidentitas="{{$datas->no_indentitas}}" data-jenisidentitas="{{$datas->jenis_identitas}}" data-tempatlahir="{{$datas->tempat_lahir}}" data-tanggallahir="{{$datas->tanggal_lahir}}" data-asnafid="{{$datas->asnaf_id}}" data-desc="{{$datas->desc}}" data-flag="{{$datas->flag}}" class="btn btn-sm btn-primary">Edit</a>
                            <button class="btn btn-sm btn-danger" style="width: 100px" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
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
                <form action="{{ route('jenis-mustahik.update', 1) }}" method="POST">
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
                        <label for="idasnaf">Asnaf ID</label>
                        <input type="text" class="form-control idasnaf" name="idasnaf" required="required">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control desc" name="desc" required="required" style="resize: none;"></textarea>
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
        var id = button.data('ids')
        var kode = button.data('kodes')
        var nama = button.data('namas')
        var alamat = button.data('alamats')
        var provinsi = button.data('provinsis')
        var kabupaten = button.data('kabupatens')
        var kecamatan = button.data('kecamatans')
        var kelurahan = button.data('kelurahans')
        var kodepos = button.data('kodepos')
        var gender = button.data('genders')
        var noidentitas = button.data('noidentitas')
        var jenisidentitas = button.data('jenisidentitas')
        var tempatlahir = button.data('tempatlahir')
        var tanggallahir = button.data('tanggallahir')
        var asnafid = button.data('asnafid')
        var desc = button.data('desc')
        var flag = button.data('flag')
        var modal = $(this)

        modal.find('.modal-body .kode').val(kode)
        modal.find('.modal-body .nama').val(nama)
        modal.find('.modal-body .alamat').val(alamat)
        modal.find('.modal-body .provinsi').val(provinsi)
        modal.find('.modal-body .kabupaten').val(kabupaten)
        modal.find('.modal-body .kecamatan').val(kecamatan)
        modal.find('.modal-body .kelurahan').val(kelurahan)
        modal.find('.modal-body .kodepos').val(kodepos)
        modal.find('.modal-body .gender').val(gender)
        modal.find('.modal-body .noidentitas').val(noidentitas)
        modal.find('.modal-body .jenisidentitas').val(jenisidentitas)
        modal.find('.modal-body .tempatlahir').val(tempatlahir)
        modal.find('.modal-body .tgllahir').val(tanggallahir)
        modal.find('.modal-body .idasnaf').val(asnafid)
        modal.find('.modal-body .desc').val(desc)
        modal.find('.modal-body .flag').val(flag)
        modal.find('.modal-body .id').val(id)
    })
</script>