<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(0);

    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller 
    {

        function __construct() 
        {
            parent::__construct();
      		$this->load->helper('url');
          	$this->load->library('session');
            $this->load->model('HomeModel');          
            $this->load->library('form_validation');
            $this->load->library('upload');
            $this->load->helper('url', 'form');
      	}

        public function adddatadept()
        {
            $name = $this->input->post('f_name');
            $array_data = array(
                   'name' => $name);
                $tbl = 'department'; 
                $result = $this->HomeModel->add($tbl, $array_data);
                if($result) {
                    echo "<h1>data added</h1>"; 
                }else{
                    echo "<h1>Something went wrong</h1>";
                }
        }

        public function add_department()
        {
            $this->load->view('pages/department/add');
        }

        public function department() 
        {    
            $this->load->view('pages/department/display');
        }

        public function deleterow() 
        {    
            $id = $this->input->post('id');
            $tbl = 'employee';
            $cond = array('id' => $id);
            $result = $this->HomeModel->delete_by_cond($tbl, $cond);
        }

        public function deleterowdept() 
        {    
            $id = $this->input->post('id');
            $tbl = 'department';
            $cond = array('id' => $id);
            $result = $this->HomeModel->delete_by_cond($tbl, $cond);
        }

        
        public function updateddatadept() 
        {
            $name = $this->input->post('f_name');
            $id = $this->input->post('id');
                
                $array_data = array(
                   'name' => $name
                   
                             
                );

                    $tbl = 'department'; 
                    $cond = array('id' => $id);
                    $result = $this->HomeModel->update_data($cond, $array_data, $tbl);

                    if($result) {
                      echo "<h1>Data update<h1>";
                    }
                    else
                    {
                        echo "<h1>Data update faild<h1>";
                    }
                }

        public function updateddata() 
        {
            $name = $this->input->post('f_name');
            $last_name = $this->input->post('l_name');
            $dept = $this->input->post('dept');
            $id = $this->input->post('id');
                
                $array_data = array(
                   'name' => $name,
                   'last_name' => $last_name,
                   'dept_id' => $dept
                             
                );

                //print_r($array_data);

                    $tbl = 'employee'; 
                    $cond = array('id' => $id);
                    $result = $this->HomeModel->update_data($cond, $array_data, $tbl);

                    if($result) {
                      echo "<h1>Data update<h1>";
                    }
                    else
                    {
                        echo "<h1>Data update faild<h1>";
                    }
                }
               
            

        public function editdatadept() 
        {
            $this->load->view('pages/department/edit');  
        }

        public function editdata() 
        {
            $this->load->view('pages/user/edit');  
        }

        public function edit_password($id = 1) 
        {
            if($this->input->post('password'))
            {
                $password = $this->input->post('password');
                $password2 = $this->input->post('password2');
           
                
                $array_data = array(
                       'password' => $password2,
                      
                    );

                    $tbl = 'employees'; 
                    $cond = array('id' => $id);
                    $result = $this->HomeModel->update_data($cond, $array_data, $tbl);

                    if($result) {
                        $this->session->set_flashdata('success','Password updated successfully'); 
                    }
                    else
                    {
                        $this->session->set_flashdata('danger','Something went wrong');
                    }
                }
               
            

            $tbl = "users";
            $cond = array('id' => $id);
            $res = $this->HomeModel->get_detail_by_cond($tbl, $cond);

            $response["user"] = 'active';


            $response['details'] = $res;
            $response["title_"]  = 'Password';
            $response["title_dynamic"]  = 'password';
            $response["message_code"]  = 1;
            $response["message"] = "Login successfully.";

            $this->load->view('template/head');
            $this->load->view('template/header', $response);
            $this->load->view('pages/edit');
            $this->load->view('template/footer');
            $this->load->view('template/foot');       

        }

        public function profile()
        {
            $tbl = "users";
            $cond = array('id' => 1);
            $res = $this->HomeModel->get_detail_by_cond($tbl, $cond);

            $response["user"] = 'active';


            $response['details'] = $res;
            $response["title_"]  = 'Admin Profile';
            $response["title_dynamic"]  = 'employees';
            $response["message_code"]  = 1;
            $response["message"] = "Login successfully.";

            $this->load->view('template/head');
            $this->load->view('template/header', $response);
            $this->load->view('pages/profile');
            $this->load->view('template/footer');
            $this->load->view('template/foot');

        }

        public function status_employees($id = 0)
        {
            $tbl = "employees";
            $cond = array('id' => $id);
            $res = $this->HomeModel->get_detail_by_cond($tbl, $cond);

            if($res[0]['status'] == 'Active')
            {
                $status = 'Deactive';
            }
            else
            {
                $status = 'Active';
            }



                
                $array_data = array(
                       'status' => $status
                    );

                    $tbl = 'employees'; 
                    $cond = array('id' => $id);
                    $result = $this->HomeModel->update_data($cond, $array_data, $tbl);

                    if($result) {
                        $this->session->set_flashdata('success','Status updated successfully'); 
                    }
                    else
                    {
                        $this->session->set_flashdata('danger','Something went wrong');
                    }

                    //print_r( $array_data);

//                    die;

            redirect('home/user', 'refresh');

        }

        public function view_employees($id = 0) 
        {
            $tbl = "employees";
            $cond = array('id' => $id);
            $res = $this->HomeModel->get_detail_by_cond($tbl, $cond);

            $response["user"] = 'active';


            $response['details'] = $res;
            $response["title_"]  = 'Employees';
            $response["title_dynamic"]  = 'employees';
            $response["message_code"]  = 1;
            $response["message"] = "Login successfully.";

            $this->load->view('template/head');
            $this->load->view('template/header', $response);
            $this->load->view('pages/user/view');
            $this->load->view('template/footer');
            $this->load->view('template/foot');       

        }

        public function edit_employees($id = 0) 
        {
            if($this->input->post('name'))
            {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                
                $array_data = array(
                       'name' => $name,
                       'email' => $email,
                       'phone' => $phone 
                    );

                    $tbl = 'employees'; 
                    $cond = array('id' => $id);
                    $result = $this->HomeModel->update_data($cond, $array_data, $tbl);

                    if($result) {
                        $this->session->set_flashdata('success','Existing row updated successfully'); 
                    }
                    else
                    {
                        $this->session->set_flashdata('danger','Something went wrong');
                    }
                }
               
            

            $tbl = "employees";
            $cond = array('id' => $id);
            $res = $this->HomeModel->get_detail_by_cond($tbl, $cond);

            $response["user"] = 'active';


            $response['details'] = $res;
            $response["title_"]  = 'Employees';
            $response["title_dynamic"]  = 'employees';
            $response["message_code"]  = 1;
            $response["message"] = "Login successfully.";

            $this->load->view('template/head');
            $this->load->view('template/header', $response);
            $this->load->view('pages/user/edit');
            $this->load->view('template/footer');
            $this->load->view('template/foot');       

        }

        public function adddata()
        {
            $name = $this->input->post('f_name');
            $last_name = $this->input->post('l_name');
            $dept = $this->input->post('dept');
                
                $array_data = array(
                   'name' => $name,
                   'last_name' => $last_name,
                   'dept_id' => $dept
                             
                );

                $tbl = 'employee'; 
                
                $result = $this->HomeModel->add($tbl, $array_data);


                if($result) {
                    echo "<h1>data added</h1>"; 
                }else{
                    echo "<h1>Something went wrong</h1>";
                }

        }

        public function add_employees() 
        {
            if($this->input->post('name'))
            {               
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                
                $array_data = array(
                   'name' => $name,
                   'email' => $email,
                   'phone' => $phone,
                   'status' => 'Active'             
                );

                $tbl = 'employees'; 
                
                $result = $this->HomeModel->add($tbl, $array_data);


                if($result) {
                    $this->session->set_flashdata('success','New row added successfully'); 
                }else{
                    $this->session->set_flashdata('danger','Something went wrong');
                }
            }

            $response["user"] = 'active';
            $response['details'] = ''; //$res;
            $response["title_"]  = 'Employees';
            $response["title_dynamic"]  = 'employees';
            $response["message_code"]  = 1;
            $response["message"] = "Login successfully.";

            //$this->load->view('template/head');
            //$this->load->view('template/header', $response);
            $this->load->view('pages/user/add');
            //$this->load->view('template/footer');
            //$this->load->view('template/foot');                       
        }

        public function forgotpass()
        {
            $arr = array(
                        "email"     => 'john@gmail.com'
                     );
                    $res = $this->HomeModel->admin_login($arr);

                    //$res[0]['password']

            $msg = "Take password and login, also you can change,  here is password ". $res[0]['password'];
            $msg = wordwrap($msg,70);
            mail("john@gmail.com","My password",$msg);

            $this->session->set_flashdata('success','We did mail to admin email please check');

            redirect(base_url('index.php/home/index'));

        }

        public function logout() 
        {
            $this->session->unset_userdata('userdata');
            redirect(base_url('index.php/home/index'));
        }

        public function user($id = 0) 
        {    
            if($id)
            {
                $tbl = 'employee';
                $cond = array('id' => $id);
                $result = $this->HomeModel->delete_by_cond($tbl, $cond);
                if($result) 
                {
                    $this->session->set_flashdata('success','Existing row deleted successfully'); 
                }
                else
                {
                    $this->session->set_flashdata('danger','Something went wrong');
                }
            }
            $tbl = "employee";
          
            $res = $this->HomeModel->get_detail($tbl);
            //print_r($res);
            $response["user"] = 'active';         
            //$response['details'] = $res;
            $response["title_"]  = 'Employees';
            $response["title_dynamic"]  = 'employees';
            $response["message_code"]  = 1;
            $response["message"] = "Login successfully.";

            //$this->load->view('template/head');
            //$this->load->view('template/header', $response);
            $this->load->view('pages/user/display');
            //$this->load->view('template/footer');
            //$this->load->view('template/foot');
        }

        public function dashbard() 
        {
            if($this->input->post('email') != "") 
            {
                if($this->input->post('password') != "") 
                {
                    $arr = array(
                        "email"     => $this->input->post('email'),
                        "password"  => $this->input->post('password')
                    );
                    $res = $this->HomeModel->admin_login($arr);
                                    
                    if($res)
                    { 
                        $response["user"] = '';
                        $response["dashboard"] = "active";
                        

                        $response["message_code"]  = 1;
                        $response["message"] = "Login successfully.";
                        
                        $rest = $res[0];

                        $this->session->set_userdata('id', '1');
                        $this->session->set_userdata('name', 'Admin');
                        $this->session->set_userdata('email', 'admin@gmail.com');
                        $this->session->set_userdata('role', 'Admin');
                        $this->session->set_userdata('image', 'admin.png');

                        $this->load->view('template/head');
                        $this->load->view('template/header', $response);
                        $this->load->view('pages/dashboard', $response);
                        $this->load->view('template/footer');
                        $this->load->view('template/foot');
                        
                    }
                    else
                    {
                        $response["message_code"]  = 0;
                        $response["message"] = "Sorry, incorrect credential .";
                        $this->load->view('template/head');
                        $this->load->view('pages/login', $response);
                        $this->load->view('template/foot');
                    }
                }
                else {

                    $response["message_code"]  = 0;
                    $response["message"] = "Please enter password.";
                    $this->load->view('template/head');
                    $this->load->view('pages/login', $response);
                    $this->load->view('template/foot');
                }
            }
            else {
                $response["message_code"]  = 0;
                $response["message"] = "Please enter email.";
                $this->load->view('template/head');
                $this->load->view('pages/login', $response);
                $this->load->view('template/foot');
            }
        }

        public function index() {

            $response["message"] = "Please login.";

            $this->load->view('template/head');
            $this->load->view('pages/login', $response);
            $this->load->view('template/foot');
        }



        

        public function signin()
        {
            if($this->session->userdata('userdata') == '') 
            { 
                //take them back to signin 
            }
            else
            {
                //redirect(base_url('home'));
            }
            
            if($this->input->post('register'))
            {
                $fname = $this->input->post('fname');
                $lname = $this->input->post('lname');
                $email = $this->input->post('email');
                $pwd = $this->input->post('password');
                $address = $this->input->post('address');
                $role_type = $this->input->post('role_type');

                $arraydata = array(
                    'f_name' => $fname,
                    'l_name' => $lname,
                    'email' => $email,
                    'password' => $pwd,
                    'address' => $address,
                    'role' => $role_type
                    );
                
                //print_r( $arraydata);
                
                $tbl = "users";      
                $result = $this->HomeModel->insert_data($tbl, $arraydata);
                
                if($result) 
                {
                    $this->session->set_flashdata('success','You have successfully registered '); 
                }
                else
                {
                    $this->session->set_flashdata('danger','Something went wrong');
                }
            }
                
            
            
            if($this->input->post('login'))
            {
                $email = $this->input->post('email');
                $pwd = $this->input->post('password');
                
                $cond = array(
                    'email' => $email,
                    'password' => $pwd
                );
                
                $tbl = "users";      
                $result = $this->HomeModel->select_cond_data($tbl, $cond);
                
                if(!empty($result)) 
                {
                     $this->session->set_userdata('userdata', $result);
                    $this->session->set_flashdata('success','You have successfully login ');
                      redirect(base_url('index.php/home/profile')); 
                }
                else
                {
                    $this->session->set_flashdata('danger','Something went wrong');
                }
            }
            
            $data['page_name'] = 'Signin';
          
            $this->load->view('signin');
        }
    }