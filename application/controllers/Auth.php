<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');
    class Auth extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('m_login');
        }
		public function validate() {
			$config = array(
					array(
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'required|trim|xss_clean',
							'errors' => array( 'required' => 'Email harus diisi', ),
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
            $session = $this->session->userdata('isLogin');
                if($session == FALSE) {
                redirect('auth/login');
            } else {
                redirect('dashboard');
            }
        }
		
        public function login() {
			if($this->validate() == FALSE) {
				$this->load->view('frontend/_template/header');
				$this->load->view('frontend/login/index');
				$this->load->view('frontend/_template/footer');
			}else{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$cek = $this->m_login->ambilPengguna($email, $password);
			if($cek->num_rows() <> 0) {
				$this->session->set_userdata('isLogin', TRUE);
				$this->session->set_userdata('data_user',$cek->row());
				redirect('dashboard');
				}else {
				echo " <script>
					alert('Login Failed, Please check your email and password input');
					history.go(-1);
					</script>";        
				}
            }  
        }
        public function logout() {
               $this->session->sess_destroy();
               redirect('auth/login');
        }
    }
?>