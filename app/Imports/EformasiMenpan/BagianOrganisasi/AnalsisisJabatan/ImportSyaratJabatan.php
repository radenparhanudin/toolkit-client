<?php

namespace App\Imports\EformasiMenpan\BagianOrganisasi\AnalsisisJabatan;

use App\SyaratJabatan;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportSyaratJabatan implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SyaratJabatan([
            //
        ]);
    }
}
