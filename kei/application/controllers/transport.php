<?php
class Transport extends CI_Controller
{

    //load library, helper, dan model
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->model('m_transport');
        $this->load->library('pagination');
        $this->load->library('upload');
        $this->load->helper('form');
        $this->load->library('cetak_pdf');
    }

    //fungsi menampilkan data transport dan halaman
    public function index()
    {

        $this->load->view('v_header');

        //konfigurasi banyak row dalam satu halaman
        $config['total_rows'] = $this->m_transport->total_rows();
        $transport = $this->m_transport->get_limit_data();
        $this->load->library('pagination');
        $this->pagination->initialize($config);
        //menampilkan data
        $data = array(
            'transport_data' => $transport,
            'total_rows' => $config['total_rows'],
        );
        //menampilkan view transport
        $this->load->view('v_transport', $data);
    }

    //untuk menampilkan form insert data
    public function create()
    {
        //menampilkan header dan sidebar
        $this->load->view('v_header');

        //memanggil value dari form yang diinputkan user
        $data = array(
            'button' => 'Create',
            'action' => site_url('transport/create_action'),
            'id_transport' => set_value('id_transport'),
            'no_kereta' => set_value('no_kereta'),
            'nama_kereta' => set_value('nama_kereta'),
            'status' => set_value('status'),
            'jenis' => set_value('jenis'),
            'stamformasi' => set_value('stamformasi'),
            'nama_stasiun' => set_value('nama_stasiun'),
            'relasi' => set_value('relasi'),
            'berangkat' => set_value('berangkat'),
            'tiba' => set_value('tiba')


        );
        //menampilkan view tambah transport
        $this->load->view('v_transport1', $data);
    }

    //fungsi untuk insert ke database
    public function create_action()
    {

        //memasukkan data ke database
        $data = array(
            'no_kereta' => $this->input->post('no_kereta', TRUE),
            'nama_kereta' => $this->input->post('nama_kereta', TRUE),
            'status' => $this->input->post('status', TRUE),
            'jenis' => $this->input->post('jenis', TRUE),
            'stamformasi' => $this->input->post('stamformasi', TRUE),
            'nama_stasiun' => $this->input->post('nama_stasiun', TRUE),
            'relasi' => $this->input->post('relasi', TRUE),
            'berangkat' => $this->input->post('berangkat', TRUE),
            'tiba' => $this->input->post('tiba', TRUE),
        );

        $this->m_transport->insert($data);
?>
        <script type="text/javascript">
            alert('Data Berhasil di Tambahkan');
            window.location = '<?php echo base_url('transport'); ?>'
        </script>
    <?php
    }

    //untuk menampilkan data pada form edit
    public function update($id)
    {
        //menampilkan header dan sidebar
        $this->load->view('v_header');
        $row = $this->m_transport->get_by_id($id);
        //menampilkan data ke dalam form
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('transport/update_action'),
                'id_transport' => set_value('id_transport', $row->id_transport),
                'no_kereta' => set_value('no_kereta', $row->no_kereta),
                'nama_kereta' => set_value('nama_kereta', $row->nama_kereta),
                'status' => set_value('status', $row->status),
                'jenis' => set_value('jenis', $row->jenis),
                'stamformasi' => set_value('stamformasi', $row->stamformasi),
                'nama_stasiun' => set_value('nama_stasiun', $row->nama_stasiun),
                'relasi' => set_value('relasi', $row->relasi),
                'berangkat' => set_value('berangkat', $row->berangkat),
                'tiba' => set_value('tiba', $row->tiba),
                'konten' => 'transport/transport_form',
                'judul' => 'Data transport',
            );
            //menampilkan form edit data
            $this->load->view('v_transport1', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('transport'));
        }
    }
    //fungsi update data ke database
    public function update_action()
    {
        $data = array(
            'no_kereta' => $this->input->post('no_kereta', TRUE),
            'nama_kereta' => $this->input->post('nama_kereta', TRUE),
            'status' => $this->input->post('status', TRUE),
            'jenis' => $this->input->post('jenis', TRUE),
            'stamformasi' => $this->input->post('stamformasi', TRUE),
            'nama_stasiun' => $this->input->post('nama_stasiun', TRUE),
            'relasi' => $this->input->post('relasi', TRUE),
            'berangkat' => $this->input->post('berangkat', TRUE),
            'tiba' => $this->input->post('tiba', TRUE),
        );

        $this->m_transport->update($this->input->post('id_transport', TRUE), $data);
    ?>
        <script type="text/javascript">
            alert('Data Berhasil di Update');
            window.location = '<?php echo base_url('transport'); ?>'
        </script>
<?php

    }



    //fungsi delete data database
    public function delete($id)
    {
        $row = $this->m_transport->get_by_id($id);

        if ($row) {
            $this->m_transport->delete($id);
            redirect(site_url('transport'));
        }
    }




    public function viewgapeka($id)
    {
        //menampilkan header dan sidebar
        $this->load->view('v_header');
        $row = $this->m_transport->getgapeka($id);
        //menampilkan data ke dalam form
        $data = array(
            'button' => 'Update',
            'action' => site_url('transport/update_action'),
            'no_kereta' => set_value('no_kereta', $row->no_kereta),
            'nama_kereta' => set_value('nama_kereta', $row->nama_kereta),
            'nama_stasiun' => set_value('nama_stasiun', $row->nama_stasiun),
            'tiba' => set_value('tiba', $row->tiba),

        );
        //menampilkan form edit data
        $this->load->view('v_gapeka', $data);
    }



    public function satugapeka($id)
    {
        //menampilkan header dan sidebar
        $this->load->view('v_header');
        $row = $this->m_transport->getgapeka($id);
        //menampilkan data ke dalam form

        $this->load->view('v_gapeka', $row);
    }

    public function gapeka($id)
    {
        //menampilkan header dan sidebar
        $this->load->view('v_header');
        $row = $this->m_transport->getgapeka($id);
        //menampilkan data ke dalam form
        $data = array(
            'gapeka_data' => $row,

        );
        $this->load->view('v_gapeka', $data);
    }

    public function allgapeka()
    {
        //menampilkan header dan sidebar
        $this->load->view('v_header');
        $row = $this->m_transport->getallgapeka();
        //menampilkan data ke dalam form
        $data = array(
            'gapeka_data' => $row,

        );
        $this->load->view('v_gapeka', $data);
    }
}
?>