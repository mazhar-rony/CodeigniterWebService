<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Include REST Controller Library
require APPPATH . 'libraries/REST_Controller.php';
     
class Users extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       //$this->load->database();
       $this->load->model('users_model');
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function user_get($id = 0)
	{
        // if(!empty($id)){
        //     $data = $this->db->get_where("items", ['id' => $id])->row_array();
        // }else{
        //     $data = $this->db->get("items")->result();
        // }

        //$this->response($data, REST_Controller::HTTP_OK);

        $users = $this->users_model->getRows($id);

        if(!empty($users))
        {
            $this->response($users, REST_Controller::HTTP_OK);
        }
        else
        {
            $this->response([
                'status' => FALSE,
                'message' => 'No user were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
     
        
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function user_post()
    {
        // $input = $this->input->post();
        // $this->db->insert('items',$input);
     
        // $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);

        $userData = array();

        $userData['first_name'] = $this->post('first_name');
        $userData['last_name'] = $this->post('last_name');
        $userData['email'] = $this->post('email');
        $userData['phone'] = $this->post('phone');

        if(!empty($userData['first_name']) && !empty($userData['last_name']) 
            && !empty($userData['email']) && !empty($userData['phone']))
        {
            $insert = $this->users_model->insert($userData);

            if($insert)
            {
                $this->response([
                    'status' => TRUE,
                    'message' => 'User has been added successfully.'
                ], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->response('Some problem occured. Please try again.', REST_Controller::HTTP_BAD_REQUEST);
            }
        }
        else
        {
            $this->response('Provide complete user information to create.', REST_Controller::HTTP_BAD_REQUEST);
        }
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    // public function index_put($id)
    // {
    //     $input = $this->put();
    //     $this->db->update('items', $input, array('id'=>$id));
     
    //     $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    // }

    public function user_put()
    {
        $userData = array();

        $id = $this->put('id');
        
        $userData['first_name'] = $this->put('first_name');
        $userData['last_name'] = $this->put('last_name');
        $userData['email'] = $this->put('email');
        $userData['phone'] = $this->put('phone');
        
        if(!empty($id) && !empty($userData['first_name']) && !empty($userData['last_name']) 
            && !empty($userData['email']) && !empty($userData['phone']))
        {
            $update = $this->users_model->update($userData, $id);

            if($update)
            {
                $this->response([
                    'status' => TRUE,
                    'message' => 'User has been updated successfully.'
                ], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->response('Some problems occured, please try again.', REST_Controller::HTTP_BAD_REQUEST);
            }
        }
        else
        {
            $this->response('Provide complete user information to update.', REST_Controller::HTTP_BAD_REQUEST);
        }
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function user_delete($id)
    {
        // $this->db->delete('items', array('id'=>$id));
       
        // $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
        
        if($id)
        {
            $delete = $this->users_model->delete($id);

            if($delete)
            {
                $this->response([
                    'status' => TRUE,
                    'message' => 'User has been removed successfully.'
                ], REST_Controller::HTTP_OK);
            }
            else
            {
                $this->response('Some problems occured, please try again.', REST_Controller::HTTP_BAD_REQUEST);
            }
        }
        else
        {
            $this->response([
                'status' => FALSE,
                'message' => 'No user were found.'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    	
}