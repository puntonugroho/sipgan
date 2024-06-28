$(document).ready(function(){
    $("#form_isbat").submit(function(e){
        e.preventDefault();
        var tanggal_permohonan = $("#tanggal_permohonan").find("input").val();
        //Data Pemohon 1
        var nama_p1 = $('#nama_pemohon1').val();
        var nik_p1 = $('#nik_pemohon1').val();
        var jk_p1 = $('input[name="jk_pemohon1"]:checked').val();
        var tempatlahir_p1 = $('#tempatlahir_pemohon1').val();
        var tanggallahir_p1 = $("#tanggallahir_pemohon1").find("input").val();
        var pendidikan_p1 = $('#pendidikan_pemohon1').select2('data')[0]['text'];
        var pekerjaan_p1 = $('#pekerjaan_pemohon1').val();
        var nomorhp_p1 = $('#nomorhp_pemohon1').val();
        var dusun_p1 = $('#dusun_pemohon1').val();
        var kecamatan_p1_id = $('#kecamatan_pemohon1').select2('data')[0]['id'];
        var kecamatan_p1 = $('#kecamatan_pemohon1').select2('data')[0]['text'];
        var kelurahan_p1_id = $('#kelurahan_pemohon1').select2('data')[0]['id'];
        var kelurahan_p1 = $('#kelurahan_pemohon1').select2('data')[0]['text'];
        var kabupaten_p1 = $('#kabupaten_pemohon1').val();
        var provinsi_p1 = $('#provinsi_pemohon1').val();
        //Data Pemohon 2
        var nama_p2 = $('#nama_pemohon2').val();
        var nik_p2 = $('#nik_pemohon2').val();
        var jk_p2 = $('input[name="jk_pemohon2"]:checked').val();
        var tempatlahir_p2 = $('#tempatlahir_pemohon2').val();
        var tanggallahir_p2 = $("#tanggallahir_pemohon2").find("input").val();
        var pendidikan_p2 = $('#pendidikan_pemohon2').select2('data')[0]['text'];
        var pekerjaan_p2 = $('#pekerjaan_pemohon2').val();
        var nomorhp_p2 = $('#nomorhp_pemohon2').val();
        var dusun_p2 = $('#dusun_pemohon2').val();
        var kecamatan_p2_id = $('#kecamatan_pemohon2').select2('data')[0]['id'];
        var kecamatan_p2 = $('#kecamatan_pemohon2').select2('data')[0]['text'];
        var kelurahan_p2_id = $('#kelurahan_pemohon2').select2('data')[0]['id'];
        var kelurahan_p2 = $('#kelurahan_pemohon2').select2('data')[0]['text'];
        var kabupaten_p2 = $('#kabupaten_pemohon2').val();
        var provinsi_p2 = $('#provinsi_pemohon2').val();
        //Data Pernikahan
        var tanggalpernikahan = $("#tanggalpernikahan").find("input").val();
        var kecamatan_pernikahan_id = $('#kecamatan_pernikahan').select2('data')[0]['id'];
        var kecamatan_pernikahan = $('#kecamatan_pernikahan').select2('data')[0]['text'];
        var kelurahan_pernikahan_id = $('#kelurahan_pernikahan').select2('data')[0]['id'];
        var kelurahan_pernikahan = $('#kelurahan_pernikahan').select2('data')[0]['text'];
        var kabupaten_pernikahan = $('#kabupaten_pernikahan').val();
        var provinsi_pernikahan = $('#provinsi_pernikahan').val();
        var nama_walinikah = $('#nama_walinikah').val();
        var status_walinikah = $('#status_walinikah').val();
        var nama_saksi1 = $('#nama_saksi1').val();
        var nama_saksi2 = $('#nama_saksi2').val();
        var mahar = $('#mahar').val();
        var kecamatan_setelah_id = $('#kecamatan_setelah').select2('data')[0]['id'];
        var kecamatan_setelah = $('#kecamatan_setelah').select2('data')[0]['text'];
        var kelurahan_setelah_id = $('#kelurahan_setelah').select2('data')[0]['id'];
        var kelurahan_setelah = $('#kelurahan_setelah').select2('data')[0]['text'];
        var kabupaten_setelah = $('#kabupaten_setelah').val();
        var provinsi_setelah = $('#provinsi_setelah').val();
        //Data Anak
        var jumlah_anak = $('#jumlah_anak').val();
        var nama_anak = [];
        var jk_anak = [];
        var tempatlahir_anak = [];
        var tanggallahir_anak = [];
        var nik_anak = [];
        var pendidikan_anak = [];
        var status_anak = [];
        var umur_anak = [];
        for(var x=1; x<= jumlah_anak; x++){
            nama_anak.push($('#nama_anak'+x+'').val());
            jk_anak.push($('input[name="jk_anak'+x+'"]:checked').val());
            tempatlahir_anak.push($('#tempatlahir_anak'+x+'').val());
            tanggallahir_anak.push($('#tanggallahiranak'+x+'').find("input").val());
            nik_anak.push($('#nik_anak'+x+'').val());
            pendidikan_anak.push($('#pendidikan_anak'+x+'').select2('data')[0]['text']);
            status_anak.push($('#status_anak'+x+'').val());
            umur_anak.push($('#umur_anak'+x+'').val());
        }
        //Data KUA
        var nama_kua = $('#nama_kua').val();
        var kecamatan_kua = $('#kecamatan_kua').select2('data')[0]['id'];
        var kabupaten_kua = $('#kabupaten_kua').val();
        //
        var logic_tgl = (!tanggal_permohonan)
        var logic_p1 = (!nama_p1 || !nik_p1 || !jk_p1 || !tempatlahir_p1 || !tanggallahir_p1 || !pendidikan_p1 || !pekerjaan_p1 || !nomorhp_p1 || !dusun_p1 || !kecamatan_p1 || !kelurahan_p1 || !kabupaten_p1 || !provinsi_p1);
        var logic_p2 = (!nama_p2 || !nik_p2 || !jk_p2 || !tempatlahir_p2 || !tanggallahir_p2 || !pendidikan_p2 || !pekerjaan_p1 || !nomorhp_p2 || !dusun_p2 || !kecamatan_p2 || !kelurahan_p2 || !kabupaten_p2 || !provinsi_p2);
        var logic_datapernikahan = (!tanggalpernikahan || !kecamatan_pernikahan || !kelurahan_pernikahan || !kabupaten_pernikahan || !provinsi_pernikahan || !nama_walinikah || !status_walinikah || !nama_saksi1 || !nama_saksi2 || !mahar || !kecamatan_setelah || !kelurahan_setelah || !kabupaten_setelah || !provinsi_setelah);
        var logic_anak = (!jumlah_anak);
        var logic_kua = (!nama_kua || !kecamatan_kua || !kabupaten_kua);

        var formData = {};

        if(logic_tgl || logic_p1 || logic_p2 || logic_datapernikahan || logic_anak || logic_kua)
        {
            var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
            }).fire({
                icon: 'error',
                title: 'Masih ada Kolom yang Kosong, Silahkan Cek Kembali.'
            });
        } else if(jumlah_anak>0){
            var length_namaanak = nama_anak.length;
            var length_jkanak = jk_anak.length;
            var length_tempatlahiranak = tempatlahir_anak.length;
            var length_tanggallahiranak = tanggallahir_anak.length;
            var length_nikanak = nik_anak.length;
            var length_pendidikananak = pendidikan_anak.length;
            var length_statusanak = status_anak.length;
            var length_umuranak = umur_anak.length;
            var checkAnak = false;
            if(length_namaanak > 0 || length_jkanak > 0 || length_tempatlahiranak > 0 || length_tanggallahiranak > 0|| length_nikanak > 0 || length_pendidikananak > 0 || length_umuranak > 0 || length_statusanak > 0){
                for(var x = 0; x<jumlah_anak; x++){
                    if(nama_anak[x]=="" || jk_anak[x]=="" || tempatlahir_anak[x]=="" || tanggallahir_anak[x] == "" || nik_anak[x] == "" || pendidikan_anak[x] == "" || umur_anak[x] == "" || status_anak[x] == ""){
                        checkAnak = true;
                    } else {
                        checkAnak = false;
                    }
                } 
                if (checkAnak){
                    var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                    }).fire({
                        icon: 'error',
                        title: 'Masih ada Kolom yang Kosong Pada Biodata Anak, Silahkan Cek Kembali.'
                    });
                } else {
                    formData = {
                        tanggal_permohonan: tanggal_permohonan,
                        nama_p1: nama_p1,
                        nik_p1: nik_p1,
                        jk_p1: jk_p1,
                        tempatlahir_p1: tempatlahir_p1,
                        tanggallahir_p1: tanggallahir_p1,
                        pendidikan_p1: pendidikan_p1,
                        pekerjaan_p1: pekerjaan_p1,
                        nomorhp_p1: nomorhp_p1,
                        dusun_p1: dusun_p1,
                        kecamatan_p1: kecamatan_p1,
                        kelurahan_p1: kelurahan_p1,
                        kabupaten_p1: kabupaten_p1,
                        provinsi_p1: provinsi_p1,
                        nama_p2: nama_p2,
                        nik_p2: nik_p2,
                        jk_p2: jk_p2,
                        tempatlahir_p2: tempatlahir_p2,
                        tanggallahir_p2: tanggallahir_p2,
                        pendidikan_p2: pendidikan_p2,
                        pekerjaan_p2: pekerjaan_p2,
                        nomorhp_p2: nomorhp_p2,
                        dusun_p2: dusun_p2,
                        kecamatan_p2: kecamatan_p2,
                        kelurahan_p2: kelurahan_p2,
                        kabupaten_p2: kabupaten_p2,
                        provinsi_p2: provinsi_p2,
                        tanggalpernikahan: tanggalpernikahan,
                        kecamatan_pernikahan: kecamatan_pernikahan,
                        kelurahan_pernikahan: kelurahan_pernikahan,
                        kabupaten_pernikahan: kabupaten_pernikahan,
                        provinsi_pernikahan: provinsi_pernikahan,
                        nama_walinikah: nama_walinikah,
                        status_walinikah: status_walinikah,
                        nama_saksi1: nama_saksi1,
                        nama_saksi2: nama_saksi2,
                        mahar: mahar,
                        kecamatan_setelah: kecamatan_setelah,
                        kelurahan_setelah: kelurahan_setelah,
                        kabupaten_setelah: kabupaten_setelah,
                        provinsi_setelah: provinsi_setelah,
                        jumlah_anak: jumlah_anak,
                        nama_anak: nama_anak,
                        jk_anak: jk_anak,
                        tempatlahir_anak: tempatlahir_anak,
                        tanggallahir_anak: tanggallahir_anak,
                        nik_anak: nik_anak,
                        pendidikan_anak: pendidikan_anak,
                        status_anak: status_anak,
                        umur_anak: umur_anak,
                        nama_kua: nama_kua,
                        kecamatan_kua: kecamatan_kua,
                        kabupaten_kua: kabupaten_kua
                    };
                }
            }
        } else {
            formData = {
                tanggal_permohonan: tanggal_permohonan,
                nama_p1: nama_p1,
                nik_p1: nik_p1,
                jk_p1: jk_p1,
                tempatlahir_p1: tempatlahir_p1,
                tanggallahir_p1: tanggallahir_p1,
                pendidikan_p1: pendidikan_p1,
                pekerjaan_p1: pekerjaan_p1,
                nomorhp_p1: nomorhp_p1,
                dusun_p1: dusun_p1,
                kecamatan_p1: kecamatan_p1,
                kelurahan_p1: kelurahan_p1,
                kabupaten_p1: kabupaten_p1,
                provinsi_p1: provinsi_p1,
                nama_p2: nama_p2,
                nik_p2: nik_p2,
                jk_p2: jk_p2,
                tempatlahir_p2: tempatlahir_p2,
                tanggallahir_p2: tanggallahir_p2,
                pendidikan_p2: pendidikan_p2,
                pekerjaan_p2: pekerjaan_p2,
                nomorhp_p2: nomorhp_p2,
                dusun_p2: dusun_p2,
                kecamatan_p2: kecamatan_p2,
                kelurahan_p2: kelurahan_p2,
                kabupaten_p2: kabupaten_p2,
                provinsi_p2: provinsi_p2,
                tanggalpernikahan: tanggalpernikahan,
                kecamatan_pernikahan: kecamatan_pernikahan,
                kelurahan_pernikahan: kelurahan_pernikahan,
                kabupaten_pernikahan: kabupaten_pernikahan,
                provinsi_pernikahan: provinsi_pernikahan,
                nama_walinikah: nama_walinikah,
                status_walinikah: status_walinikah,
                nama_saksi1: nama_saksi1,
                nama_saksi2: nama_saksi2,
                mahar: mahar,
                kecamatan_setelah: kecamatan_setelah,
                kelurahan_setelah: kelurahan_setelah,
                kabupaten_setelah: kabupaten_setelah,
                provinsi_setelah: provinsi_setelah,
                jumlah_anak: jumlah_anak,
                nama_kua: nama_kua,
                kecamatan_kua: kecamatan_kua,
                kabupaten_kua: kabupaten_kua
            }
        }
        $.ajax({
            type: "POST",
            url: "isbat/simpan_cetak",
            data: formData,
            dataType: "json",
            encode: true,
            success: function(data){
            if(data.sukses == false){
                var Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
                }).fire({
                    icon: 'error',
                    title: data.errors.error
                });
                } else {
                    var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 7000
                    }).fire({
                    icon: 'success',
                    title: data.pesan
                    });
                    $('#downloadFile').attr("href", './docs/'+data.file+'');
                    document.getElementById('downloadFile').click();
                    setTimeout(function () { 
                        location.reload(true); 
                    }, 10000); 
                }
            }
        })
    });
})