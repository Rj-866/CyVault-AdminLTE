<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Recap;

class DashboardController extends Controller
{
    public function index()
    {
        $cpuTraffic = random_int(10, 100);
        $likes = random_int(100, 500);
        $sales = random_int(1000, 5000);
        $newMembers = random_int(50, 200);

        $latestOrders = Order::latest()->take(10)->get();
        $monthlyRecap = Recap::all();

        $months = $monthlyRecap->pluck('month');
        $salesData = $monthlyRecap->pluck('sales');
        $expensesData = $monthlyRecap->pluck('expenses');
        $profitData = $monthlyRecap->pluck('profit');

        return view('dashboard', compact('cpuTraffic', 'likes', 'sales', 'newMembers', 'latestOrders', 'monthlyRecap', 'months', 'salesData', 'expensesData', 'profitData'));
    }
}


