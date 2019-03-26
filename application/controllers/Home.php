<?php
    class Home extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model("Personal_resource");
            $this->load->library('session');
        }
        
        public function index()
        {
            $this->load->view('header');
            $this->load->view('home/navigation');
            $this->load->view('home/intro_content');
            $this->render_skills();
            // $this->render_projects();
            $this->render_info();
            $this->load->view('home/footer');
            $this->load->view('home/modal');
            $this->load->view('footer');
        }
        public function login()
        {
            $this->load->view('header');
            $this->load->view('home/login');
            $this->load->view('footer');
        }
        public function check_login()
        {
            $array = array("is_login"=>false);
            $this->session->set_userdata($array);
            if(isset($_POST['login']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $this->Personal_resource->validate_login($username,$password);
            }
        }
        private function render_info()
        {
            $data['info'] = $this->Personal_resource->get_personal_info();
            $this->load->view('home/about_me.php',$data);                
        }
        private function render_skills()
        {
            $data['skills'] = $this->Personal_resource->get_skills();
            $this->load->view("home/skills",$data);
        }
        public function add_skills()
        {
            if(isset($_POST['add_skill']))
            {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $progress = $_POST['progress'];
                $this->Personal_resource->add_skill($title,$description,$progress);
            }
        }
        public function edit_skill()
        {
            if(isset($_POST['edit_skill']))
            {
                $data['title'] = $_POST['title'];
                $data['id'] = $_POST['id'];
                $data['description'] = $_POST['description'];
                $data['progress'] = $_POST['progress'];
                $this->Personal_resource->editskill($data);
            }
        }
        private function render_projects()
        {
            $data['projects'] = $this->Personal_resource->get_projects();
            $this->load->view("home/projects",$data);
        }
        public function add_project()
        {
            if(isset($_POST['add_proj']))
            {
                $data['title'] = $_POST['title'];
                $data['image'] = $_FILES['image'];
                $data['description'] = $_POST['description'];
                $this->Personal_resource->addproject($data);
            }
        }
        public function edit_project()
        {
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['id'] = $_POST['id'];
            if(isset($_POST['edit_proj']) && !empty($_FILES['image']))
            {
                $data['image'] = $_FILES['image'];
                $this->Personal_resource->editproject_w_image($data);
            }
            else
            {
                $this->Personal_resource->editproject_wo_image($data);
            }
        }
        public function save_message()
        {
            $data['comment'] = $_POST['message'];
            $data['email'] = $_POST['email'];
            $this->Personal_resource->add_message($data);  
        }
    }
?>