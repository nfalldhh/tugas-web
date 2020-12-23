{{ csrf_field() }}
<div class="form-group">
    <label for="nisn" class="col-sm-2 control-label">NISN</label>
    <div class="col-sm-10">
        <input type="text" name="nisn" id="nisn" class="form-control" value="{{ $nisn ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="nis" class="col-sm-2 control-label">NIS</label>
    <div class="col-sm-10">
        <input type="text" name="nis" class="form-control" value="{{ $nis ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="nama" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
        <input type="text" name="nama" class="form-control" value="{{ $nama ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
        <input type="text" name="alamat" class="form-control" value="{{ $alamat ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="no_telp" class="col-sm-2 control-label">No Telp</label>
    <div class="col-sm-10">
        <input type="text" name="no_telp" class="form-control" value="{{ $no_telp ?? '' }}">
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        <input type="email" name="email" class="form-control" value="{{ $user->email ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" name="password" class="form-control" value="{{ $password ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="id_kelas" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
        <select name="id_kelas" class="form-control">
            @foreach($kelas as $item)
            <option value="{{ $item->id }}" {{ ( ($id_kelas??'')==$item->id) ? 'selected' : '' }}>
                {{ $item->nama_kelas }} - {{ $item->kompetensi_keahlian }}
            </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="id_spp" class="col-sm-2 control-label">SPP</label>
    <div class="col-sm-10">
        <select name="id_spp" class="form-control">
            @foreach($spp as $item)
            <option value="{{ $item->id }}" {{ ( ($id_spp??'')==$item->id) ? 'selected' : '' }}>
                {{ $item->tahun }} - {{ $item->nominal }}
            </option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('siswa.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>