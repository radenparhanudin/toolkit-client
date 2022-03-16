<div class="form-group">
    @php
        $dokumen = ['CPNS', 'PNS', 'PPPK', 'DIKDIN'];
    @endphp
    <select name="dokumen" id="dokumen" class="form-control form-control-sm select2-infinity" data-placeholder="Dokumen">
        <option></option>
        @for ($i = 0; $i < sizeof($dokumen); $i++)
        <option value="{{ $dokumen[$i] }}">{{ $dokumen[$i] }}</option>
        @endfor
    </select>
    <div class="invalid-feedback" id="feedback_dokumen"></div>
</div>
<div class="form-group">
    <input type="text" name="group" id="group" class="form-control form-control-sm" placeholder="Dokumen">
    <div class="invalid-feedback" id="feedback_group"></div>
</div>