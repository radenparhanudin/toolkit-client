<?php

namespace App\Exports\EformasiMenpan\BagianOrganisasi\Pengaturan;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Modules\EformasiMenpan\Entities\BagianOrganisasi\Pengaturan\UnitKerja;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportUnitKerja extends DefaultValueBinder implements WithCustomValueBinder, FromQuery, WithHeadings, ShouldAutoSize, WithStyles
{
	use Exportable;

    public function query()
    {

        return UnitKerja::query()->select(
            'id', 'nama', 'telepon', 'alamat', 'keterangan', 'status', 'data_status'
        )->orderBy('nama');
    }

    public function headings(): array
    {
        return [
            'ID', 'Nama Unit / Kantor', 'Telepon', 'Alamat', 'Keterangan', 'Status', 'Data Status'
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