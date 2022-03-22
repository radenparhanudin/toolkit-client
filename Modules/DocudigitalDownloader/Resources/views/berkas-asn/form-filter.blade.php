<div class="form-group">
    @php
        $kategori = ['CPNS', 'PNS', 'PPPK'];
    @endphp
    <select name="filter_kategori" id="filter_kategori" class="form-control form-control-sm select2-infinity" data-placeholder="Kategori">
        <option></option>
        @for ($i = 0; $i < sizeof($kategori); $i++)
        <option value="{{ $kategori[$i] }}">{{ $kategori[$i] }}</option>
        @endfor
    </select>
</div>

<div class="form-group">
    <input type="text" name="filter_keterangan" id="filter_keterangan" class="form-control form-control-sm" placeholder="Keterangan">
</div>

<div class="form-group">
    <input type="text" name="filter_nomor_identitas" id="filter_nomor_identitas" class="form-control form-control-sm" placeholder="Nomor Identitas">
</div>