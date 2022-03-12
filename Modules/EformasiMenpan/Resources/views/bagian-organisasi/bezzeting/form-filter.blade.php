<div class="form-group">
    @php
        $data_status = ['Sync','Update','Delete','Create','Uploaded', 'Downloaded'];
    @endphp
    <select name="filter_data_status" id="filter_data_status" class="form-control form-control-sm form-control form-control-sm-sm select2-infinity" data-placeholder="Data Status">
        <option></option>
        @for ($i = 0; $i < sizeof($data_status); $i++)
        <option value="{{ $data_status[$i] }}">{{ $data_status[$i] }}</option>
        @endfor
    </select>
</div>
<hr>
<div class="form-group">
    <select name="filter_efm_head_id_level_1" id="filter_efm_head_id_level_1" class="form-control form-control-sm select2" data-placeholder="Level 1">
        <option></option>
    </select>
    <div class="invalid-feedback" id="feedback_filter_efm_head_id_level_1"></div>
</div>
<div class="form-group">
    <select name="filter_efm_head_id_level_2" id="filter_efm_head_id_level_2" class="form-control form-control-sm select2" data-placeholder="Level 2">
        <option></option>
    </select>
    <div class="invalid-feedback" id="feedback_filter_efm_head_id_level_2"></div>
</div>
<div class="form-group">
    <select name="filter_efm_head_id_level_3" id="filter_efm_head_id_level_3" class="form-control form-control-sm select2" data-placeholder="Level 3">
        <option></option>
    </select>
    <div class="invalid-feedback" id="feedback_filter_efm_head_id_level_3"></div>
</div>
<div class="form-group">
    <select name="filter_efm_head_id_level_4" id="filter_efm_head_id_level_4" class="form-control form-control-sm select2" data-placeholder="Level 4">
        <option></option>
    </select>
    <div class="invalid-feedback" id="feedback_filter_efm_head_id_level_4"></div>
</div>
<div class="form-group">
    <select name="filter_efm_head_id_level_5" id="filter_efm_head_id_level_5" class="form-control form-control-sm select2" data-placeholder="Level 5">
        <option></option>
    </select>
    <div class="invalid-feedback" id="feedback_filter_efm_head_id_level_5"></div>
</div>