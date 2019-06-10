<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cartucho;
use Excel;
use App\Exports\ReporteToner;

class ReporteTonerController extends Controller
{
  public function export()
  {
    return Excel::download(new ReporteToner, 'Inventario de toner.xlsx');
  }
}
