<?php

class Order extends CI_Controller
{
	public function index()
	{
		$this->load->view('quiz/input_miftahfadilah_12220551');
	}

	public function cetak()
	{
		$this->form_validation->set_rules(
			'nama',
			'Nama Penumpang',
			'required|min_length[2]',
			[
				'required' => 'Nama Penumpang Harus diisi',
				'min_lenght' => 'Nama Penumpang terlalu pendek'
			]
		);

		$this->form_validation->set_rules(
			'alamat',
			'Alamat',
			'required|min_length[3]',
			[
				'required' => 'Alamat Harus diisi',
				'min_lenght' => 'Alamat terlalu pendek'
			]
		);

		$this->form_validation->set_rules(
			'jumlah',
			'Jumlah Beli',
			'required',
			[
				'required' => 'Jumlah Beli Harus diisi',
			]
		);

		if ($this->form_validation->run() != true) {
			$this->load->view('quiz/input_miftahfadilah_12220551');
		} else {
			$data = [
				"nama" => $this->input->post('nama'),
				"alamat" => $this->input->post('alamat'),
				"kota" => $this->input->post('kota'),
				"jumlah" => $this->input->post('jumlah'),
			];

			if ($data['kota'] == "solo") {
				$harga = 450000;
			} elseif ($data['kota'] == "semarang") {
				$harga = 350000;
			} elseif ($data['kota'] == "yogyakarta") {
				$harga = 400000;
			} elseif ($data['kota'] == "surabaya") {
				$harga = 550000;
			}

			$total = $harga * $data["jumlah"];

			if ($data["jumlah"] >= 3) {
				$diskon = $total * .1;
			} else {
				$diskon = 0;
			}

			$totalBayar = $total - $diskon;

			$data['harga'] = $harga;
			$data['diskon'] = $diskon;
			$data['totalHarga'] = $totalBayar;

			$this->load->view('quiz/output_miftahfadilah_12220551', $data);
		}
	}
}
