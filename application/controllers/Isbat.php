<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH."third_party/PhpWord/Autoloader.php");

use PhpOffice\PhpWord\Autoloader;
Autoloader::register();

class Isbat extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model("isbat_model","isbat");
    }
	
	 public function index()
	{
		$kecamatan = $this->isbat->get_all_kecamatan()->result();

		
		foreach($kecamatan as $row){
			$data['id_kecamatan'][] = $row->id;
			$data['nama_kecamatan'][] = $row->kecamatan;
		}
		
		// die(var_dump($data));
		$this->load->view('template/header2');
		$this->load->view('isbat/isbat', $data);
		$this->load->view('template/footer');
	}

	public function get_kelurahan()
	{
		$id = $this->uri->segment(3);
		$kelurahan = $this->isbat->get_kelurahan_id($id)->result();
		foreach($kelurahan as $rows){
			$data['id'][] = $rows->id;
			$data['text'][] = $rows->kelurahan;
		}
		echo json_encode($data);
	}

	public function simpan_cetak()
	{
		$tanggal_surat = $this->input->post('tanggal_permohonan');
		//P1
		$nama_p1 = $this->input->post('nama_p1');
		$nik_p1 = $this->input->post('nik_p1');
		$jk_p1 = $this->input->post('jk_p1');
		$tempatlahir_p1 = $this->input->post('tempatlahir_p1');
		$tanggallahir_p1 = $this->input->post('tanggallahir_p1');
		$pendidikan_p1 = $this->input->post('pendidikan_p1');
		$pekerjaan_p1 = $this->input->post('pekerjaan_p1');
		$nomorhp_p1 = $this->input->post('nomorhp_p1');
		$dusun_p1 = $this->input->post('dusun_p1');
		$kecamatan_p1 = $this->input->post('kecamatan_p1');
		$kelurahan_p1 = $this->input->post('kelurahan_p1');
		$kabupaten_p1 = $this->input->post('kabupaten_p1');
		$provinsi_p1 = $this->input->post('provinsi_p1');
		//P2
		$nama_p2 = $this->input->post('nama_p2');
		$nik_p2 = $this->input->post('nik_p2');
		$jk_p2 = $this->input->post('jk_p2');
		$tempatlahir_p2 = $this->input->post('tempatlahir_p2');
		$tanggallahir_p2 = $this->input->post('tanggallahir_p2');
		$pendidikan_p2 = $this->input->post('pendidikan_p2');
		$pekerjaan_p2 = $this->input->post('pekerjaan_p2');
		$nomorhp_p2 = $this->input->post('nomorhp_p2');
		$dusun_p2 = $this->input->post('dusun_p2');
		$kecamatan_p2 = $this->input->post('kecamatan_p2');
		$kelurahan_p2 = $this->input->post('kelurahan_p2');
		$kabupaten_p2 = $this->input->post('kabupaten_p2');
		$provinsi_p2 = $this->input->post('provinsi_p2');
		//Data Pernikahan
		$tanggalpernikahan = $this->input->post('tanggalpernikahan');
		$kecamatan_pernikahan = $this->input->post('kecamatan_pernikahan');
		$kelurahan_pernikahan = $this->input->post('kelurahan_pernikahan');
		$kabupaten_pernikahan = $this->input->post('kabupaten_pernikahan');
		$provinsi_pernikahan = $this->input->post('provinsi_pernikahan');
		$nama_walinikah = $this->input->post('nama_walinikah');
		$status_walinikah = $this->input->post('status_walinikah');
		$nama_saksi1 = $this->input->post('nama_saksi1');
		$nama_saksi2 = $this->input->post('nama_saksi2');
		$mahar = $this->input->post('mahar');
		$kecamatan_setelah = $this->input->post('kecamatan_setelah');
		$kelurahan_setelah = $this->input->post('kelurahan_setelah');
		$kabupaten_setelah = $this->input->post('kabupaten_setelah');
		$provinsi_setelah = $this->input->post('provinsi_setelah');
		//Data Anak
		$jumlah_anak = $this->input->post('jumlah_anak');
		$nama_anak = $this->input->post('nama_anak');
		$jk_anak = $this->input->post('jk_anak');
		$tempatlahir_anak = $this->input->post('tempatlahir_anak');
		$tanggallahir_anak = $this->input->post('tanggallahir_anak');
		$nik_anak = $this->input->post('nik_anak');
		$pendidikan_anak = $this->input->post('pendidikan_anak');
		$status_anak = $this->input->post('status_anak');
		$umur_anak = $this->input->post('umur_anak');
		//Data KUA
		$nama_kua = $this->input->post('nama_kua');
		$kecamatan_kua = $this->input->post('kecamatan_kua');
		$kabupaten_kua = $this->input->post('kabupaten_kua');

		$get_record = $this->isbat->get_record()->result();
		$get_anak = $this->isbat->get_anak()->result();
		$id = "";
		$id_anak = "";
		
		foreach($get_record as $rows)
		{
			$id = $rows->id;
		}
		$id = $id+1;
		
		foreach($get_anak as $rows)
		{
			$id_anak = $rows->id;
		}
		$id_anak = $id_anak+1;

		// convert data p1
		switch($jk_p1){
			case "1":
				$jk_p1 = "Laki-Laki";
				break;
			case "2":
				$jk_p1 = "Perempuan";
				break;
		}

		$ttl_p1 = implode(", ",[$tempatlahir_p1,$tanggallahir_p1]);

		switch($pendidikan_p1){
			case "0":
				$pendidikan_p1 = "Belum Sekolah";
				break;
			case "1":
				$pendidikan_p1 = "Tidak Sekolah";
				break;
			case "2":
				$pendidikan_p1 = "TK";
				break;
			case "3":
				$pendidikan_p1 = "SD";
				break;
			case "4":
				$pendidikan_p1 = "SLTP/SMP";
				break;
			case "5":
				$pendidikan_p1 = "SLTA/SMA";
				break;
			case "6":
				$pendidikan_p1 = "D1";
				break;
			case "7":
				$pendidikan_p1 = "D2";
				break;
			case "8":
				$pendidikan_p1 = "D3";
				break;
			case "9":
				$pendidikan_p1 = "D4";
				break;
			case "10":
				$pendidikan_p1 = "S1";
				break;
			case "11":
				$pendidikan_p1 = "S2";
				break;
			case "12":
				$pendidikan_p1 = "S3";
				break;
		}

		$alamat_p1 = implode(", ",[$dusun_p1, $kelurahan_p1 ,$kecamatan_p1, $kabupaten_p1, $provinsi_p1]);
		
		// convert data p1
		switch($jk_p2){
			case "1":
				$jk_p2 = "Laki-Laki";
				break;
			case "2":
				$jk_p2 = "Perempuan";
				break;
		}

		$ttl_p2 = implode(", ",[$tempatlahir_p2,$tanggallahir_p2]);

		switch($pendidikan_p2){
			case "0":
				$pendidikan_p2 = "Belum Sekolah";
				break;
			case "1":
				$pendidikan_p2 = "Tidak Sekolah";
				break;
			case "2":
				$pendidikan_p2 = "TK";
				break;
			case "3":
				$pendidikan_p2 = "SD";
				break;
			case "4":
				$pendidikan_p2 = "SLTP/SMP";
				break;
			case "5":
				$pendidikan_p2 = "SLTA/SMA";
				break;
			case "6":
				$pendidikan_p2 = "D1";
				break;
			case "7":
				$pendidikan_p2 = "D2";
				break;
			case "8":
				$pendidikan_p2 = "D3";
				break;
			case "9":
				$pendidikan_p2 = "D4";
				break;
			case "10":
				$pendidikan_p2 = "S1";
				break;
			case "11":
				$pendidikan_p2 = "S2";
				break;
			case "12":
				$pendidikan_p2 = "S3";
				break;
		}

		$alamat_p2 = implode(", ",[$dusun_p2, $kelurahan_p2 ,$kecamatan_p2, $kabupaten_p2, $provinsi_p2]);

		//convert data pernikahan
		$lokasi_nikah = implode(", ",[$kelurahan_pernikahan, $kecamatan_pernikahan, $kabupaten_pernikahan, $provinsi_pernikahan]);
		$tempattinggal_nikah = implode(", ",[$kelurahan_setelah, $kecamatan_setelah, $kabupaten_setelah, $provinsi_setelah]);

		//path
		$filename = str_replace(' ', '_', $nama_p1);
		$filename = $filename . ".docx";

		$hasil=[];
		$erorrs=[];

		$tgl_p1 = [];
		$tgl_p2 = [];
		$tgl_p1 = explode(" ",$tanggallahir_p1);
		$tgl_p2 = explode(" ",$tanggallahir_p2);
		$umur_p1 = date("Y") - $tgl_p1[2]; 
		$umur_p2 = date("Y") - $tgl_p2[2]; 

		$data = array(
			'id' => $id,
			'tanggal_surat' => $tanggal_surat,
			'nama_pihak1' => $nama_p1,
			'nik_pihak1' => $nik_p1,
			'jk_pihak1' => $jk_p1,
			'ttl_pihak1' => $ttl_p1,
			'pend_pihak1' => $pendidikan_p1,
			'pekerjaan_pihak1' => $pekerjaan_p1,
			'nomor_hp_pihak1' => $nomorhp_p1,
			'alamat_pihak1' => $alamat_p1,
			'nama_pihak2' => $nama_p2,
			'nik_pihak2' => $nik_p2,
			'jk_pihak2' => $jk_p2,
			'ttl_pihak2' => $ttl_p2,
			'pend_pihak2' => $pendidikan_p2,
			'pekerjaan_pihak2' => $pekerjaan_p2,
			'nomor_hp_pihak2' => $nomorhp_p2,
			'alamat_pihak2' => $alamat_p2,
			'tanggal_nikah' => $tanggalpernikahan,
			'lokasi_nikah' => $lokasi_nikah,
			'status_walinikah' => $status_walinikah,
			'nama_walinikah' => $nama_walinikah,
			'nama_saksi1' => $nama_saksi1,
			'nama_saksi2' => $nama_saksi2,
			'mahar' => $mahar,
			'tempattinggal_nikah' => $tempattinggal_nikah,			
			'kua' => $nama_kua,		
			'kecamatan_kua' => $kecamatan_kua,
			'kabupaten_kua' => $kabupaten_kua,
			'tipe_surat' => "1",
			'tanggal_pembuatan' => date("Y-m-d H:i:s"),
			'path_doc' => $filename
		);

		//biodata anak
		$data_anak=array();
		if($jumlah_anak != "0"){
			for($x=0;$x<$jumlah_anak;$x++){
				//convert data anak
				switch($jk_anak[$x]){
					case "1":
						$jk_anak[$x] = "Laki-Laki";
						break;
					case "2":
						$jk_anak[$x] = "Perempuan";
						break;
				}

				$ttl_anak = implode(", ",[$tempatlahir_anak[$x],$tanggallahir_anak[$x]]);

				switch($pendidikan_anak[$x]){
					case "0":
						$pendidikan_anak[$x] = "Belum Sekolah";
						break;
					case "1":
						$pendidikan_anak[$x] = "Tidak Sekolah";
						break;
					case "2":
						$pendidikan_anak[$x] = "TK";
						break;
					case "3":
						$pendidikan_anak[$x] = "SD";
						break;
					case "4":
						$pendidikan_anak[$x] = "SLTP/SMP";
						break;
					case "5":
						$pendidikan_anak[$x] = "SLTA/SMA";
						break;
					case "6":
						$pendidikan_anak[$x] = "D1";
						break;
					case "7":
						$pendidikan_anak[$x] = "D2";
						break;
					case "8":
						$pendidikan_anak[$x] = "D3";
						break;
					case "9":
						$pendidikan_anak[$x] = "D4";
						break;
					case "10":
						$pendidikan_anak[$x] = "S1";
						break;
					case "11":
						$pendidikan_anak[$x] = "S2";
						break;
					case "12":
						$pendidikan_anak[$x] = "S3";
						break;
				}

				$dalam_anak = array(
					'id' => $id_anak,
					'id_record' => $id,
					'nama' => $nama_anak[$x],
					'jk' => $jk_anak[$x],
					'ttl' => $ttl_anak,
					'nik' => $nik_anak[$x],
					'pendidikan' => $pendidikan_anak[$x],
					'status' => $status_anak[$x],
					'umur' => $umur_anak[$x]
				);
				$id_anak++;
				array_push($data_anak,$dalam_anak);
			}
		}
		// die(var_dump(count($data_anak[0]['id'])));

		$insert_record = $this->isbat->insert_record($data);
		if($jumlah_anak != 0){
			$insert_anak = $this->isbat->insert_anak($data_anak);
		} else {
			$insert_anak = true;
		}

		if($insert_record && $insert_anak){
			$hasil['sukses'] = true;
			$hasil['pesan'] = "Berhasil Input Ke Database";
			$hasil['file'] = $filename;
		} else {
			$erorrs['error'] = "Tidak Berhasil Input Ke Database";
		}

		if (!empty($errors)) {
			$hasil['success'] = false;
			$hasil['errors'] = $errors;
		}
		
		$this->docx($filename, $data, $jumlah_anak, $data_anak, $umur_p1, $umur_p2);

		echo json_encode($hasil);
	}

	private function docx($filename, $data, $jumlah_anak, $data_anak, $umur_p1, $umur_p2)
	{
		$phpWord = new \PhpOffice\PhpWord\PhpWord();

		$fontStyle = array(
			'name' => 'Arial',
			'size' => 12
		);

		$fontStyle2 = array(
			'name' => 'Arial',
			'size' => 12,
			'bold' => true
		);
		
		$fontStyle3 = array(
			'name' => 'Arial',
			'size' => 12,
			'italic' => true
		);

		$tanggalStyle = array(
			'align' => 'right'
		);

		$defaultStyle = array(
			'align' => 'justify'
		);
		
		$defaultStyle2 = array(
			'align' => 'justify',
			'tabs' => array(new \PhpOffice\PhpWord\Style\Tab('right', 1000))
		);

		$multilevelList1 = 'multilevel list 1';
		$multilevelList2 = 'multilevel list 2';
		$phpWord->addNumberingStyle(
			$multilevelList1,
			array(
				'type'   => 'multilevel',
				'levels' => array(
					array('format' => 'decimal', 'text' => '%1.', 'left' => 360, 'hanging' => 360, 'tabPos' => 360, 
						  'start' => 1, 'size' => 12),
					array('format' => 'decimal', 'text' => '%2.', 'left' => 720, 'hanging' =>     360, 'tabPos' => 720, 'size' => 12),
				),
			)
		);

		$phpWord->addNumberingStyle(
			$multilevelList2,
			array(
				'type'   => 'multilevel',
				'levels' => array(
					array('format' => 'decimal', 'text' => '%1.', 'left' => 360, 'hanging' => 360, 'tabPos' => 360,
						  'start' => 1),
					array('format' => 'decimal', 'text' => '%2.', 'left' => 720, 'hanging' =>     360, 'tabPos' => 720),
				),
			)
		);
		
		$section = $phpWord->addSection();
		$section->addText('Suka Makmue, '.$data['tanggal_surat'], $fontStyle, $tanggalStyle);
		$textrun = $section->addTextRun();
		$textrun->addText('Perihal : ', $fontStyle, $defaultStyle);
		$textrun->addText('Permohonan Itsbat Nikah', $fontStyle2, $defaultStyle);
		$section->addText('');
		$section->addText('Kepada Yth.', $fontStyle, $defaultStyle);
		$section->addText('Ketua Mahkamah Syar\'iyah Suka Makmue.', $fontStyle, $defaultStyle);
		$section->addText('di-', $fontStyle, $defaultStyle);
		$section->addText("\tSuka Makmue", $fontStyle, $defaultStyle);
		$section->addText("Assalmualaikum Wr.Wb", $fontStyle, $defaultStyle);
		$section->addText("Kami yang bertandatangan dibawah ini:", $fontStyle, $defaultStyle);
		// $textrun = $section->addTextRun();
		$section->addText($data['nama_pihak1'].", NIK: ".$data['nik_pihak1']." Jenis Kelamin ".$data['jk_pihak1'].
			" Tempat/Tanggal Lahir ".$data['ttl_pihak1']." Umur ".$umur_p1." Tahun,"
			."Warga Negara Indonesia, Agama Islam, Status Perkawinan Kawin, Pendidikan ".$data['pend_pihak1'].
			" Pekerjaan ".$data['pekerjaan_pihak1']." Nomor HP ".$data['nomor_hp_pihak1'].", yang saat ini ".
			"beralamat di ".$data['alamat_pihak1']."; Selanjutnya disebut Pemohon I", $fontStyle, array('keepLines' => true, 'indentation' => array('left' => 440, 'hanging' => 440)));
		// $textrun->addText('Pemohon 1', $fontStyle2, array('keepLines' => true, 'indentation' => array('left' => 240, 'hanging' => 240)));
		// $textrun = $section->addTextRun();
		$section->addText($data['nama_pihak2'].", NIK: ".$data['nik_pihak2']." Jenis Kelamin ".$data['jk_pihak2'].
		" Tempat/Tanggal Lahir ".$data['ttl_pihak2']." Umur ".$umur_p2." Tahun,"
		."Warga Negara Indonesia, Agama Islam, Status Perkawinan Kawin, Pendidikan ".$data['pend_pihak2'].
		" Pekerjaan ".$data['pekerjaan_pihak2']." Nomor HP ".$data['nomor_hp_pihak2'].", yang saat ini ".
		"beralamat di ".$data['alamat_pihak2']."; Selanjutnya disebut Pemohon II", $fontStyle, array('keepLines' => true, 'indentation' => array('left' => 440, 'hanging' => 440)));
		// $textrun->addText('Pemohon 2', $fontStyle2, $defaultStyle);
		$textrun = $section->addTextRun();
		$textrun->addText('Selanjutnya Pemohon I dan Pemohon II disebut juga sebagai ', $fontStyle, $defaultStyle);
		$textrun->addText('"Para Pemohon"', $fontStyle2, $defaultStyle);
		$section->addText('Dengan ini Para Pemohon mengajukan Permohonan Itsbat Nikah. ' 
		.'Adapun dalil-dalil Permohonannya sebagai berikut :', $fontStyle, $defaultStyle);
		$section->addListItem('Bahwa Para Pemohon telah menikah sah secara Hukum Islam pada tanggal '.$data['tanggal_nikah'].
			' di '.$data['lokasi_nikah'].';',0,$fontStyle,$multilevelList1);
		$section->addListItem('Bahwa yang menikahkan sekaligus menjadi Wali Nikah Pemohon I dengan Pemohon II adalah '.$data['status_walinikah'].
			' Pemohon II yang bernama '.$data['nama_walinikah'].' dengan disaksikan oleh dua orang Saksi'.
			' yang bernama 1. '.$data['nama_saksi1'].' dan 2. '.$data['nama_saksi2'].' dengan mahar berupa '.$data['mahar'].' Mayam dibayar tunai;',0,$fontStyle,$multilevelList1);
		$section->addListItem('Bahwa sebelum menikah, Pemohon I berstatus Perjaka dan Pemohon II berstatus Gadis;', 0, $fontStyle, $multilevelList1);
		$section->addListItem('Bahwa antara Pemohon I dengan Pemohon II tidak ada hubungan darah' 
		.'dan tidak sesusuan serta memenuhi syarat dan/atau tidak ada larangan untuk '
		.'melangsungkan pernikahan, baik menurut ketentuan hukum Islam dan perundang-undangan, '
		.'maupun adat istiadat yang berlaku;', 0, $fontStyle, $multilevelList1);
		$section->addListItem('Bahwa setelah pernikahan tersebut Para Pemohon bertempat tinggal di '.$data['tempattinggal_nikah'].';', 0, $fontStyle, $multilevelList1);
		$section->addListItem('Bahwa dari pernikahan antara Pemohon I dan Pemohon II tersebut telah dikaruniai '.$jumlah_anak.' orang anak yang masing-masing bernama:', 0, $fontStyle,$multilevelList1);
		for($x=0;$x<$jumlah_anak;$x++){
				$section->addListItem($data_anak[$x]['nama'].', Jenis Kelamin '.$data_anak[$x]['jk'].' Tempat/Tanggal Lahir di '.$data_anak[$x]['ttl'].', NIK '.
			$data_anak[$x]['nik'].', Pendidikan '.$data_anak[$x]['pendidikan'].', Status '.$data_anak[$x]['status'].', Umur '.$data_anak[$x]['umur'].' tahun;',1,$fontStyle,$multilevelList1);
		}
		$section->addListItem('Bahwa selama pernikahan tersebut tidak ada pihak ketiga yang mengganggu gugat, dan Para Pemohon tidak pernah bercerai yang memutuskan hubungan pernikahannya;',0,$fontStyle,$multilevelList1);
		$section->addListItem('Bahwa semenjak menikah Para Pemohon belum pernah mendapat buku nikah yang sah sebagaimana yang dikehendaki oleh undang-undang, dan peraturan lain yang berhubungan dengan perkawinan disebabkan karena Nikah dibawah tangan atau menikah secara kampung;',0,$fontStyle,$multilevelList1);
		$section->addListItem('Bahwa saat ini Para Pemohon membutuhkan bukti pernikahannya tersebut untuk kepastian hukum Para Pemohon dan sebagai syarat pembuatan Buku Nikah di Kantor Urusan Agama Kecamatan '.
		$data['kecamatan_kua'].' Kabupaten '.$data['kabupaten_kua'],0,$fontStyle,$multilevelList1);
		$textrun = $section->addTextRun();
		$textrun->addText('Berdasarkan hal-hal tersebut diatas, ', $fontStyle2, $defaultStyle);
		$textrun->addText('Para Pemohon memohon kepada Yth. Ketua Mahkamah Syar\'iyah Suka Makmue c.q Majelis Hakim yang memeriksa dan mengadili perkara ini, untuk menjatuhkan penetapan yang amarnya berbunyi sebagai berikut:', $fontStyle, $defaultStyle);
		$section->addText('Primer:',$fontStyle2,$defaultStyle);
		$section->addListItem('Mengabulkan permohonan Para Pemohon;',0,$fontStyle,$multilevelList2);
		$section->addListItem('Menetapkan sah pernikahan Pemohon I ('.$data['nama_pihak1'].') dengan Pemohon II ('.$data['nama_pihak2'].') yang dilaksanakan pada tanggal '.
			$data['tanggal_nikah'].' di '.$data['lokasi_nikah'].';',0,$fontStyle,$multilevelList2);
		$section->addListItem('Memerintahkan kepada Para Pemohon untuk mencatatkan pernikahan tersebut pada Kantor Urusan Agama '.$data['kecamatan_kua'].' Kabupaten '.$data['kabupaten_kua'].';',0,$fontStyle,$multilevelList2);
		$section->addListItem('Menetapkan biaya perkara menurut hukum;',0,$fontStyle,$multilevelList2);
		$section->addText('Subsider:',$fontStyle2,$defaultStyle);
		$section->addText('Apabila Majelis Hakim Mahkamah Syar\'iyah Suka Makmue berpendapat lain, mohon putusan yang seadil-adilnya.', $fontStyle, $defaultStyle);
		$section->addText('Demikian permohonan ini diajukan, atas dikabulkannya permohonan ini Para Pemohon ucapkan terima kasih.',$fontStyle, $defaultStyle);
		$section->addText('Wassalamu\'alaikum Wr. Wb.',$fontStyle3, $defaultStyle);
		$rows = 1;
		$cols = 1;

		$table = $section->addTable();
		for ($r = 1; $r <= $rows; $r++) {
			$table->addRow();
			for ($c = 1; $c <= $cols; $c++) {
				$table->addCell(10000)->addText("Pemohon I", $fontStyle, $defaultStyle);
				$table->addCell(10000)->addText("Pemohon II", $fontStyle, $defaultStyle);
			}
		}
		$section->addText('');
		$section->addText('');
		$section->addText('');
		$section->addText('');
		$table = $section->addTable();
		for ($r = 1; $r <= $rows; $r++) {
			$table->addRow();
			for ($c = 1; $c <= $cols; $c++) {
				$table->addCell(10000)->addText($data['nama_pihak1'], $fontStyle, $defaultStyle);
				$table->addCell(10000)->addText($data['nama_pihak2'], $fontStyle, $defaultStyle);
			}
		}

		

        
		
		// $filename = 'docs/'.date('Y-m-d H:i:s') . '.docx';		
		
		header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        // $objWriter->save('php://output');
		$objWriter->save('./docs/'.$filename);
	}
}
