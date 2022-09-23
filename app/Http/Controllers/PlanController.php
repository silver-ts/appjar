<?php

namespace App\Http\Controllers;

use App\Models\BillingCycle;
use App\Models\Plan;
use Inertia\Inertia;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::with('features')->get();
        $billingCycles = BillingCycle::all();

        return Inertia::render('PlanChooser', ['plans' => $plans, 'billingCycles' => $billingCycles]);
    }
}
