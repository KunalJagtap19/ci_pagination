<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() { 
        parent::__construct(); 
        // Per page limit 
        $this->perPage = 5; 
    }

	 public function index(){ 
         
        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('dashboard/ajaxPaginationData'); 
        $config['total_rows']  = $this->c_model->count('users'); 
        $config['per_page']    = $this->perPage; 
        $config['link_func']   = 'searchFilter'; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions = array( 
            'limit' => $config['per_page'],
            'offset' => 0,
        );
        $data['all_users'] = $this->c_model->get_user($conditions); 
         
        // Load the list page view 
        $this->load->view('header');
        $this->load->view('dashboard_view',$data);
    } 

    function ajaxPaginationData(){ 
        // Define offset 
        error_reporting(0);
        $page = $this->input->post('page'); 
        if(!$page){ 
            $offset = 0; 
        }else{ 
            $offset = $page; 
        } 
         
        // Set conditions for search and filter 
        $keywords = $this->input->post('keywords'); 
        $sortBy = $this->input->post('sortBy');
        $sortCol = $this->input->post('sortCol'); 
        
        if(!empty($keywords)){ 
            $conditions['keywords'] = $keywords; 
        } 
        if(!empty($sortBy)){ 
            $conditions['sortBy'] = $sortBy; 
        }
        if(!empty($sortCol)){ 
            $conditions['sortCol'] = $sortCol; 
        } 
         
        $totalRec = count($this->c_model->get_user($conditions)); 

        // Pagination configuration 
        $config['target']      = '#dataList'; 
        $config['base_url']    = base_url('posts/ajaxPaginationData'); 
        $config['total_rows']  = $totalRec; 
        $config['per_page']    = $this->perPage; 
        $config['link_func']   = 'searchFilter'; 
         
        // Initialize pagination library 
        $this->ajax_pagination->initialize($config); 
         
        // Get records 
        $conditions['offset'] = $offset; 
        $conditions['limit'] = $this->perPage; 

        unset($conditions['returnType']); 
        $data['all_users'] = $this->c_model->get_user($conditions); 
         
        // Load the data list view 
        $this->load->view('ajax_view', $data, false); 
    } 
}
