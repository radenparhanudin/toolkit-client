<div class="form-group">
    @php
        $data_status = ['Sync','Update','Delete','Create','Uploaded'];
    @endphp
    <label>Data Status</label>
    <select name="filter_data_status" id="filter_data_status" class="form-control form-control-sm select2-infinity" data-placeholder="Data Status">
        <option></option>
        @for ($i = 0; $i < sizeof($data_status); $i++)
        <option value="{{ $data_status[$i] }}">{{ $data_status[$i] }}</option>
        @endfor
    </select>
</div>
<div class="form-group">
    @php
        $status = ['Aktif','Non aktif'];
    @endphp
    <label>Status</label>
    <select name="filter_status" id="filter_status" class="form-control form-control-sm select2-infinity" data-placeholder="Status">
        <option></option>
        @for ($i = 0; $i < sizeof($status); $i++)
        <option value="{{ $status[$i] }}">{{ $status[$i] }}</option>
        @endfor
    </select>
</div>