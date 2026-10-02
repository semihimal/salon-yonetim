<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'name' => 'Ayse',
                'phone' => '05321234567',
            ],
            [
                'name' => 'Mehmet',
                'phone' => '05441234567',
            ],
            [
                'name' => 'Zeynep',
                'phone' => '05551234567',
            ],
        ];
        return view('customers.index', [
            'customers' => $customers,
        ]);
    }
}
