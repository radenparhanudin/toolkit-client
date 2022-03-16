<?php

namespace App\Imports\EformasiMenpan\BagianOrganisasi\AnalsisisJabatan;

use Maatwebsite\Excel\Concerns\ToModel;
use Modules\EformasiMenpan\Entities\BagianOrganisasi\AnalisisJabatan\AnalisisJabatan;

class ImportAnalisisJabatan implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AnalisisJabatan([
            //
        ]);
    }
}
