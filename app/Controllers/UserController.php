<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function profile($nama = "Ika Rahma Alia", $kelas = "CD", $npm = "2117051016", $alamat = "Lampung Barat")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
            'alamat' => $alamat,
        ];
        return view('profile', $data);
    }

    public function create()
    {
        return view('create_user');
    }

    public function store()
    {
        $nama = $this->request->getPost('nama');
        $npm = $this->request->getPost('npm');
        $kelas = $this->request->getPost('kelas');
        $alamat = $this->request->getPost('alamat');
        $data=[
            'nama'=>$nama,
            'npm'=>$npm,
            'kelas'=>$kelas,
            'alamat'=>$alamat,

        ];
        // dd($data);
        return view('profile',$data);
    }
}
