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
                $sql = 'select * from data where status = 1 AND id = '.$id;
                $query = $this->db->query($sql);
                $result = $query->result();
                return $result;
        }

        function editdata($id)
        {
                $sql = "update data set status=0, updated_at=CURRENT_TIMESTAMP WHERE id=".$id;
                $query = $this->db->query($sql);
        }

        function deletedata($id)
        {
                $sql = "update data set status=0, deleted_at=CURRENT_TIMESTAMP WHERE id=".$id;
                $query = $this->db->query($sql);
        }
}
