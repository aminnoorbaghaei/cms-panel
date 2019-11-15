<?php
namespace App\Exports;



use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection,WithHeadings{


    protected  $model;
    /**
     * @return Collection
     */
    public function collection()
    {

        return $this->model;
    }
    public function headings():array
    {
        return [
            'نام',
            'نام خانوادگی',
            'آدرس',


        ];
    }
    public function __construct($item)
    {

        $this->model=$item::Select($item::ReportExcel())->get();



    }
}