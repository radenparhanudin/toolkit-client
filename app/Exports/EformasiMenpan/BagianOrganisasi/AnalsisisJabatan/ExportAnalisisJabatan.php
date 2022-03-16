<?php

namespace App\Exports\EformasiMenpan\BagianOrganisasi\AnalsisisJabatan;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Modules\EformasiMenpan\Entities\BagianOrganisasi\AnalisisJabatan\AnalisisJabatan;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportAnalisisJabatan extends DefaultValueBinder implements WithCustomValueBinder, FromQuery, WithHeadings, ShouldAutoSize, WithStyles
{
	use Exportable;

    public function query()
    {

        return AnalisisJabatan::query()->select(
            'id', 'efm_id', 'instansi', 'judul', 'data_status'
        )->orderBy('judul');
    }

    public function headings(): array
    {
        return [
            'ID', 'Anjab ID', 'Instansi', 'Judul', 'Data Status'
        ];
    }

    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }
        // else return default behavior
        return parent::bindValue($cell, $value);
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }
}