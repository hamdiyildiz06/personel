<?php

class Personel_model extends CI_Model{
    public function get_all(){
        return $this->db->get("Personel")->result();
    }

    public function get($id){
        return $this->db->where($id)->get("Personel")->row();
    }

    public function insert($data){

        return $this->db->insert("personel", $data);
    }

    public function update($id,$data=array()){
        return $this->db->where($id)->update("personel", $data);
    }

    public function delete($id){
        return $this->db->delete("personel", $id);
    }

    public function order_by(){

    }


}