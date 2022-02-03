<?php
class ContentModel extends CI_Model{
    function getProfile($id){
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }
    function savePost($id, $fileName){
        $data = [
            'id_user' => $id,
            'image' => ($fileName != null) ? $fileName : "",
            'caption' => $this->input->post('caption', true),
            'upload_time' => mDate('%Y-%m-%d %h:%i:%s', time()),
            'isCloseFriend' => 0
        ];
        $insert = $this->db->insert('posts', $data);
        if($insert){
            return true;
        }else{
            return false;
        }
    }
    function getPost(){
        return $this->db->query("SELECT a.*, b.name as profile_name, b.profile_picture FROM posts AS a JOIN users AS b ON a.id_user = b.id ORDER BY a.id DESC")->result_array();
    }
    function publishComment($id){
        $data = [
            'id_post' => $this->input->post('id', true),
            'id_user' => $id,
            'comment' => $this->input->post('comment', true)
        ];
        $this->db->insert('detail_comments', $data);
    }
    function getComment(){
        return $this->db->query("SELECT a.*, b.name as profile_name, b.profile_picture FROM detail_comments AS a JOIN users AS b ON a.id_user = b.id")->result_array();
    }
    function like($idPost, $idUser){
        $data = [
            'id_post' => $idPost,
            'id_user' => $idUser
        ];
        $this->db->insert('detail_likes', $data);
    }
    function getLike(){
        return $this->db->get('detail_likes')->result_array();
    }
}