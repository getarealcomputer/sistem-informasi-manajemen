<?php

namespace App\Controllers;

use App\Models\StBModel;
use Config\Services;

class StBController extends BaseController
{
  public function index(){
    $this->model = new StBModel();
    $data['model'] = $this->model->findAll();

    return view('stb/view', $data);
  }

  public function edit(){

  }


  public function delete(){
    $this->model = new StBModel();
		$this->req = Services::request();
    $id = $this->req->uri->getSegment(3);
    if($this->model->delete($id)){
      return redirect()->to(base_url('stb'));
    }
  }
}
