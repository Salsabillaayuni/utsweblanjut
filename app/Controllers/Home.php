<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('vContact');
    }

    public function login()
    {
        return view('vlogin');
    }

    public function dataImunisasi()
    {
        return view('vDataImunisasi');
    }

    public function dataKaryawan()
    {
        return view('vDataKaryawan');
    }
    
    public function tDataImunisasi()
    {
        return view('vTambahDataImunisasi');
    }
    
    public function tDataKaryawan()
    {
        return view('vTambahDataKaryawan');
    }
    
    public function eDataImunisasi()
    {
        return view('vEditDataImunisasi');
    }

    public function eDataKaryawan()
    {
        return view('vEditDataKaryawan');
    }

}
