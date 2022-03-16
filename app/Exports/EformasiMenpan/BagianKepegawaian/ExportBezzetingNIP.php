<?php

namespace App\Exports\EformasiMenpan\BagianKepegawaian;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Modules\EformasiMenpan\Entities\BagianKepegawaian\BezzetingNip;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportBezzetingNIP extends DefaultValueBinder implements WithCustomValueBinder, FromQuery, WithHeadings, ShouldAutoSize, WithStyles
{
	use Exportable;

    private $kode_cepat;

    public function __construct(string $kode_cepat) 
    {
        $this->kode_cepat = $kode_cepat;
    }

    public function query()
    {
        return BezzetingNip::query()->rightJoin('efm_bo_bezzeting', 'efm_bo_bezzeting.efm_head_id', '=', 'efm_bk_bezzeting_nip.efm_head_id')
        ->select(
            'efm_bo_bezzeting.kode_cepat', 'efm_bo_bezzeting.nama as nama_jabatan', 'efm_bk_bezzeting_nip.nip', 'efm_bk_bezzeting_nip.nama', 'efm_bk_bezzeting_nip.pensiun', 'efm_bk_bezzeting_nip.status_pegawai', 'efm_bo_bezzeting.detail'
        )->where('efm_bo_bezzeting.kode_cepat', 'like', $this->kode_cepat . "%")->orderBy('efm_bo_bezzeting.kode_cepat');
    }

    public function headings(): array
    {
        return [
            'Kode Cepat', 'Nama Jabatan', 'NIP', 'Nama', 'Pensiun', 'Status Pegawai', 'Posisi'
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