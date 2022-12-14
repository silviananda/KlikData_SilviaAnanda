<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LaporanModel');
    }

    public function kunjungan_poliklinik()
    {
        $data['selected_tahun'] = $this->input->get('tahun') ?? date('Y');

        $data['kunjungan1'] = $this->LaporanModel->kunjungan_poliklinik($data['selected_tahun'], 1);
        $data['kunjungan2'] = $this->LaporanModel->kunjungan_poliklinik($data['selected_tahun'], 2);
        $data['kunjungan3'] = $this->LaporanModel->kunjungan_poliklinik($data['selected_tahun'], 3);
        $data['kunjungan4'] = $this->LaporanModel->kunjungan_poliklinik($data['selected_tahun'], 4);
        $data['kunjungan5'] = $this->LaporanModel->kunjungan_poliklinik($data['selected_tahun'], 5);

        $this->template->render('admision.laporan.kunjungan_poliklinik', $data);
    }
}
