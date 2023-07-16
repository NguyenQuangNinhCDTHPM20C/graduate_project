<?php

namespace App\Exports;

use App\Models\ImportInvoice;
use Maatwebsite\Excel\Concerns\FromCollection;

class ImportInvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ImportInvoice::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'code',
            'account_id',
            'supplier',
            'total',
            'status',
        ];
    }
    public function title(): string
    {
        return 'import_invoices';
    }
}
