<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboardPage()
    {
        $complaints = Complaint::all();

        return view('dashboard', [
            'complaints' => $complaints
        ]);
    }

    public function adminPage() {
        $complaints = Complaint::all();
        return view('admin', [
            'complaints' => $complaints
        ]);
    }

    public function loginPage() {
        return view('auth');
    }
}
