<?php

namespace App\Http\Controllers;

use App\Pengaturan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PengaturanController extends Controller
{
    public function index()
    {
        $data = array(
            'pengaturan' => Pengaturan::first()
        );

        return view('pengaturan', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'nama'     => 'required',
            'jabatan'  => 'required',
            'instansi' => 'required'
        ],[],[
            'email'    => 'Alamat E-Mail',
            'nama'     => 'Nama',
            'jabatan'  => 'Jabatan',
            'instansi' => 'Instansi'
        ]);

        // Check email terdaftar
        try {
            $isRegistered = Http::withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ])->withOptions([
                'verify' => false,
            ])->post('https://toolkit.lombokdev.web.id/api/auth/email', [
                'email' => $request->get('email'),
            ]);

            if(!$isRegistered['status']){
                return redirect()->back()->with('error', $isRegistered['message']);
            }

            Pengaturan::updateOrCreate(
                [
                    'email'    => $request->get('email'),
                ],[
                    'email'    => $request->get('email'),
                    'nama'     => $request->get('nama'),
                    'jabatan'  => $request->get('jabatan'),
                    'instansi' => $request->get('instansi'),
                ]
            );
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
        return redirect()->back()->with('success', "Berhasil!");
    }
}
