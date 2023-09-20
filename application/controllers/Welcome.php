<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form', 'download', 'dompdf']);
		$this->load->database();
	}

	private function getBase64Image($fileName)
	{
		$path = base_url('public/' . $fileName);
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

		return $base64;
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function praktek()
	{
		$this->load->view('components/pos_surat', ['image' => $this->getBase64Image('logo.png')]);
	}

	public function praktek_print()
	{
		printPdf($this->load->view('components/pos_surat', [
			'image' => $this->getBase64Image('logo.png')
		], true));
	}

	public function tugas()
	{
		$user = $this->db->get('users')->row_array();

		$this->load->view('components/id_card', [
			'province' => 'Provinsi Jawa Timur',
			'city' => 'Kota Malang',
			'user' => $user,
			'image' => $this->getBase64Image('rizalord.png')
		]);
	}

	public function tugas_print()
	{
		$user = $this->db->get('users')->row_array();

		printIdCard($this->load->view('components/id_card', [
			'province' => 'Provinsi Jawa Timur',
			'city' => 'Kota Malang',
			'user' => $user,
			'image' => $this->getBase64Image('rizalord.png')
		], true));
	}
}
