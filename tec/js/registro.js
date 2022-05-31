$(document).ready( function () {
    $('#myTable').DataTable({
        "order": [[ 0, "desc" ]],
    });

    $("#btnUpdate").hide();
} );

$(document).ready(function(){
    $('#btnRegistro').click(function(){

        datos=$('#frmDatos').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/registro.php",
            success:function(r){
                console.log(r);
                if(r == "   \r\nok")
                {
                    
                    alertify.success('Registro Correcto');
                    setTimeout(function(){ location.reload(); }, 3000);
    
                }
                else
                {
                    alertify.error('Error');
                }
                
            }
        });
    });
});

function actualizar(id, curp, nombre, ap, am, fecha, genero, ojos, cabello, etnia, rasgos, estatus, tel, correo)
{
    $("#idMenor").val(id);
    $("#CURP").val(curp);
    $("#nombre").val(nombre);
    $("#apPaterno").val(ap);
    $("#apMaterno").val(am);
    $("#fechaNac").val(fecha);
    $("#genero").val(genero);
    $("#color_ojos").val(ojos);
    $("#color_cabello").val(cabello);
    $("#etnia").val(etnia);
    $("#otros_rasgos").val(rasgos);
    $("#status").val(estatus);
    $("#telefono").val(tel);
    $("#email").val(correo);
    $("#btnRegistro").hide();
    $("#btnUpdate").show();
}

$(document).ready(function(){
    $('#btnUpdate').click(function(){

        datos=$('#frmDatos').serialize();
        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/actualizar.php",
            success:function(r){
                console.log(r);
                if(r == "   \r\nok")
                {
                    
                    alertify.success('Registro Actualizado');
                    setTimeout(function(){ location.reload(); }, 2000);
    
                }
                else
                {
                    alertify.error('Error');

                }
                
            }
        });
    });
});

function eliminar(id)
{
    alertify.confirm('Articulos',"Desea Eliminar el Registro?",
  function(){
    $.ajax({
        type: "POST",
        data: "idMenor=" + id,
        url: "procesos/eliminar.php",
        success: function (r) {
            if (r == "   \r\nok") {
                alertify.success('Registro Eliminado');
                setTimeout(function(){ location.reload(); }, 2000);

            }
            else {
                alertify.error('Error'); 
            }

        }
    });
  },
  function(){
    alertify.error('Cancelado');
  });
}