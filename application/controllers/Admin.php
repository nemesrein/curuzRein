<?php
    class Admin extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model("Personal_resource");
            $this->load->library('session');
            if($this->session->is_login===false || !isset($this->session->is_login)){
                redirect(site_url(""));
            }
        }
        public function destroy()
        {
            session_destroy();
            redirect(site_url(""));
        }
        public function dashboard()
        {
            $this->load->view("admin_header");
            $this->load->view("admin/dashboard/admin_wrapper");
            $this->load->view("admin/dashboard/dashboard_nav");
            $this->cards_count();
            $this->chart();
            $this->load->view("admin/dashboard/closing_wrapper");
            $this->load->view("admin_footer");
        }
        public function skills()
        {
            $this->load->view("admin_header");
            $this->load->view("admin/skills/skills_wrapper");
            $this->load->view("admin/skills/skills_nav");
            $this->skill_content();
            $this->load->view("admin/skills/closing_wrapper");
            $this->load->view("admin_footer");
        }
        public function projects()
        {
            $this->load->view("admin_header");
            $this->load->view("admin/project/project_wrapper");
            $this->load->view("admin/project/project_nav");
            $this->project_content();
            $this->load->view("admin/project/closing_wrapper");
            $this->load->view("admin_footer");
        }
        public function edit_project()
        {
            $data['id'] = $_POST['id'];
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            if(!empty($_FILES['image']))
            {
                $data['image'] = $_FILES['image'];
                $this->Personal_resource->editProject_w_image($data);
                return;
            }
            $this->Personal_resource->editProject_wo_image($data);
        }
        private function project_content()
        {
            $data['projects'] = $this->Personal_resource->get_projects();
            $this->load->view("admin/project/project_content",$data);
        }
        public function delete_skill($id)
        {
            if($this->Personal_resource->deleteSkill($id))
            {
                redirect(site_url("admin/skills"));
            }
        }
        public function messages()
        {
            $this->load->view("admin_header");
            $this->load->view("admin/messages/message_wrapper");
            $this->load->view("admin/messages/message_nav");
            $this->load->view("admin/messages/message_content");
            $this->load->view("admin/messages/message_wrapper");
            $this->load->view("admin_footer");
        }
        private function skill_content()
        {
            $data['skills'] = $this->Personal_resource->get_skills();
            $this->load->view("admin/skills/skills_content",$data);
        }
        private function cards_count()
        {
            $project = $this->Personal_resource->get_projects();
            $skills = $this->Personal_resource->get_skills();
            $messages = $this->Personal_resource->get_unread_messages();
            $data['projects_count'] = count($project);
            $data['skills_count'] = count($skills);
            $data['messages_count'] = count($messages);
            $this->load->view("admin/dashboard/dashboard_cards",$data);
        }
        private function chart()
        {
            $data['projects'] = $this->Personal_resource->get_projects();
            $data['skills'] = $this->Personal_resource->get_skills();
            $this->load->view("admin/dashboard/chart",$data);
            
        }
    }
?>