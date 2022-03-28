
<div class="form-group">
    <small class="d-block font-weight-bold">Kategori</small>
    <select name="kategori" id="kategori" class="form-control form-control-sm select2-infinity" data-placeholder="Kategori Usul">
        <option></option>
        <option value="Kenaikan Pangkat">KENAIKAN PANGAKAT</option>
        <option value="Pensiun">PENSIUN</option>
    </select>
    <div class="invalid-feedback" id="feedback_kategori"></div>
</div>
<div class="the-wrapper d-none mt-4">
    <hr>
    <div class="row d-none" id="kp">
        <div class="col-sm-12">
            <div class="form-group">
                <small class="d-block font-weight-bold">Jenis KP</small>
                <select name="jenis_kp" id="jenis_kp" class="form-control form-control-sm select2-infinity" data-placeholder="Jenis Kenaikan Pangkat">
                    <option></option>
                    <option value="KENAIKAN PANGKAT REGULER">KENAIKAN PANGKAT REGULER</option>
                    <option value="KENAIKAN PANGKAT JABFUNG">KENAIKAN PANGKAT JABFUNG</option>
                    <option value="KENAIKAN PANGKAT STRUKTURAL">KENAIKAN PANGKAT STRUKTURAL</option>
                    <option value="KENAIKAN PANGKAT PENYESUAIAN IJAZAH">KENAIKAN PANGKAT PENYESUAIAN IJAZAH</option>
                </select>
                <div class="invalid-feedback" id="feedback_jenis_kp"></div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <small class="d-block font-weight-bold">Priode</small>
                <select name="periode_kp" id="periode_kp" class="form-control form-control-sm select2-infinity" data-placeholder="Priode Kenaikan Pangkat">
                    <option></option>
                    <option value="PERIODE APRIL">PERIODE APRIL</option>
                    <option value="PERIODE OKTOBER">PERIODE OKTOBER</option>
                </select>
                <div class="invalid-feedback" id="feedback_periode_kp"></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <small class="d-block font-weight-bold">Tahun KP</small>
                <select name="tahun_kp" id="tahun_kp" class="form-control form-control-sm select2-infinity" data-placeholder="Tahun KP">
                    <option></option>
                    @for ($i = 2022; $i <= 2025; $i++)
                    <option value="{{ $i }}" {{ (date('Y') == $i) ? "selected" : "" }}>{{ $i }}</option>
                    @endfor
                </select>
                <div class="invalid-feedback" id="feedback_tahun_kp"></div>
            </div>
        </div>
    </div>
    <div class="row d-none" id="pensiun">
        <div class="col-sm-6">
            <div class="form-group">
                <small class="d-block font-weight-bold">Jenis Pensiun</small>
                <select name="jenis_pensiun" id="jenis_pensiun" class="form-control form-control-sm select2-infinity" data-placeholder="Jenis Pensiun">
                    <option></option>
                    <option value="BUP">BUP</option>
                    <option value="JANDA/DUDA">JANDA/DUDA</option>
                    <option value="APS">APS</option>
                </select>
                <div class="invalid-feedback" id="feedback_jenis_pensiun"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <small class="d-block font-weight-bold">TMT Pensiun</small>
                <input type="date" name="tmt_pensiun" id="tmt_pensiun" class="form-control form-control-sm" placeholder="TMT Pensiun">
                <div class="invalid-feedback" id="feedback_tmt_pensiun"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <small class="d-block font-weight-bold">Nomor Usul / Pengantar</small>
                <input type="text" name="no_usul" id="no_usul" class="form-control form-control-sm" placeholder="Nomor Usul / Pengantar">
                <div class="invalid-feedback" id="feedback_no_usul"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <small class="d-block font-weight-bold">Tanggal Usul / Pengantar</small>
                <input type="date" name="tgl_usul" id="tgl_usul" class="form-control form-control-sm" placeholder="Tanggal Usul / Pengantar">
                <div class="invalid-feedback" id="feedback_tgl_usul"></div>
            </div>
        </div>
    </div>
</div>