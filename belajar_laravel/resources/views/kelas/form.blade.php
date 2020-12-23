{{ csrf_field() }}
<div class="form-group">
    <label for="nama_kelas" class="col-sm-2 control-label">Nama Kelas</label>
    <div class="col-sm-10">
        <input type="text" name="nama_kelas" class="form-control" value="{{ $nama_kelas ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="kompetensi_keahlian" class="col-sm-2 control-label">Kompetensi Keahlian</label>
    <div class="col-sm-10">
        <input type="text" name="kompetensi_keahlian" class="form-control" value="{{ $kompetensi_keahlian ?? '' }}">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('kelas.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>