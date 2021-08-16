<?php

namespace App\Controllers;

use App\Models\StBModel;
use Config\Services;

class StBController extends BaseController
{
  public function index(){
    $model = new StBModel();
    $data['model'] = $model->findAll();

    return view('stb/lists', $data);
  }

  public function create(){
    $model = new StBModel();

    if($this->request->getMethod() === "post"){
      $data = [
        'nama_stasiun' => $this->request->getVar('name'),
        'nama_stasiun' => $this->request->getVar('name'),
        'nama_stasiun' => $this->request->getVar('name'),
        'nama_stasiun' => $this->request->getVar('name'),
        'nama_stasiun' => $this->request->getVar('name'),
        'nama_stasiun' => $this->request->getVar('name'),
      ];
    }

    return view('stb/*');
  }

  public function edit(){

  }


  public function delete(){
    $this->model = new StBModel();
    $req = Services::request();
    $id = $req->uri->getSegment(3);
    if($this->model->delete($id)){
      return redirect()->to(base_url('stb'));
    }
  }
}
