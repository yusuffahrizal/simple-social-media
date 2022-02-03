<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel', 'auth');
        $this->load->library('form_validation');
    }
    function index(){
        if($this->session->userdata('user') != NULL){
            redirect('content/index');
        }else{
            $data['title'] = "InstaApp";
            if($this->session->flashdata('signup') != null){
                $data['form'] = 0;
            }if($this->session->flashdata('login') != null){
                $data['form'] = 1;
            }else{
                $data['form'] = 0;
            }
            $this->load->view('Auth/login', $data);
        }
    }
    function login(){
        $this->form_validation->set_rules('email_login', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password_login', 'Password', 'required|min_length[8]');
        $this->form_validation->set_error_delimiters('<p style="color: red;">', '</p>'); 
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('login', true);
            $this->index();
        }else{
            $login = $this->auth->login();
            if($login){
                $this->session->set_userdata('user', $login['id']);
                redirect('content/index');
            }else{
                $this->session->set_flashdata('error_login', "E-mail or password don't match, please try again");
                $this->session->set_flashdata('login', true);
                redirect('auth/index');
            }
        }
    }
    function signUp(){
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('birthday', 'Birthday', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_error_delimiters('<p style="color: red;">', '</p>'); 
        if($this->form_validation->run() == false){
            $this->index();
        }else{
            $signup = $this->auth->signUp();
            if(!$signup){
                $this->session->set_flashdata('error', "An error occurred, please try again");
                $this->session->set_flashdata('signup', true);
                redirect('auth/index');
            }else{
                $this->session->set_userdata('user', $signup);
                redirect('content/index');
            }
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('auth/index');
    }
}