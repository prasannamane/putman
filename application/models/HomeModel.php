<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class HomeModel extends CI_model 
    {
        public function delete_by_cond($tbl, $cond)
        {
            $this->db->where($cond);
            return $this->db->delete($tbl);

        }
        
        public function get_detail($tbl)
        {
            $this->db->select('*');
            $this->db->from($tbl);
            $query = $this->db->get();
            return $query->result_array();          
        }

        public function update_data($cond, $data, $tbl)
        {

            $this->db->where($cond);
            return $this->db->update($tbl, $data);
        }
    
        public function add($table_name, $array_data) 
        {
            return $this->db->insert($table_name, $array_data);
        }

        public function get_detail_by_cond($tbl, $cond)
        {
            $this->db->select('*');
            $this->db->from($tbl);
            $this->db->where($cond);
            $query = $this->db->get();
            return $query->result_array();          
        }
    
        public function admin_login($data)
        {
            $query = $this->db->get_where('users', $data);
            return $query->result_array();
        }

         public function insert_data($table_name, $array_data) 
        {
            return $this->db->insert($table_name, $array_data);
        }

          public function select_cond_data($table_name, $array_data)
        {
            $query = $this->db->select('*')
		         ->from($table_name)
		         ->where($array_data)
		         ->get();
		         
            return $query->result_array();
        }
        

        }