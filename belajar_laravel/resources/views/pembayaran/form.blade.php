{{ csrf_field() }}
<div class="form-group">
    <label for="tgl_bayar" class="col-sm-2 control-label">Tanggal Bayar</label>
    <div class="col-sm-3">
        <input type="text" name="tgl_bayar" id="tgl_bayar" class="form-control" value="{{ $tgl_bayar ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="id_kelas" class="col-sm-2 control-label">Siswa</label>
    <div class="col-sm-10">
        <select name="nisn" class="form-control">
            @foreach($siswa as $item)
            <option value="{{ $item->nisn }}" {{ ( ($nisn??'')==$item->nisn) ? 'selected' : '' }}>
                {{ $item->options }}
            </option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <label for="jumlah_bayar" class="col-sm-2 control-label">Jumlah Bayar</label>
    <div class="col-sm-5">
        <input type="number" name="jumlah_bayar" class="form-control" value="{{ $jumlah_bayar ?? '' }}">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('pembayaran.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>