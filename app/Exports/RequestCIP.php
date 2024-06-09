<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Models\CIP;
use Illuminate\Contracts\View\View;

class RequestCIP implements FromView, ShouldAutoSize
{
    use Exportable;

    private $data;

    public function __construct($data = null)
    {
        $this->data = $data ?? CIP::all(); // Ambil semua data jika tidak ada yang diberikan
    }

    public function view(): View
    {
        return view('cip.export.exportrequestcip', [ // Pastikan view ini hanya untuk ekspor
            'data' => $this->data
        ]);
    }
}
