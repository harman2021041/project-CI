<?php namespace App\Controllers;

class Home extends BaseController
{function index()
{
 $this->load->model("testmodel");
 $data['records'] = $this->testmodel->getAllRecords();
 $this->load->view("page4",$data);
}}