<?php

namespace Office\PHPSpreadsheet;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Excel extends \Office\Office
{
    protected $spreadsheet;
    protected $writer;

    public function __construct()
    {
        $this->spreadsheet = new Spreadsheet();
        $this->writer = new Xlsx($this->spreadsheet);
    }

    public function read()
    {

    }
    public function write()
    {
        try
        {
            $sheet = $this->spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1', 'Hello World !');
            $this->writer->save('hello world.xlsx');
        }
        catch (\PhpOffice\PhpSpreadsheet\Exception $exception)
        {

        }
    }
}
