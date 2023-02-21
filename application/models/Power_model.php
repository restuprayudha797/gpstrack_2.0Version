<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Power_model extends CI_Model
{
  public function updatePower($id)
  {
    $this->db->set('state', $id);
    $this->db->update('ledstatus_muhammadrestuprayudha797');
  }
}
