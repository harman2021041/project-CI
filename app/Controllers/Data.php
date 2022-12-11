<?php

namespace App\Controllers;

class Data extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function insert()
    {
        $ddata = ['Doctor_Name' =>$this->request->getVar('Doctor_Name'),
                 'patientname' =>$this->request->getVar('patientname'),
                 'age' =>$this->request->getVar('age'),
                 'gender' =>$this->request->getVar('gender'),
                 'problem' =>$this->request->getVar('problem'),
                 'contactno' =>$this->request->getVar('contactno'),];
                 

        $db = \Config\Database::connect();
        $builder = $db->table('data');

        $builder->insert($ddata);
        return redirect()->to('page4');
    }

}