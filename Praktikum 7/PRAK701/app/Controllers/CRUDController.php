<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class CRUDController extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $model = new BukuModel();
        $semuaData = $model->findAll();
        return view('index', [
            "data" => $semuaData // SEECT * FROM crud
        ]);
    }

    public function tambah()
    {
        return view('create');
    }

    public function simpan()
    {
        if(!$this->validate('validasiBuku')){
            return redirect()->back()->withInput();  
        }

        $judul = $this->request->getPost('judul');
        $penulis = $this->request->getPost('penulis');
        $penerbit = $this->request->getPost('penerbit');
        $tahun_terbit = $this->request->getPost('tahun_terbit');

        $model = new BukuModel();
        $model->insert([
            "judul" => $judul,
            "penulis" => $penulis,
            "penerbit" => $penerbit,
            "tahun_terbit" => $tahun_terbit,
        ]);

        return redirect()->to(base_url('/'));
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data = $model->find($id);
        return view('edit',[
            "data" => $data
        ]);
    }

    public function update($id)
    {
        if(!$this->validate('validasiBuku')){
            return redirect()->back()->withInput();  
        }

        $judul = $this->request->getPost('judul');
        $penulis = $this->request->getPost('penulis');
        $penerbit = $this->request->getPost('penerbit');
        $tahun_terbit = $this->request->getPost('tahun_terbit');

        $model = new BukuModel();
        $model->update($id, [
            "judul" => $judul,
            "penulis" => $penulis,
            "penerbit" => $penerbit,
            "tahun_terbit" => $tahun_terbit,
        ]);

        return redirect()->to(base_url('/'));
    }

    public function hapus($id)
    {
        $model = new BukuModel();
        $model->delete($id);

        return redirect()->to(base_url('/'));
    }
}
