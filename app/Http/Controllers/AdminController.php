<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function advanceSweetAlert()
    {
        return view('admin.advance-sweet-alert');
    }

    public function authLogin()
    {
        return view('admin.auth-login');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function formElements()
    {
        return view('admin.form-elements');
    }

    public function tablesDatatable()
    {
        return view('admin.tables-datatable');
    }
}