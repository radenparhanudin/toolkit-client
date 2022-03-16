<?php

namespace App\Imports\EformasiMenpan\BagianOrganisasi;

use Maatwebsite\Excel\Concerns\ToModel;
use Modules\EformasiMenpan\Entities\BagianOrganisasi\Bezzeting;

class ImportBezzeting implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bezzeting([
            //
        ]);
    }
}
