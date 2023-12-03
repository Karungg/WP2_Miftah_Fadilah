<?php
class Matakuliah extends CI_Controller
{
	public function index()
	{
		$this->load->view('view-form-matakuliah');
	}

	public function cetak()
	{
		// Aturan untuk input kode matakuliah
		$this->form_validation->set_rules(
			'kode',
			'Kode Matakuliah',
			'required|min_length[2]',
			[
				'required' => 'Kode Matakuliah Harus diisi',
				'min_lenght' => 'Kode terlalu pendek'
			]
		);
		// Aturan untuk input nama matakuliah
		$this->form_validation->set_rules(
			'nama',
			'Nama Matakuliah',
			'required|min_length[3]',
			[
				'required' => 'Nama Matakuliah Harus diisi',
				'min_lenght' => 'Nama terlalu pendek'
			]
		);
		if ($this->form_validation->run() != true) {
			$this->load->view('view-form-matakuliah');
		} else {
			$data = [
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'sks' => $this->input->post('sks'),
				'awa' => "Awa jangan marah mulu"
			];
			$this->load->view('view-data-matakuliah', $data);
		}
	}
}
