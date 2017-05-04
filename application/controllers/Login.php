<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');
    class Login extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('m_user_login');
        }
		public function validate() {
			$config = array(
					array(
							'field' => 'username',
							'label' => 'Username',
							'rules' => 'required|trim|xss_clean',
							'errors' => array( 'required' => 'Username harus diisi', ),
					),
					array(
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required|md5|xss_clean',
							'errors' => array( 'required' => 'Password harus diisi', ),
					),
			);
			$this->form_validation->set_rules($config);
			if ($this->form_validation->run() == FALSE){
				return false;
			}else{
				return true;
			}
		}
	
        public function index() {
            $session = $this->session->userdata('isUserLogin');
                if($session == FALSE) {
                redirect('login/login');
            } else {
                redirect('user');
            }
        }
		
        public function login() {
			if($this->validate() == FALSE) {
				$this->load->view('frontend/_template/header');
				$this->load->view('frontend/login/memberlogin');
				$this->load->view('frontend/_template/footer');
			}else{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$cek = $this->m_user_login->ambilPengguna($username, $password);
				$cekdata = $this->m_user_login->dataPengguna($username, $password);
			if($cek->num_rows() <> 0) {
				$this->session->set_userdata('isUserLogin', TRUE);
				$this->session->set_userdata('data_member',$cekdata->row());
				redirect('user');
				}else {
				echo " <script>
					alert('Login Failed, Please check your username and password input');
					history.go(-1);
					</script>";        
				}
				/* echo $username;
				echo'<br/>';
				echo $password; */
            }  
        }
        public function logout() {
               $this->session->sess_destroy();
               redirect('login');
        }
    }
?>