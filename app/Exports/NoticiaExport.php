<?php

namespace App\Exports;

use App\Models\Noticia;
use Maatwebsite\Excel\Concerns\FromCollection;

class NoticiaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Noticia::all();
    }
}
