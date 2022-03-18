<div class="form-group">
    <input type="text" name="nip" id="nip" class="form-control form-control-sm" readonly placeholder="NIP">
</div>
<div class="form-group">
    <input type="text" name="nama" id="nama" class="form-control form-control-sm" readonly placeholder="Nama">
</div>
<hr>
<div class="form-group">
    <label class="d-block">Status ASN</label>
    @php
        $status = ['Aktif', 'Tidak Aktif'];
    @endphp
    <select name="status" id="status" class="form-control form-control-sm select2-infinity" data-placeholder="Status ASN">
        <option></option>
        @for ($i = 0; $i < sizeof($status); $i++)
        <option value="{{ $status[$i] }}">{{ $status[$i] }}</option>
        @endfor
    </select>
    <div class="invalid-feedback" id="feedback_status"></div>
</div>
<div class="form-group">
    <label class="d-block">Keterangan</label>
    <input type="text" name="keterangan" id="keterangan" class="form-control form-control-sm" placeholder="Keterangan">
    <div class="invalid-feedback" id="feedback_keterangan"></div>
</div>