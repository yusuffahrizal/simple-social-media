<?php
class AuthModel extends CI_Model{
    function signUp(){
        $data = [
            'name' => $this->input->post('firstname', true)." ".$this->input->post('lastname', true),
            'email' => $this->input->post('email', true),
            'password' => md5($this->input->post('password', true)),
            'birthday' => $this->input->post('birthday', true),
            'gender' => $this->input->post('gender', true),
        ];
        $action = $this->db->insert('users', $data);
        $response = $this->db->insert_id();
        if($action){
            return $response;
        }else{
            return false;
        }
    }
    function login(){
        $condition = [
            'email' => $this->input->post('email_login'),
            'password' => md5($this->input->post('password_login'))
        ];
        return $this->db->get_where('users', $condition)->row_array(); 
    }
}