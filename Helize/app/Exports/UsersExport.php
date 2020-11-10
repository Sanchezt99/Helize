<?php

namespace App\Exports;

use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'id','gender', 'color', 'brand', 'category', 'type', 'price'
        ];
    }
    public function collection()
    {
        $users = DB::table('wears')->select('id','gender', 'color', 'brand', 'category', 'type', 'price')->get();
        $users = DB::table('wears')->get();
        return $users;
    }
}
