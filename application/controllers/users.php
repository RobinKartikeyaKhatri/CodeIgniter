<?php

class Users extends CI_Controller
{
    public function show($user_id)
    {
        // $this->load->model('user_model');
        $data['results'] = $this->user_model->get_users($user_id);

        $this->load->view('user_view', $data);

        // Processing the result
        // foreach($result as $object)
        // {
        //     echo $object->id . "<br/>";
        //     echo $object->username . "<br/>";
        //     echo $object->password . "<br/>";
        // }
        
    }
}

?>