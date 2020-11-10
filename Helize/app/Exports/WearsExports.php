<?php

namespace App\Exports;

use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WearsExports implements FromCollection,WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Id',
            'Gender',
            'Color',
            'Band',
            'Category',
            'type',
            'price',
        ];
    }
    public function collection()
    {
        $wears = DB::table('wears')->select('id','gender', 'color','brand','category','type','price')->get();
        return $wears;
        $wears = DB::table('wears')->get();


    }
}
