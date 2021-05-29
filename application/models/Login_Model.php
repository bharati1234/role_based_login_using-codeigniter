<?php
class Login_Model extends CI_Model
{
  public function check_user($username, $password)
  {
    $this->db->select('*');
    $this->db->from('tbl_role');
    $this->db->where('username', $username);
    $this->db->where('password', md5($username));
    $query = $this->db->get();
    return $query;
  }
}
