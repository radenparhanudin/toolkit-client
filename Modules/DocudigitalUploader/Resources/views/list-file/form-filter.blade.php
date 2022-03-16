<div class="form-group">
    @php
        $status = ['Sudah', 'Belum'];
    @endphp
    <select name="filter_status" id="filter_status" class="form-control form-control-sm select2-infinity" data-placeholder="Status Upload">
        <option></option>
        @for ($i = 0; $i < sizeof($status); $i++)
        <option value="{{ $status[$i] }}">{{ $status[$i] }}</option>
        @endfor
    </select>
</div>