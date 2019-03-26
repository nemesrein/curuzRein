<?php
    class Personal_resource extends CI_Model
    {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        public function get_personal_info()
        {
            $info = $this->db->query("SELECT * FROM info_tbl");
            $result = $info->row();
            return $result;
        }
        public function get_projects()
        {
            $info = $this->db->query("SELECT * FROM projects_tbl");
            if($result = $info->result_array())
            {
                return $result;    
            }
            return array();
        }
        public function addproject($arr)
        {
            $title = $arr['title'];
            $description = $arr['description'];
            $img = $arr['image'];
            $name = rand(0,1000).'img.'.pathinfo($img['name'],PATHINFO_EXTENSION);
            $target = "../personalweb/assets/image/".$name;
            if($this->check_extension($img['name']))
            {
                $insert = $this->db->query("INSERT into projects_tbl (title,image,description) values 
                        ('$title','$name','$description')");
                if($insert)
                {
                    move_uploaded_file($img['tmp_name'],$target);
                    echo $name.' has been uploaded<br> New project Added';
                }
            }
        }
        public function get_single_project($id)
        {
            $select = $this->db->query("SELECT * from projects_tbl where project_id = '$id'");
            $result = $select->row();
            return $result;
        }
        public function update_project_wimage($title,$description)
        {
            $update = $this->db->query("UPDATE projects_tbl set title='$title',description='$description'");
            if($update)
            {
                echo "data succesfully updated";
            }
        }
        public function get_project_modules($proj_id)
        {
            
        }
        public function editproject_w_image($data)
        {
            $id = $data['id'];
            $title = $data['title'];
            $image = $data['image'];
            $description = $data['description'];
            $name = rand(0,1000).'img.'.pathinfo($image['name'],PATHINFO_EXTENSION);
            if($this->check_extension($image['name']))
            {
                move_uploaded_file($image['tmp_name'],"../personalweb/assets/image/".$name);
                $update = $this->db->query("UPDATE projects_tbl set title='$title',image='$name',
                            description='$description' where project_id = '$id'");
                if($update)
                {
                    echo "data succesfully updated";
                }
            }
        }
        public function editproject_wo_image($data)
        {
            $id = $data['id'];
            $title = $data['title'];
            $description = $data['description'];
            $update = $this->db->query("UPDATE projects_tbl set title='$title',
                            description='$description' where project_id = '$id'");
                if($update)
                {
                    echo "data succesfully updated";
                }
        }
        protected function check_extension($file){
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $valid_ext = array('png','jpg','jpeg');
            if(in_array($extension,$valid_ext)){
                return true;
            }
        }
        public function get_skills()
        {
            $info = $this->db->query("SELECT * FROM skills_tbl");
            if($result = $info->result_array())
            {
                return $result;
            }
            return array();
        }
        public function add_skill($title,$description,$progress)
        {
            if(empty($title) || empty($description) || empty($progress))
            {
                return false;
            }
            $insert = $this->db->query("INSERT into skills_tbl (title,description,progress)
                    values ('$title','$description','$progress')");
            if($insert)
            {
                echo 'New Skills Aquired!!!';
            }
        }
        public function get_single_skill($id)
        {
            $select = $this->db->query("SELECT * from skills_tbl where skill_id = '$id'");
            $result = $select->row();
            return $result;
        }
        public function deleteSkill($id)
        {
            $delete = $this->db->query("DELETE from skills_tbl where skill_id = '$id'");
            if($delete)
            {
                return 'successfully deleted';
            }
        }
        public function editskill($data)
        {
            $id = $data['id'];
            $title = $data['title'];
            $description = $data['description'];
            $progress = $data['progress'];
            $update = $this->db->query("UPDATE skills_tbl set title='$title',description='$description',
                        progress='$progress' where skill_id='$id'");
            if($update)
            {
                echo 'successfully updated';
            }
        }
        public function add_message($data)
        {
            $email = $data['email'];
            $message = $data['comment'];
            date_default_timezone_set("Asia/Manila");
            $date = date("m-d-Y h:i:sa");
            $insert = $this->db->query("INSERT into messages (email,message,dates) values
                    ('$email','$message','$date')");
                    if($insert)
                    {
                        echo "Thanks You...<br>Have a nice day!!!";
                    }
        }
        public function get_unread_messages()
        {
            $select = $this->db->query("SELECT * from messages where viewed = 0");
            if($row=$select->result_array())
            {
                return $row;
            }
            return array();
        }
        public function validate_login($username,$password)
        {
            $login = $this->db->query("SELECT * from info_tbl where username='$username' and passwordd='$password'");
            if($row= $login->row())
            {
                $this->session->is_login = true;
                echo 'log in';
            }
            else
            {
                echo 'invalid login';
            }
        }
    }
?>
