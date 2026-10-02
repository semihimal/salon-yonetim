<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Appointment;

class DashboardController extends Controller
{
    public function index()
    {
        $customerCount = Customer::count();
        $serviceCount = Service::count();
        $appointmentCount = Appointment::count();
        
        $upcomingAppointments = Appointment::with(['customer', 'service'])
            ->where('appointment_at', '>=', now())
            ->orderBy('appointment_at')
            ->limit(5)
            ->get();

        return view('dashboard', [
            'customerCount' => $customerCount,
            'serviceCount' => $serviceCount,
            'appointmentCount' => $appointmentCount,
            'upcomingAppointments' => $upcomingAppointments,
        ]);
    }
}
