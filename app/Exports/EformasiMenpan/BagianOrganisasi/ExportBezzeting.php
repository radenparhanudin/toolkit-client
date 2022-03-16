<?php

namespace App\Exports\EformasiMenpan\BagianOrganisasi;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Modules\EformasiMenpan\Entities\BagianOrganisasi\Bezzeting;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportBezzeting extends DefaultValueBinder implements WithCustomValueBinder, FromQuery, WithHeadings, ShouldAutoSize, WithStyles
{
	use Exportable;

    private $kode_cepat;

    public function __construct(string $kode_cepat) 
    {
        $this->kode_cepat = $kode_cepat;
    }

    public function query()
    {

        return Bezzeting::query()->select(
            'id', 'kode_cepat', 'nama', 'abk', 'posisi', 'kelas', 'nip', 'riil', 'currentcpns', 'currentpns', 'currentpppk', 'currentlainnya', 'data_status'
        )->where('kode_cepat', 'like', $this->kode_cepat . "%")->orderBy('kode_cepat');
    }

    public function headings(): array
    {
        return [
            'ID', 'Kode Cepat', 'Nama Jabatan', 'ABK', 'Posisi', 'Kelas Jabatan', 'NIP', 'Rill', 'CPNS', 'PNS', 'PPPK', 'Lainnya', 'Data Status'
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
            1    => [
                'font' => [
                    'bold' => true
                ]
            ],
        ];
    }
}