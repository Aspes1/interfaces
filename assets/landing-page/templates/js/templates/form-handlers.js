'use strict'

$(document).ready(function () {

    var formPendaftaran = $('#form-pendaftaran');
    var inputFileKTP    = $('#file_ktp');
    var inputFileNPWP   = $('#file_npwp');

    var imageFileKTP    = $('#imgFileKTP');
    var imageFileNPWP   = $('#imgFileNPWP');

    jQuery.validator.addMethod("notEqualTo", function(value, element, param) {
        return this.optional(element) || value != $(param).val();
    }, "This has to be different...");

    formPendaftaran.validate({
        rules:{
            nama_loket:{
                required: true,
                maxlength: 50
            },
            no_ktp: {
                required: true,
                maxlength: 17
            },
            no_npwp: {
                maxlength: 15
            },
            nama_lengkap: {
                required: true,
                maxlength: 100
            },
            no_telepon_1: {
                required: true,
                maxlength: 12
            },
            no_telepon_2: {
                maxlength: 12,
                notEqualTo:'#no_telepon_1'
            },
            email:{
                required: true,
                email: true
            },
            alamat :{
                required: true
            }
        },
        messages:{
            nama_loket : {
                required    : "<i class='text-warning'>Nama loket harus diisi</i>",
                maxlength   : "<i class='text-warning'>Jumlah karakter telah lebih dari 50.</i>"
            },
            no_ktp : {
                required    : "<i class='text-warning'>No. identitas (KTP) harus diisi</i>",
                maxlength   : "<i class='text-warning'>Jumlah karakter telah lebih dari 17</i>"
            },
            no_npwp : {
                maxlength   : "<i class='text-warning'>Jumlah karakter telah lebih dari 15</i>"
            },
            nama_lengkap : {
                required    : "<i class='text-warning'>Nama lengkap harus diisi</i>",
                maxlength   : "<i class='text-warning'>Jumlah karakter telah lebih dari 100</i>"
            },
            no_telepon_1 : {
                required    : "<i class='text-warning'>No Telepon/Handphone harus diisi</i>",
                maxlength   : "<i class='text-warning'>Jumlah No. Telepon tidak valid</i>"
            },
            no_telepon_2 : {
                maxlength   : "<i class='text-warning'>Jumlah No. Telepon tidak valid</i>",
                notEqualTo : "<i class='text-warning'>No Telepon 2 harus berbeda dengan No Telepon 1</i>"
            },
            email : {
                required    : "<i class='text-warning'>Email harus diisi</i>",
                email       : "<i class='text-warning'>Email yang diisi tidak valid</i>"
            },
            alamat : {
                required    : "<i class='text-warning'>Alamat harus diisi</i>"
            }
        }
    });


    //Event Form Pendaftaran Submit
    formPendaftaran.on('submit', function (e) {
        e.preventDefault();
        var str_url   = Settings.base_url + 'app/pendaftaran/daftar';

        var file_ktp  = inputFileKTP.prop('files')[0];
        var file_npwp = inputFileNPWP.prop('files')[0];

        // var form_data = new FormData();
        // form_data.append('file_ktp', file_ktp);

        var fKTP = $('#file_ktp').val();

        if(formPendaftaran.valid())
        {
            if(file_ktp.name == '')
            {
                confirmAlert('GAGAL', 'File Gambar KTP belum di upload', '')
                console.log('Error');
            }
        }


        // var components = {
        //     nama_loket   : $("input[name=nama_loket]").val(),
        //     no_ktp       : $("input[name=no_ktp]").val(),
        //     no_npwp      : ($("input[name=no_npwp]").val() != '') ? $("input[name=no_npwp]").val():'0',
        //     nama_lengkap : $("input[name=nama_lengkap]").val(),
        //     email        : $("input[name=email]").val(),
        //     no_telepon_1 : $("input[name=no_telepon_1]").val(),
        //     no_telepon_2 : $("input[name=no_telepon_2]").val(),
        //     alamat       : $('textarea#alamat').val(),
        //     ip_address   : $("input[name=ip_address]").val(),
        //     mac_address  : $("input[name=mac_address]").val(),
        //     file_ktp     : $('#file_ktp').prop('files')[0]
        // }


        // var file_data = $('#file_ktp').prop('files')[0];
        // var form_data = new FormData();
        // form_data.append('file', file_data);
        // console.log(form_data);
        // console.log(file_data);
        //console.log(components);
        //console.log(str_url);
        // if(formPendaftaran.valid()){
        //     alert('Berhasil');
        // }
        //console.log(file_ktp);
        // axios.post(str_url, form_data).then(function (response) {
        //     console.log(response);
        // }).catch(function (error) {
        //     console.log(error);
        // });
    });

    inputFileKTP.change(function(e) {
        readURLFile(this, imageFileKTP);
        var fileName = e.target.files[0].name;
        console.log(fileName)
    });

    inputFileNPWP.change(function() {
        readURLFile(this, imageFileNPWP);
    });

    var readURLFile = function (input, idOrClass) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $(idOrClass).attr('src', e.target.result);
                $(idOrClass).removeClass('hide');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


    var confirmAlert = function(title, messages, urls='') 
    {
        $.confirm({
            title: (title != '') ? title:' DEFAULT MESSAGES',
            content: "<p>" + messages + "</p>",
            typeAnimated: true,
            theme:'supervan',
            animation: 'zoom',
            animationSpeed: '500',
            buttons:{
                
                close: function() {
                    if(urls!='')
                        window.location.href = urls;
                }
    
            }
        });
    }

});
