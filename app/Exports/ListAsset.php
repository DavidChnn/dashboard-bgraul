<?php

namespace App\Exports;

use App\Models\Asset;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ListAsset implements FromView, ShouldAutoSize
{
    use Exportable;

    private $data;

    public function __construct($data = null)
    {
        $this->data = $data ?? Asset::all(); // Ambil semua data jika tidak ada yang diberikan
    }

    public function view(): View
    {
        return view('exportlistasset', [ // Pastikan view ini hanya untuk ekspor
            'data' => $this->data
        ]);
    }
}
