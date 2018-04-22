<div class="">
    <h2>Table Data UPZ</h2>
    <hr>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama UPZ</th>
                <th>Alamat</th>
                <th>Provinsi ID</th>
                <th>Kabupaten Kota ID</th>
                <th>Kecamatan ID</th>
                <th>Kelurahan ID</th>
                <th>kode Pos</th>
                <th>Pimpinan</th>
                <th>No Telepon</th>
                <th>Email</th>
                <th>Longitude</th>
                <th>Lattitude</th>
                <th>Website</th>
                <th>desc</th>
                <th>Flag</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $datas)
                <tr>
                    <th>{{ $datas->id }}</th>
                    <th>{{ $datas->kode }}</th>
                    <th>{{ $datas->nama_upz }}</th>
                    <th>{{ $datas->alamat }}</th>
                    <th>{{ $datas->provinsi_id }}</th>
                    <th>{{ $datas->kabupaten_kota_id }}</th>
                    <th>{{ $datas->kecamatan_id }}</th>
                    <th>{{ $datas->kelurahan_id }}</th>
                    <th>{{ $datas->kodepos }}</th>
                    <th>{{ $datas->pimpinan }}</th>
                    <th>{{ $datas->no_telp }}</th>
                    <th>{{ $datas->email }}</th>
                    <th>{{ $datas->longitude }}</th>
                    <th>{{ $datas->lattitude }}</th>
                    <th>{{ $datas->website }}</th>
                    <th>{{ $datas->desc }}</th>
                    <th>{{ $datas->flag }}</th>
                    <td>
                        <form action="{{ route('upz.destroy', $datas->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <a href="#" name="btnEdit" id="btnEdit" data-toggle="modal" data-target="#exampleModal" data-kode="{{$datas->kode}}" data-namaupz="{{$datas->nama_upz}}" data-alamat="{{$datas->alamat}}" data-provinsiid="{{$datas->provinsi_id}}" data-kabupatenkota="{{$datas->kabupaten_kota_id}}" data-kecamatanid="{{$datas->kecamatan_id}}" data-kelurahanid="{{$datas->kelurahan_id}}" data-kodepos="{{$datas->kodepos}}" data-pimpinan="{{$datas->pimpinan}}" data-notelp="{{$datas->no_telp}}" data-emails="{{$datas->email}}" data-longitude="{{$datas->longitude}}" data-lattitude="{{$datas->lattitude}}" data-website="{{$datas->website}}" data-desc="{{$datas->desc}}" data-flag="{{$datas->flag}}" data-id="{{$datas->id}}" class="btn btn-sm btn-primary" style="width: 100px">Edit</a>
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
                <form action="{{ route('upz.update', 1) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" readonly="readonly" class="form-control id" name="ids" required="required">
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
                        <label for="provinsi">Provinsi</label>
                        <input type="text" class="form-control provinsi" name="provinsi" required="required">
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten Kota</label>
                        <input type="text" class="form-control kabupaten" name="kabupaten" required="required">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control kecamatan" name="kecamatan" required="required">
                    </div>
                    <div class="form-group">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control kelurahan" name="kelurahan" required="required">
                    </div>
                    <div class="form-group">
                        <label for="kodepos">Kode Pos</label>
                        <input type="text" class="form-control kodepos" name="kodepos" required="required">
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
                        <input type="email" class="form-control emails" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <label for="longtitude">Longititude</label>
                        <input type="text" class="form-control longtitude" name="longtitude" required="required">
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
        var kode = button.data('kode')
        var namaupz = button.data('namaupz')
        var alamat = button.data('alamat')
        var provinsiid = button.data('provinsiid')
        var kabupatenkota = button.data('kabupatenkota')
        var kelurahanid = button.data('kelurahanid')
        var kecamatanid = button.data('kecamatanid')
        var kodepos = button.data('kodepos')
        var flag = button.data('flag')
        var pimpinan = button.data('pimpinan')
        var notelp = button.data('notelp')
        var email = button.data('emails')
        var longitude = button.data('longitude')
        var lattitude = button.data('lattitude')
        var website = button.data('website')
        var desc = button.data('desc')
        var id = button.data('id')
        var modal = $(this)

        modal.find('.modal-body .kode').val(kode)
        modal.find('.modal-body .namaUpz').val(namaupz)
        modal.find('.modal-body .alamat').val(alamat)
        modal.find('.modal-body .provinsi').val(provinsiid)
        modal.find('.modal-body .kabupaten').val(kabupatenkota)
        modal.find('.modal-body .kecamatan').val(kecamatanid)
        modal.find('.modal-body .kelurahan').val(kelurahanid)
        modal.find('.modal-body .kodepos').val(kodepos)
        modal.find('.modal-body .pimpinan').val(pimpinan)
        modal.find('.modal-body .notelp').val(notelp)
        modal.find('.modal-body .emails').val(email)
        modal.find('.modal-body .longtitude').val(longitude)
        modal.find('.modal-body .latitude').val(lattitude)
        modal.find('.modal-body .website').val(website)
        modal.find('.modal-body .desc').val(desc)
        modal.find('.modal-body .flag').val(flag)
        modal.find('.modal-body .id').val(id)
    })
</script>