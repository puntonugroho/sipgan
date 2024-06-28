<body>
	<div class="wrapper">
    <a href="" id="downloadFile"></a>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="margin-left: 0px">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-10">
							<h1>Formulir Permohonan Mandiri Istbat Nikah</h1>
						</div>
						<div class="col-sm-2">
							<a href="<?php echo base_url('dashboard') ?>" type="button"
								class="btn btn-outline-danger btn-block btn-sm">
								<i class="fa fa-arrow-left"></i> Kembali</a>
						</div>
					</div>
          <div class="row mb-2">
            <div class="col sm-10">
              <p class="text-info">
                Silahkan Isi Formulir Dibawah dengan Data Anda
              </p>
            </div>
          </div>
				</div><!-- /.container-fluid -->
			</section>
      

			<!-- Main content -->
			<section class="content">
				<form id="form_isbat">
          <div class="form-group">
            <label for="tanggalPermohonan">Tanggal Surat Permohonan</label>
            <div class="input-group date" id="tanggal_permohonan" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" data-target="#tanggal_permohonan" placeholder="Silahkan Pilih Tanggal Surat Permohonan"/>
              <div class="input-group-append" data-target="#tanggal_permohonan" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>  
          <div id="accordion">
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title w-100">
                  <a class="d-block w-100" href="#pemohon1" data-toggle="collapse">
                    Biodata Pemohon 1
                  </a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div id="pemohon1" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaPemohon1">Nama Pemohon 1</label>
                    <input type="text" class="form-control" id="nama_pemohon1" name="nama_pemohon1" placeholder="Contoh: Joni bin Fulan">
                  </div>
                  <div class="form-group">
                    <label for="nikPemohon1">Nomor Induk Kependudukan (NIK) Pemohon 1</label>
                    <input type="text" class="form-control" id="nik_pemohon1" name="nik_pemohon1" placeholder="Masukan NIK Pemohon 1">
                  </div>
                  <div class="form-group">
                    <label for="jkPemohon1">Jenis Kelamin Pemohon 1</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_pemohon1" value="1">
                      <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_pemohon1" value="2">
                      <label class="form-check-label">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tempatLahirPemohon1">Tempat Lahir Pemohon 1</label>
                    <input type="text" class="form-control" id="tempatlahir_pemohon1" name="tempatlahir_pemohon1" placeholder="Masukan Tempat Lahir Pemohon 1">
                  </div>
                  <div class="form-group">
                    <label for="tanggalLahirPemohon1">Tanggal Lahir Pemohon 1</label>
                    <div class="input-group date" id="tanggallahir_pemohon1" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#tanggallahir_pemohon1" placeholder="Silahkan Pilih Tanggal Lahir Pemohon 1"/>
                      <div class="input-group-append" data-target="#tanggallahir_pemohon1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pendidikanPemohon1">Pendidikan</label>
                    <select name="pendidikan_pemohon1" id="pendidikan_pemohon1" class="form-control select2bs4">
                      <option></option>
                      <option value="0">Belum Sekolah</option>
                      <option value="1">Tidak Sekolah</option>
                      <option value="2">TK</option>
                      <option value="3">SD</option>
                      <option value="4">SLTP/SMP</option>
                      <option value="5">SLTA/SMA</option>
                      <option value="6">D1</option>
                      <option value="7">D2</option>
                      <option value="8">D3</option>
                      <option value="9">D4</option>
                      <option value="10">S1</option>
                      <option value="11">S2</option>
                      <option value="12">S3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pekerjaanPemohon1">Pekerjaan Pemohon 1</label>
                    <input type="text" class="form-control" id="pekerjaan_pemohon1" name="pekerjaan_pemohon1" placeholder="Masukan Pekerjaan Pemohon 1">
                  </div>
                  <div class="form-group">
                    <label for="nomorHandphonePemohon1">Nomor Handphone Pemohon 1</label>
                    <input type="text" class="form-control" id="nomorhp_pemohon1" name="nomorhp_pemohon1" placeholder="Masukan Nomor Handphone Pemohon 1" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                  </div>
                  <div class="form-group">
                    <label for="tempatpernikahan">Alamat Pemohon 1</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Dusun</span>
                      </div>
                      <input type="text" class="form-control" name="dusun_pemohon1" id="dusun_pemohon1" placeholder="Silahkan Isikan Nama Dusun Pemohon 1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kecamatan/Desa</span>
                      </div>
                      <select name="kecamatan_pemohon1" id="kecamatan_pemohon1" class="form-control select2bs4">
                        <option></option>
                        <?php for($i=0;$i<count($id_kecamatan);$i++){ ?>
                        <option value="<?php echo $id_kecamatan[$i] ?>"><?php echo $nama_kecamatan[$i]; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Gampong/Kelurahan</span>
                      </div>
                      <!-- <input type="text" class="form-control" name="gampong_pemohon1" id="gampong_pemohon1" placeholder="Silahkan Isikan Nama Gampong"> -->
                      <select name="kelurahan_pemohon1" id="kelurahan_pemohon1" class="form-control select2bs4">
                        <option></option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kabupaten</span>
                      </div>
                      <input type="text" class="form-control" name="kabupaten_pemohon1" id="kabupaten_pemohon1" placeholder="Silahkan Isikan Nama Kabupaten Pemohon 1">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Provinsi</span>
                      </div>
                      <input type="text" class="form-control" name="provinsi_pemohon1" id="provinsi_pemohon1" placeholder="Silahkan Isikan Nama Provinsi Pemohon 1">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label for="alamatPemohon1">Alamat Pemohon 1</label>
                    <textarea class="form-control" rows="3" placeholder="Silahkan Masukan Alamat Pemohon 1" name="alamat_pemohon1"></textarea>
                  </div> -->
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title w-100">
                  <a class="d-block w-100" href="#pemohon2" data-toggle="collapse">
                    Biodata Pemohon 2
                  </a>
                </h3>
              </div>
              <!-- /.card-header -->
              <div id="pemohon2" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaPemohon2">Nama Pemohon 2</label>
                    <input type="text" class="form-control" id="nama_pemohon2" name="nama_pemohon2" placeholder="Contoh: Joni bin Fulan">
                  </div>
                  <div class="form-group">
                    <label for="nikPemohon2">Nomor Induk Kependudukan (NIK) Pemohon 2</label>
                    <input type="text" class="form-control" id="nik_pemohon2" name="nik_pemohon2" placeholder="Masukan NIK Pemohon 2">
                  </div>
                  <div class="form-group">
                    <label for="jkPemohon2">Jenis Kelamin Pemohon 2</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_pemohon2" value="1">
                      <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_pemohon2" value="2">
                      <label class="form-check-label">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tempatLahirPemohon2">Tempat Lahir Pemohon 2</label>
                    <input type="text" class="form-control" id="tempatlahir_pemohon2" name="tempatlahir_pemohon2" placeholder="Masukan Tempat Lahir Pemohon 2">
                  </div>
                  <div class="form-group">
                    <label for="tanggalLahirPemohon2">Tanggal Lahir Pemohon 2</label>
                    <div class="input-group date" id="tanggallahir_pemohon2" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#tanggallahir_pemohon2" placeholder="Silahkan Pilih Tanggal Lahir Pemohon 2"/>
                      <div class="input-group-append" data-target="#tanggallahir_pemohon2" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="pendidikanPemohon2">Pendidikan</label>
                    <select name="pendidikan_pemohon2" id="pendidikan_pemohon2" class="form-control select2bs4">
                      <option></option>
                      <option value="0">Belum Sekolah</option>
                      <option value="1">Tidak Sekolah</option>
                      <option value="2">TK</option>
                      <option value="3">SD</option>
                      <option value="4">SLTP/SMP</option>
                      <option value="5">SLTA/SMA</option>
                      <option value="6">D1</option>
                      <option value="7">D2</option>
                      <option value="8">D3</option>
                      <option value="9">D4</option>
                      <option value="10">S1</option>
                      <option value="11">S2</option>
                      <option value="12">S3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pekerjaanPemohon2">Pekerjaan Pemohon 2</label>
                    <input type="text" class="form-control" id="pekerjaan_pemohon2" name="pekerjaan_pemohon2" placeholder="Masukan Pekerjaan Pemohon 2">
                  </div>
                  <div class="form-group">
                    <label for="nomorHandphonePemohon2">Nomor Handphone Pemohon 2</label>
                    <input type="text" class="form-control" id="nomorhp_pemohon2" name="nomorhp_pemohon2" placeholder="Masukan Nomor Handphone Pemohon 2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                  </div>
                  <div class="form-group">
                    <label for="tempatpernikahan">Alamat Pemohon 2</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Dusun</span>
                      </div>
                      <input type="text" class="form-control" name="dusun_pemohon2" id="dusun_pemohon2" placeholder="Silahkan Isikan Nama Dusun Pemohon 2">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kecamatan/Desa</span>
                      </div>
                      <select name="kecamatan_pemohon2" id="kecamatan_pemohon2" class="form-control select2bs4">
                        <option></option>
                        <?php for($i=0;$i<count($id_kecamatan);$i++){ ?>
                        <option value="<?php echo $id_kecamatan[$i] ?>"><?php echo $nama_kecamatan[$i]; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Gampong/Kelurahan</span>
                      </div>
                      <!-- <input type="text" class="form-control" name="gampong_pemohon1" id="gampong_pemohon1" placeholder="Silahkan Isikan Nama Gampong"> -->
                      <select name="kelurahan_pemohon2" id="kelurahan_pemohon2" class="form-control select2bs4">
                        <option></option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kabupaten</span>
                      </div>
                      <input type="text" class="form-control" name="kabupaten_pemohon2" id="kabupaten_pemohon2" placeholder="Silahkan Isikan Nama Kabupaten Pemohon 2">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Provinsi</span>
                      </div>
                      <input type="text" class="form-control" name="provinsi_pemohon2" id="provinsi_pemohon2" placeholder="Silahkan Isikan Nama Provinsi Pemohon 2">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title w-100">
                  <a href="#datapernikahan" data-toggle="collapse" class="d-block w-100">
                    Data Pernikahan Para Pemohon
                  </a>
                </h3>
              </div>
              <div id="datapernikahan" data-parent="#accordion" class="collapse">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tanggalPernikahan">Tanggal Pernikahan</label>
                    <div class="input-group date" id="tanggalpernikahan" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#tanggalpernikahan" placeholder="Silahkan Pilih Tanggal Pernikahan"/>
                      <div class="input-group-append" data-target="#tanggalpernikahan" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tempatpernikahan">Alamat Pernikahan</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kecamatan/Desa</span>
                      </div>
                      <!-- <input type="text" class="form-control" name="kecamatan_pernikahan" id="kecamatan_pernikahan" placeholder="Silahkan Isikan Nama Kecamatan/Desa"> -->
                      <select name="kecamatan_pernikahan" id="kecamatan_pernikahan" class="form-control select2bs4">
                        <option></option>
                        <?php for($i=0;$i<count($id_kecamatan);$i++){ ?>
                        <option value="<?php echo $id_kecamatan[$i] ?>"><?php echo $nama_kecamatan[$i]; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Gampong/Kelurahan</span>
                      </div>
                      <!-- <input type="text" class="form-control" name="gampong_pernikahan" id="gampong_pernikahan" placeholder="Silahkan Isikan Nama Gampong"> -->
                      <select name="kelurahan_pernikahan" id="kelurahan_pernikahan" class="form-control select2bs4">
                        <option></option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kabupaten</span>
                      </div>
                      <input type="text" class="form-control" name="kabupaten_pernikahan" id="kabupaten_pernikahan" placeholder="Silahkan Isikan Nama Kabupaten">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Provinsi</span>
                      </div>
                      <input type="text" class="form-control" name="provinsi_pernikahan" id="provinsi_pernikahan" placeholder="Silahkan Isikan Nama Provinsi">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="namaWaliNikah">Nama Wali Nikah</label>
                    <input type="text" class="form-control" name="nama_walinikah" id="nama_walinikah" placeholder="Silahkan Isi Nama Wali Nikah">
                  </div>
                  <div class="form-group">
                    <label for="statusWaliNikah">Status Wali Nikah</label>
                    <input type="text" class="form-control" name="status_walinikah" id="status_walinikah" placeholder="Silahkan Isi Status Wali Nikah, Contoh: Paman">
                  </div>
                  <div class="form-group">
                    <label for="namaSaksi1">Nama Saksi 1</label>
                    <input type="text" class="form-control" name="nama_saksi1" id="nama_saksi1" placeholder="Silahkan Isi Nama Saksi 1, Contoh: Roni bin Fulan">
                  </div>
                  <div class="form-group">
                    <label for="namaSaksi2">Nama Saksi 2</label>
                    <input type="text" class="form-control" name="nama_saksi2" id="nama_saksi2" placeholder="Silahkan Isi Nama Saksi 2, Contoh: Roni bin Fulan">
                  </div>
                  <div class="form-group">
                    <label for="mahar">Mahar Pernikahan</label>
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" id="mahar" name="mahar" placeholder="Silahkan Masukan Jumlah Mahar" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                      <div class="input-group-append">
                        <span class="input-group-text">Mayam</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamatpernikahan">Tempat Tinggal Setelah Pernikahan</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kecamatan/Desa</span>
                      </div>
                      <!-- <input type="text" class="form-control" name="kecamatan_setelah" id="kecamatan_setelah" placeholder="Silahkan Isikan Nama Kecamatan/Desa"> -->
                      <select name="kecamatan_setelah" id="kecamatan_setelah" class="form-control select2bs4">
                        <option></option>
                        <?php for($i=0;$i<count($id_kecamatan);$i++){ ?>
                        <option value="<?php echo $id_kecamatan[$i] ?>"><?php echo $nama_kecamatan[$i]; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Gampong/Kelurahan</span>
                      </div>
                      <!-- <input type="text" class="form-control" name="gampong_setelah" id="gampong_setelah" placeholder="Silahkan Isikan Nama Gampong"> -->
                      <select name="kelurahan_setelah" id="kelurahan_setelah" class="form-control select2bs4">
                        <option></option>
                      </select>
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kabupaten</span>
                      </div>
                      <input type="text" class="form-control" name="kabupaten_setelah" id="kabupaten_setelah" placeholder="Silahkan Isikan Nama Kabupaten">
                    </div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Provinsi</span>
                      </div>
                      <input type="text" class="form-control" name="provinsi_setelah" id="provinsi_setelah" placeholder="Silahkan Isikan Nama Provinsi">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title w-100">
                  <a href="#dataanak" class="d-block w-100" data-toggle="collapse">
                    Biodata Anak
                  </a>
                </h3>
              </div>
              <div class="collapse" id="dataanak" data-parent="#accordion">
                <div class="card-body">
                  <div class="from-group">
                    <label for="jumlahAnak">Jumlah Anak</label>
                    <input type="text" class="form-control" name="jumlah_anak" id="jumlah_anak" placeholder="Isikan Jumlah Anak" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                    <small>Note: Tekan Enter Setelah Input Jumlah Anak, Jika Ingin Mengulang Masukan Angka "0" Lalu Tekan Enter Kembali</small>
                  </div>
                  <div id="newFields"></div>
                </div>
              </div>
            </div>
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title w-100">
                  <a href="#datakua" class="d-block w-100" data-toggle="collapse">
                    Data Kantor Urusan Agama (KUA)
                  </a>
                </h3>
              </div>
              <div class="collapse" id="datakua" data-parent="#accordion">
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaKua">Nama Kantor Urusan Agama (KUA)</label>
                    <input type="text" class="form-control" id="nama_kua" name="nama_kua" placeholder="Isikan Nama Kantor Urusan Agama (KUA)">
                  </div>
                  <div class="form-group">
                    <label for="kecamatanKua">Kecamatan/Desa Kantor Urusan Agama (KUA)</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kecamatan/Desa</span>
                      </div>
                      <!-- <input type="text" class="form-control" name="kecamatan_kua" id="kecamatan_kua" placeholder="Silahkan Isikan Nama Kecamatan/Desa"> -->
                      <select name="kecamatan_kua" id="kecamatan_kua" class="form-control select2bs4">
                        <option></option>
                        <?php for($i=0;$i<count($id_kecamatan);$i++){ ?>
                        <option value="<?php echo $id_kecamatan[$i] ?>"><?php echo $nama_kecamatan[$i]; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kabupatenKua">Kabupaten/Kota Kantor Urusan Agama (KUA)</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kabupaten/Kota</span>
                      </div>
                      <input type="text" class="form-control" name="kabupaten_kua" id="kabupaten_kua" placeholder="Silahkan Isikan Nama Kabupaten/Kota">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row justify-content-center">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="validasiCheck">
              <label class="form-check-label" for="exampleCheck2">Data Yang Saya Input Sudah Sesuai Seluruhnya</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" id="buttonSubmit"><i class="fa fa-check"> Proses</i></button>
        </form>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
	</div>

	<!-- 
    - #FOOTER
  -->

	<footer class="footer2">
		<div class="container">

			<p class="copyright2">
				Template By : &copy; 2024 All Rights Reserved by <a href="#" class="copyright-link">Mahkamah Syar'iyah Suka
					Makmue</a>
				Template By : <a href="#" class="copyright-link">codewithsadee</a>
			</p>

		</div>
	</footer>
