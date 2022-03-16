<?php

namespace App\Imports\EformasiMenpan\BagianOrganisasi\Pengaturan;

use Maatwebsite\Excel\Concerns\ToModel;
use Modules\EformasiMenpan\Entities\BagianOrganisasi\Pengaturan\UnitKerja;

class ImportUnitKerja implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new UnitKerja([
            //
        ]);
    }
}
