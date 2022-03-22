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