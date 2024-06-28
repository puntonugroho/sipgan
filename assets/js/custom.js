$(document).ready(function(){
    
    var newFields = $('');
    // var divClone = $('#jumlah_anak').clone();
    
    $('#jumlah_anak').on('change', function(){
        // console.log(this.value);
        var n = this.value || 0;
        if(n+1){
            if(n > newFields.length){
                addFields(n);
                datepickermod(n);
                selectmod(n);
                for(var x=1; x<=n; x++){
                  $('#umur_anak'+x+'').on('keyup', function(){
                    if (/\D/g.test(this.value)) {this.value = this.value.replace(/\D/g,'')}
                  })
                }
            } else {
                removeFields(n);
            }
        }
    });
    
    function addFields(n){
        for (i = newFields.length; i<n; i++){
            var ke = i+1;
            var input = $('<br>' +
                '<h4>Anak Ke-'+ke+'</h4>'+
                '<div class="form-group">' +
                '<label for="namaAnak'+ke+'">Nama Anak ke-'+ke+'</label>' +
                '<input type="text" class="form-control" id="nama_anak'+ke+'" name="nama_anak'+ke+'" placeholder="Nama Anak ke-'+ke+', contoh Romi bin Fulan">' +
              '</div>' +
              '<div class="form-group">' +
              '<label for="jk_anak'+ke+'">Jenis Kelamin Anak Ke-'+ke+'</label>' +
              '<div class="form-check">' +
                '<input class="form-check-input" type="radio" name="jk_anak'+ke+'" value="1">' + 
                '<label class="form-check-label">Laki-Laki</label>' +
              '</div>' +
              '<div class="form-check">' +
                '<input class="form-check-input" type="radio" name="jk_anak'+ke+'" value="2">' +
                '<label class="form-check-label">Perempuan</label>' +
              '</div>' +
            '</div>'+
            '<div class="form-group">' +
            '<label for="tempatAnak'+ke+'">Tempat Lahir Anak ke-'+ke+'</label>' +
            '<input type="text" class="form-control" id="tempatlahir_anak'+ke+'" name="tempatlahir_anak'+ke+'" placeholder="Masukan Tempat Lahir Anak Ke-'+ke+'">'+
          '</div>'+
          '<div class="form-group">' +
          '<label for="tanggalLahirAnak">Tanggal Lahir Anak Ke-'+ke+'</label>' +
          '<div class="input-group date" id="tanggallahiranak'+ke+'" data-target-input="nearest">' +
            '<input type="text" class="form-control datetimepicker-input" data-target="#tanggallahiranak'+ke+'" placeholder="Silahkan Pilih Tanggal Lahir Anak Ke-'+ke+'"/>' +
            '<div class="input-group-append" data-target="#tanggallahiranak'+ke+'" data-toggle="datetimepicker">' +
              '<div class="input-group-text"><i class="fa fa-calendar"></i></div>' +
            '</div>' +
          '</div>' +
          '<div class="form-group">' +
          '<label for="nikAnak'+ke+'">Nomor Induk Kependudukan (NIK) Anak ke-'+ke+'</label>' +
          '<input type="text" class="form-control" id="nik_anak'+ke+'" name="nik_anak'+ke+'" placeholder="Masukan NIK Anak Ke-'+ke+'">' +
        '</div>'+
        '<div class="form-group">' +
        '<label for="pendidikanAnak'+ke+'">Pendidikan Anak Ke-'+ke+'</label>' +
        '<select name="pendidikan_anak'+ke+'" id="pendidikan_anak'+ke+'" class="form-control select2bs4">' +
          '<option></option>' +
          '<option value="0">Belum Sekolah</option>' +
          '<option value="1">Tidak Sekolah</option>' +
          '<option value="2">TK</option>' +
          '<option value="3">SD</option>' +
          '<option value="4">SLTP/SMP</option>' +
          '<option value="5">SLTA/SMA</option>' +
          '<option value="6">D1</option>' +
          '<option value="7">D2</option>' +
          '<option value="8">D3</option>' +
          '<option value="9">D4</option>' +
          '<option value="10">S1</option>' +
          '<option value="11">S2</option>' +
          '<option value="12">S3</option>' +
        '</select>' +
        '</div>' +
        '<div class="form-group">' +
          '<label for="statusAnak'+ke+'">Status Anak ke-'+ke+'</label>' +
          '<input type="text" class="form-control" id="status_anak'+ke+'" name="status_anak'+ke+'" placeholder="Status Anak ke-'+ke+'">' +
        '</div>' +
        '<div class="form-group">' +
        '<label for="umurAnak">Umur Anak Ke-'+ke+'</label>' +
        '<div class="input-group mb-3">' +
          '<input type="text" class="form-control" id="umur_anak'+ke+'" name="umur_anak'+ke+'" placeholder="Silahkan Umur Anak Ke-'+ke+'" >' +
          '<div class="input-group-append">' +
            '<span class="input-group-text">Tahun</span>' +
          '</div>' +
        '</div>' +
      '</div>');
            var newInput = input.clone();
            newFields = newFields.add(newInput);
            newInput.appendTo('#newFields');
        }
    };

    function removeFields(n){
        var removeFields = newFields.slice(n).remove();
        newFields = newFields.not(removeFields);
    };

    function selectmod(n){
        for(var x = 1; x <= n; x++)
        {
            $('#pendidikan_anak'+x+'').select2({
                placeholder: 'Silahkan pilih Pendidikan Anak ke-'+x+'',
                allowClear: true
            });
        }
    }

    function datepickermod(n){
        for(var x = 1; x <= n; x++){
            $('#tanggallahiranak'+x+'').datetimepicker({
                locale: 'id',
                format: 'DD MMMM YYYY'
            })
        }
    }

    $('#reset').click(function(){
        $('#newFields').empty();
        // $('#jumlah_anak').replaceWith(divClone);
        // console.log($('#jumlah_anak').val(0));
        $('#jumlah_anak').val(0);
    });

    $('#buttonSubmit').prop("disabled", true);
    $('#validasiCheck').change(function(){
      if(this.checked){
        $('#buttonSubmit').prop("disabled", false);
      } else {
        $('#buttonSubmit').prop("disabled", true);
      }
    })

    // $('input').keyup(function(){
    //   var element = $(this).val();
    //   if(element == ""){
    //   } else {
    //     $('#buttonSubmit').prop("disabled", false);
    //   }
    // })

    $('#kecamatan_pemohon1').change(function (){
      $('#kelurahan_pemohon1').empty();
      var data=$(this).val();
      //
      $.ajax({
        type: 'GET',
        url: 'isbat/get_kelurahan/'+data,
        dataType: 'json',
        success: function(row){
  
          var id = [];
          var text = [];
          var option = [];
          $.each(row.id,function(key,values){
            id.push(values);
          })
          $.each(row.text,function(key,values){
            text.push(values);
          })
  
          for(var i=0; i<id.length; i++)
          {
  
            option1 = new Option(text[i], id[i], false, false);
            option.push(option1);
          }
          $('#kelurahan_pemohon1').append(option).trigger('change');
        }
      })
    })

    $('#kecamatan_pemohon2').change(function (){
      $('#kelurahan_pemohon2').empty();
      var data=$(this).val();
      //
      $.ajax({
        type: 'GET',
        url: 'isbat/get_kelurahan/'+data,
        dataType: 'json',
        success: function(row){
  
          var id = [];
          var text = [];
          var option = [];
          $.each(row.id,function(key,values){
            id.push(values);
          })
          $.each(row.text,function(key,values){
            text.push(values);
          })
  
          for(var i=0; i<id.length; i++)
          {
  
            option1 = new Option(text[i], id[i], false, false);
            option.push(option1);
          }
          $('#kelurahan_pemohon2').append(option).trigger('change');
        }
      })
    })

    $('#kecamatan_pernikahan').change(function (){
      $('#kelurahan_pernikahan').empty();
      var data=$(this).val();
      //
      $.ajax({
        type: 'GET',
        url: 'isbat/get_kelurahan/'+data,
        dataType: 'json',
        success: function(row){
  
          var id = [];
          var text = [];
          var option = [];
          $.each(row.id,function(key,values){
            id.push(values);
          })
          $.each(row.text,function(key,values){
            text.push(values);
          })
  
          for(var i=0; i<id.length; i++)
          {
  
            option1 = new Option(text[i], id[i], false, false);
            option.push(option1);
          }
          $('#kelurahan_pernikahan').append(option).trigger('change');
        }
      })
    })

    $('#kecamatan_setelah').change(function (){
      $('#kelurahan_setelah').empty();
      var data=$(this).val();
      //
      $.ajax({
        type: 'GET',
        url: 'isbat/get_kelurahan/'+data,
        dataType: 'json',
        success: function(row){
  
          var id = [];
          var text = [];
          var option = [];
          $.each(row.id,function(key,values){
            id.push(values);
          })
          $.each(row.text,function(key,values){
            text.push(values);
          })
  
          for(var i=0; i<id.length; i++)
          {
  
            option1 = new Option(text[i], id[i], false, false);
            option.push(option1);
          }
          $('#kelurahan_setelah').append(option).trigger('change');
        }
      })
    })
  })