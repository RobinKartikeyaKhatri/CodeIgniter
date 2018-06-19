<?php

class Users extends CI_Controller
{
    public function show()
    {
        // $this->load->model('user_model');
        $result = $this->user_model->get_users();

        // Processing the result
        foreach($result as $object)
        {
            echo $object->id . "<br/>";
            echo $object->username . "<br/>";
            echo $object->password . "<br/>";
        }
        
    }
}

?>