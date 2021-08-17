<?php

namespace App\Controllers;

use App\Models\UsersModel;

class UsersController extends BaseController
{
  public function index(){
    $model = new UsersModel();

    $data['model'] = $model->findAll();

    return view('users/lists', $data);
  }

  public function addUser(){
    if ($this->request->getMethod() == "post") {
      $rules = [
        'username' => "required|min_length[16]|max_length[16]",
        'passphrase' => 'required|min_length[9]|max_length[25]',
        'role' => 'required',
        'email' => 'required|valid_email',
      ];

      if (!$this->validate($rules)) {
        return view('users/form', [
          "validation" => $this->validator,
        ]);
      }else{
        $model = new UsersModel();
        $data = [
          'username' => $this->request->getVar('username'),
          'passphrase' => $this->request->getVar('passphrase'),
          'role' => $this->request->getVar('role'),
          'email' => $this->request->getVar('email'),
        ];
        $model->save($data);

        $session = session();
        $session->setFlashdata("success", "Member created successfully");
        return redirect()->to(base_url('users'));
      }
    }
      return view('users/form');
  }

  public function editUser($id = null){
    $model = new UsersModel();

    $user = $model->where("id_user", $id)->first();

    if($this->request->getMethod() == "post"){
      $rules = [
        'username' => "required|min_length[16]|max_length[16]",
        'passphrase' => 'required|min_length[9]|max_length[25]',
        'role' => 'required',
        'email' => 'required|valid_email',
      ];
      if (!$this->validate($rules)) {
        return view('users/form-edit', [
          'validation' => $this->validator,
          'user' => $user
        ]);
      }else{
        $data = [
          'username' => $this->request->getVar('username'),
          'passphrase' => $this->request->getVar('passphrase'),
          'role' => $this->request->getVar('role'),
          'email' => $this->request->getVar('email'),
        ];

        $model->update($id, $data);
        $session = session();
        $session->setFlashdata("success", "User updated successfully");
        return redirect()->to(base_url('users'));
      }
    }
    return view('users/form-edit', ['user' => $user]);
  }

  public function deleteUser($id = null){
    $model = new UsersModel();
    if($model->find($id)){
      $model->delete($id);
      $session = session();
      $session->setFlashdata("success", "User deleted successfully");
    }else{
      $session = session();
      $session->setFlashdata("warning", "Record not found!");
    }
    return redirect()->to(base_url('users'));
  }
}
