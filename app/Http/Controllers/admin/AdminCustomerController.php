<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCustomerController extends Controller
{
    public function index()
    {
        $dataCustomers = User::where('level_id', '2')->latest()->paginate(10);
        return view('admin.customers.customers', compact('dataCustomers'));
    }
}
