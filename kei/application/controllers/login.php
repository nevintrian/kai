<?php
class Login extends CI_Controller
{

    //menampilkan form login dan fungsi login
    public function index()
    {

        if ($this->input->post() == NULL) {
            $this->load->view('v_login');
        } else {
            //mengecek username dan password
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $cek_user = $this->db->query("SELECT * FROM user WHERE username='$username' and password='$password' ");
            if ($cek_user->num_rows() == 1) {
                //membuat session
                foreach ($cek_user->result() as $row) {
                    $sess_data['id_user'] = $row->id_user;
                    $sess_data['nama'] = $row->nama_user;
                    $sess_data['username'] = $row->username;
                    $sess_data['level'] = $row->level;
                    $this->session->set_userdata($sess_data);
                }
                redirect('transport');
            } else {
?>
                <script type="text/javascript">
                    alert('Username dan password kamu salah !');
                    window.location = "<?php echo base_url('login'); ?>";
                </script>
<?php
            }
        }
    }

    ////fungsi logout
    function logout()
    {
        //session dihapus
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('level');
        session_destroy();
        redirect('login');
    }
}
