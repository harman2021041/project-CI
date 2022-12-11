<?php namespace App\Models;

use CodeIgniter\Model;

class Bookmodel extends Model{
  protected $table = 'data';
  protected $allowedFields = ['Doctor_Name','patientname', 'age', 'problem', 'contactno'];
  
}