<?php

namespace App\Http\Controllers;

use App\Data\EmployeeData;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = EmployeeData::getEmployee();

        $paginator = EmployeeData::paginate($data, 10);

        return view('dashboard', ['data' => $paginator]);
    }
}
