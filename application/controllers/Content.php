<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ContentModel', 'content');
        $this->load->helper('string');
        $this->load->library('form_validation');
        if($this->session->userdata('user') == NULL){
            redirect('auth/index');
        }
    }
    function index(){
        $data['user'] = $this->content->getProfile($this->session->userdata('user'));
        $data['posts'] = $this->content->getPost();
        $data['comments'] = $this->content->getComment();
        $data['likes'] = $this->content->getLike();
        $this->load->view('Content/Templates/header');
        $this->load->view('Content/index', $data);
        $this->load->view('Content/Templates/footer');
    }
    function post(){
        $file = $_FILES['image']['tmp_name'];
        if(file_exists($file)) {
            $now = mDate('%H%i%s', time());
            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|JPEG';
            $config['file_name'] = $now.'-'.random_string('alnum', 20);
            $config['max_size'] = 0;
    
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata('errorUpload', $this->upload->display_errors());
                redirect('content/index/');
            }else{
                $this->actionSave($this->upload->data()['file_name']);
            }
        }else{
            $this->actionSave(null);
        }
    }
    function actionSave($fileName){
        $pushData = $this->content->savePost($this->session->userdata('user'), $fileName);
        if($pushData){
            $this->session->set_flashdata('success', 'Post Published');
        }else{
            $this->session->set_flashdata('errorUpload', 'Error Upload Post');
        }
        redirect('content/index/');
    }
    function comment(){
        $this->content->publishComment($this->session->userdata('user'));
        redirect('content/index/');
    }
    function like($id){
        $this->content->like($id, $this->session->userdata('user'));
        redirect('content/index/');
    }
    function friends(){
        $data['user'] = $this->content->getProfile($this->session->userdata('user'));
        $this->load->view('Content/Templates/header');
        $this->load->view('Content/friends', $data);
        $this->load->view('Content/Templates/footer');
    }
}