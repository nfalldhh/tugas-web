{{ csrf_field() }}
<div class="form-group">
    <label for="tahun" class="col-sm-2 control-label">Tahun</label>
    <div class="col-sm-2">
        <input type="number" size="4" name="tahun" class="form-control" value="{{ $tahun ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="nominal" class="col-sm-2 control-label">Nominal</label>
    <div class="col-sm-5">
        <input type="number" name="nominal" class="form-control" value="{{ $nominal ?? '' }}">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
        <a href="{{ route('spp.index') }}" class="btn btn-primary" role="button">Batal</a>
    </div>
</div>