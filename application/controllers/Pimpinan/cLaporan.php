<?php
defined('BASEPATH') or exit('No direct script access allowed');

class claporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('mLaporan');
    }


    public function index()
    {
        $this->load->view('Pimpinan/Layout/head');
        $this->load->view('Pimpinan/Layout/sidebar');
        $this->load->view('Pimpinan/Laporan/vLaporan');
        $this->load->view('Pimpinan/Layout/footer');
    }
    public function lap_harian()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'tanggal' => $tanggal,
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_harian($tanggal, $bulan, $tahun)
        );
        $this->load->view('Pimpinan/Layout/head');
        $this->load->view('Pimpinan/Layout/sidebar');
        $this->load->view('Pimpinan/Laporan/harian', $data);
        $this->load->view('Pimpinan/Layout/footer');
    }
    public function lap_bulanan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'bulan' => $bulan,
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_bulanan($bulan, $tahun)
        );
        $this->load->view('Pimpinan/Layout/head');
        $this->load->view('Pimpinan/Layout/sidebar');
        $this->load->view('Pimpinan/Laporan/bulanan', $data);
        $this->load->view('Pimpinan/Layout/footer');
    }
    public function lap_tahunan()
    {
        $tahun = $this->input->post('tahun');

        $data = array(
            'tahun' => $tahun,
            'laporan' => $this->mLaporan->lap_tahunan($tahun)
        );
        $this->load->view('Pimpinan/Layout/head');
        $this->load->view('Pimpinan/Layout/sidebar');
        $this->load->view('Pimpinan/Laporan/tahunan', $data);
        $this->load->view('Pimpinan/Layout/footer');
    }
}

/* End of file claporan.php */
