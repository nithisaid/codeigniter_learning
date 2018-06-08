<?php
    class Location_model extends CI_Model {
        public function getlocation()
        {
            return $this->db->get('locations')->result();
        }

        public function addLocation($data) {
            $this->db->insert('locations',$data);
            return true;
        }
        
    }