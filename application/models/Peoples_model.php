<?php
class Peoples_model extends CI_Model {
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }
    public function getPeoples($limit, $start, $keyword = null)
    {
        if( $keyword ) {
            $this->db->like('name', $keyword);
            $this->db->or_like('email', $keyword);
        }
        return $this->db->get('peoples', $limit, $start)->result_array();
    }
    public function countAllPeoples()
    {
        return $this->db->get('peoples')->num_rows();
    }

    public function getPeoplesById($id){
        return $this->db->get_where('peoples', ['id'=> $id])->row_array();
    }
    
    public function ubahDataPeoples(){
        $data = [
        "name" => $this->input->post('name', true),
        "address" => $this->input->post('address', true),
        "email" => $this->input->post('email', true),
    
        ];
    $this->db->where('id', $this->input->post('id'));

    $this->db->update('peoples', $data);

    }
    
    public function hapusDataPeoples($id){
        $this->db->delete('peoples', ['id'=>$id]);
    }
    
    public function tambahDataPeoples(){
        $data = [
            "name" => $this->input->post('name', true),
            "address" => $this->input->post('address', true),
            "email" => $this->input->post('email', true),   
            ];
        $this->db->insert('peoples', $data);
        }
}