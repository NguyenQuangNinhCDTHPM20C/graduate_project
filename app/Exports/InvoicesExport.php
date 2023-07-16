<?php

namespace App\Exports;

use App\Models\Invoice;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvoicesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Invoice::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'code',
            'name',
            'address',
            'phone',
            'email',
            'notes',
            'total',
            'created_at',
        ];
    }
    public function map($invoice): array
    {
        return [
            $invoice->id,
            $invoice->code,
            $invoice->name,
            $invoice->address,
            $invoice->phone,
            $invoice->email,
            $invoice->notes,
            $invoice->total,
            $invoice->created_at,
        ];
    }
}
