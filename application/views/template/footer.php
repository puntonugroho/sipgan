 <!-- 
    - custom js link
  -->
  <!-- jQuery -->
  <script src="./assets/plugins/jquery/jquery.min.js"></script>
  <script src="./assets/js/script.js" defer></script>
  <script src="./assets/js/custom.js"></script>
  
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./assets/js/adminlte.min.js"></script>
  <script src="./assets/plugins/moment/moment.min.js"></script>
  <script src="./assets/plugins/moment/locales.min.js"></script>
  <!-- date-range-picker -->
  <script src="./assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="./assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Select2 -->
  <script src="./assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="./assets/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Custom Script -->
  <script src="./assets/js/customValidate.js"></script>
  <script>
      //Date picker
      $(function (){
        $('#kecamatan_kua').select2({
          placeholder: "Silahkan pilih Kecamatan KUA",
          allowClear: true
        });

        $('#kecamatan_setelah').select2({
          placeholder: "Silahkan pilih Kecamatan Setelah Pernikahan",
          allowClear: true
        });

        $('#kelurahan_setelah').select2({
          placeholder: "Silahkan pilih Kelurahan Setelah Pernikahan",
          allowClear: true
        });

        $('#kecamatan_pernikahan').select2({
          placeholder: "Silahkan pilih Kecamatan Pernikahan",
          allowClear: true
        });

        $('#kelurahan_pernikahan').select2({
          placeholder: "Silahkan pilih Kelurahan Pernikahan",
          allowClear: true
        });

        $('#kecamatan_pemohon1').select2({
          placeholder: "Silahkan pilih Kecamatan Pemohon 1",
          allowClear: true
        });

        $('#kelurahan_pemohon1').select2({
          placeholder: "Silahkan pilih Kelurahan Pemohon 1",
          allowClear: true
        });

        $('#kecamatan_pemohon2').select2({
          placeholder: "Silahkan pilih Kecamatan Pemohon 2",
          allowClear: true
        });

        $('#kelurahan_pemohon2').select2({
          placeholder: "Silahkan pilih Kelurahan Pemohon 2",
          allowClear: true
        });

        $('#pendidikan_pemohon1').select2({
          placeholder: "Silahkan pilih Pendidikan Pemohon 1",
          allowClear: true
        });
        
        $('#pendidikan_pemohon2').select2({
          placeholder: "Silahkan pilih Pendidikan Pemohon 2",
          allowClear: true
        });

        $('#tanggal_permohonan').datetimepicker({
          locale: 'id',
          format: 'DD MMMM YYYY'
        });

        $('#tanggallahir_pemohon1').datetimepicker({
          locale: 'id',
          format: 'DD MMMM YYYY'
        });

        $('#tanggallahir_pemohon2').datetimepicker({
          locale: 'id',
          format: 'DD MMMM YYYY'
        });
        
        $('#tanggalpernikahan').datetimepicker({
          locale: 'id',
          format: 'DD MMMM YYYY'
        });
      });
  </script>

</body>

</html>