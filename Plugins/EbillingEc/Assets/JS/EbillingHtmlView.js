$(document).ready(function () {

    $('#generate').click(function(){
         var type = $(this).attr('data-type');
         var iddocument = $(this).attr('data-id');

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/DocumentController",
            data: `iddocument=${iddocument}&type=${type}&action=generate`,
            success: function(resp){
                if(resp.success){
                   alert("Documento generado correctamente");
                    window.location.reload();
                }else{
                    alert(`${resp.msg}`);
                }
            }
        });

        //alert("Funciona");

    });

    $('#sign').click(function(){
        var type = $(this).attr('data-type');
        var iddocument = $(this).attr('data-id');

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/DocumentController",
            data: `iddocument=${iddocument}&type=${type}&action=sign`,
            success: function(resp){
                if(resp.success){
                    alert("Documento firmado correctamente");
                    window.location.reload();
                }else{
                    alert(`${resp.msg}`);
                }
            }
        });

    });

    $('#auth').click(function(){
        var type = $(this).attr('data-type');
        var iddocument = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/DocumentController",
                data: `iddocument=${iddocument}&type=${type}&action=auth`,
                success: function(resp) {
                    if (resp.success) {
                        alert("Documento Autorizado correctamente");
                        window.location.reload();
                    } else {
                        alert(`${resp.msg}\n Solucione los errores para continuar\n Recuerde Re-generar el documento si es necesario`);
                    }
                }
            });
    });

    $('#print').click(function(){
        var type = $(this).attr('data-type');
        var iddocument = $(this).attr('data-id');
        $('#print').prop('disabled', true);

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/DocumentController",
            data: `iddocument=${iddocument}&type=${type}&action=print`,
            success: function(resp){
                if(resp.success) {
                    let pdf =`data:application/pdf;base64,${resp.pdf}`;
                    download(pdf, "Documento_"+resp.claveacceso+".pdf", "application/pdf;");
                    $('#print').prop('disabled', false);
                }
            }
        });

    });

    $('#getXml').click(function(){
        var type = $(this).attr('data-type');
        var iddocument = $(this).attr('data-id');

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/DocumentController",
            data: `iddocument=${iddocument}&type=${type}&action=getXml`,
            success: function(resp){
                if(resp.success) {
                    let pdf =`data:application/xml;base64,${resp.xml}`;
                    download(pdf, "Documento_"+resp.claveacceso+".xml", "application/xml;");
                }
            }
        });

    });

    $('#send').click(function(){
        var type = $(this).attr('data-type');
        var iddocument = $(this).attr('data-id');

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/DocumentController",
            data: `iddocument=${iddocument}&type=${type}&action=sendEmail`,
            success: function(resp){
                if(resp.success) {
                    alert(`Correo enviado a ${resp.email} correctamente`);
                }
            }
        });

    });



});