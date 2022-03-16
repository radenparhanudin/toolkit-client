<div class="form-group">
    @php
        $dokumen = ['CPNS', 'PNS', 'PPPK', 'DIKDIN'];
    @endphp
    <select name="filter_dokumen" id="filter_dokumen" class="form-control form-control-sm select2-infinity" data-placeholder="Dokumen">
        <option></option>
        @for ($i = 0; $i < sizeof($dokumen); $i++)
        <option value="{{ $dokumen[$i] }}">{{ $dokumen[$i] }}</option>
        @endfor
    </select>
</div>