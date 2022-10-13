<?php
class DataModel extends CI_Model
{
  function __construct()
  {
    // Set table name 
    $this->table = 'data';
  }

  function saverecords($data)
  {
    $this->db->insert($this->table, $data);
    return true;
  }

  function displaydata()
  {
    $sql = 'select * from data where status = 1';
    $query = $this->db->query($sql);
    $result = $query->result();
    return $result;
  }

  function searchdata($id)
  {
    $sql = 'select * from data where status = 1 AND id = ' . $id;
    $query = $this->db->query($sql);
    $result = $query->result();
    return $result;
  }

  function updatedata($data, $id)
  {
    $this->db->where('id', $id);
		$this->db->update('data',$data);
    $sql = "update data set updated_at=CURRENT_TIMESTAMP WHERE id=" . $id;
    $query = $this->db->query($sql);
  }

  function deletedata($id)
  {
    $sql = "update data set status=0, deleted_at=CURRENT_TIMESTAMP WHERE id=" . $id;
    $query = $this->db->query($sql);
  }

  function hitungtotaldata()
  {
    $sql = "select count(id) as totaldata from data;";
    $query = $this->db->query($sql);
    $result = $query->result();
    return $result;
  }

  function hitungdataaktif()
  {
    $sql = "select count(id) as dataaktif from data where status=1;";
    $query = $this->db->query($sql);
    $result = $query->result();
    return $result;
  }

  function hitungdatadihapus(){
    $sql = "select count(id) as datadihapus from data where deleted_at is not null;";
    $query = $this->db->query($sql);
    $result = $query->result();
    return $result;
  }

  function hitungdatahariini()
  {
    $sql = "select count(id) as datahariini from data where date(created_at) = date(CURRENT_TIMESTAMP);";
    $query = $this->db->query($sql);
    $result = $query->result();
    return $result;
  }
}
