<?php
class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        return $this->db->get('tbl_user')->result();
    }

    public function getId($id)
    {
        return $this->db->get_where('tbl_user', ['id_nama' => $id])->row();
    }

    public function update($data, $id)
    {
        return $this->db->update('tbl_user', $data, array('id_nama' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete('tbl_user', array('id_nama' => $id));
    }
}
