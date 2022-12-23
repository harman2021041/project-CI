<?php
class Testmodel extends Model
 {
 function getAllRecords()
 {
  $this->load->library("database");
  $q = $this->db->get("data");
  if($q->num_rows() > 0)
  {
  return $q->result();
  }
  return array();
  $autoload['libraries'] = array('database');
  $autoload['helper'] = array('url');
 }
}
?>