<div class="form-group">
    @php
        $kategori = ['CPNS', 'PNS', 'PPPK'];
    @endphp
    <select name="kategori" id="kategori" class="form-control form-control-sm select2-infinity" data-placeholder="Dokumen">
        <option></option>
        @for ($i = 0; $i < sizeof($kategori); $i++)
        <option value="{{ $kategori[$i] }}">{{ $kategori[$i] }}</option>
        @endfor
    </select>
    <div class="invalid-feedback" id="feedback_kategori"></div>
</div>

<div class="form-group">
    @php
        $limit = [
            '1' => 1,
            '5' => 5,
            '10' => 10,
            '50' => 50,
            '100' => 100,
            '200' => 200,
            '300' => 300,
            '500' => 500,
            '1000' => 1000
        ];
    @endphp
    <select name="limit" id="limit" class="form-control form-control-sm select2-infinity" data-placeholder="Limit">
        <option></option>
        @foreach ($limit as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
        @endforeach
    </select>
    <div class="invalid-feedback" id="feedback_limit"></div>
</div>

<div class="form-group">
    <select  name="tahun" id="tahun" data-placeholder="Tahun" class="form-control form-control-sm select2-infinity">
        <option></option>
        @for ($i = 2021; $i <= 2025; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
        @endfor
    </select>
    <div class="invalid-feedback" id="feedback_tahun"></div>
</div>  