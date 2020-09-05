<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Base_Controller extends CI_Controller
{
    public $user_id;
    public $login_type;


    public abstract function index();

    public function __construct(){
        parent::__construct();
        $this->user_id = $this->session->userdata('user_id');
        $this->login_type = $this->session->userdata('login_type');
        
    }

    public function msg($msg){
        
        $this->session->set_flashdata('message', $msg);
    }

    public function debug($data){
        echo "<pre>";
        print_r($data);
        exit();
    }

    public function uploadPhoto(){

        $config['upload_path'] = './assets/admin/uploaded_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;
        //print_r($_FILES);exit();
        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if (empty($_FILES['photo']['name'])) {
            return $config['upload_path'];
        }

        if ( ! $this->upload->do_upload('photo')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            return $config['upload_path'] . $fdata['file_name'];

        }

    }//uploadPhoto

    public function uploadVideo(){

        $config['upload_path'] = './assets/admin/uploaded_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|mp4|flv';
        //$config['max_size'] = 102400;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;
        //print_r($_FILES);exit();
        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if (empty($_FILES['video_link']['name'])) {
            return $config['upload_path'];
        }

        if ( ! $this->upload->do_upload('video_link')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            return $config['upload_path'] . $fdata['file_name'];
        }

    }//uploadPhoto

    public function updatePhoto(){

        $config['upload_path'] = './assets/admin/uploaded_image/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 1024;
        // $config['max_width'] = 300;
        // $config['max_height'] = 300;

        $this->load->library('upload', $config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('photo')){

            $error = $this->upload->display_errors();
            $msg = $error;
            $message = $this->msg($msg);
            redirect(current_url());

        }else{

            $fdata = $this->upload->data();
            $img = $config['upload_path'] . $fdata['file_name'];
            $this->db->set('photo', $img);

        }

    }//updatePhoto

    public function pagination($base_url, $per_page, $total){

        $this->load->library('pagination');
        $config['base_url'] = $base_url;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev;_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
        $this->pagination->initialize($config);
    }


}//Base_Controller