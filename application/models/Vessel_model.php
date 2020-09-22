<?php defined('BASEPATH') OR exit('No direct script access allowed');


 class Vessel_model extends CI_Model {
 
    public function get_data($p = [])
    {   
        if(!empty($p)){
            if(!empty($p['start_date'])){
                $this->db->where("period_start >= '{$p['start_date']}'");
            }

            if(!empty($p['finish_date'])){
                $this->db->where("period_finish <= '{$p['finish_date']}'");
            }
        }

        return $this->db->get('vessel_list')->result_array();
    }

    public function get_detail()
    {
        return $this->db->get('vessel_list')->row_array();
    }

    public function create($data)
    {
        $this->db->insert('vessel_list', $data);

        return ($this->db->affected_rows()>0) ? true : false;
    }

    public function edit($data)
    {   
        $this->db->trans_start();
        $this->db->where('id', $data['id']);
        unset($data['id']);
        $this->db->insert('vessel_list', $data);
        $this->db->trans_complete();

        return ($this->db->trans_status() == FALSE) ? false : true;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('vessel_list');
        
        return ($this->db->affected_rows() > 0) ? true : false ;
    }

}