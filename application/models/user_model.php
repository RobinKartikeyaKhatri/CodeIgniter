<?php

class User_model extends CI_Model
{
    public function get_users($user_id)    
    {
        $this->db->where('id', $user_id);
        $query = $this->db->get('users');
        return $query->result();


        // Query to communicate with database

        // $query = $this->db->query("SELECT * FROM users");
        // // return $query->num_rows();
        // return $query->num_fields();

        // $query = $this->db->get('users');
        // return $query->result();

        // $config['hostname']     = 'localhost';
        // $config['username']     = 'root';
        // $config['password']     = '';
        // $config['database']     = 'errand_db';

        // // Second connection to the database
        // $config_2['hostname']    = 'localhost';
        // $config_2['username']    = 'root_2';
        // $config_2['password']    = '';
        // $config_2['database']    = 'errand_db_2';

        // $connection = $this->load->database($config);

        // $connection_2 = $this->load->database($config_2);


        
    }
}


?>