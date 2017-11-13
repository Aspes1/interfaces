'use strict'

$(document).ready(function () {

    var formPendaftaran = $('#form-pendaftaran');

    formPendaftaran.validate({
        rules: {
            txt_nama_loket: {
                required: true,
                maxlength: 50
            },
            txt_no_ktp: {
                required: true,
                maxlength: 17,
                number: true
            },
            txt_nama_lengkap: {
                required: true,
                maxlength: 100
            },
            txt_no_phone: {
                required: true,
                maxlength: 20
            },
            txt_email:{
                required: true,
                email: true
            },
            txt_alamat :{
                required: true
            }
        },
        messages: {
            txt_nama_loket : {
                required    : "<span class='help-block text-warning'>Nama loket harus diisi</span>",
                maxlength   : "<i class='text-warning'>Jumlah karakter telah lebih dari 50.</i>"
            }
        }
    });


    //Event Form Pendaftaran Submit
    formPendaftaran.on('submit', function (e) {
        e.preventDefault();
        if(formPendaftaran.valid())
        {
            alert('Berhasil');
        }
       
    });

});