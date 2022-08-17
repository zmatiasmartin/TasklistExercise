$(document).ready(function () {
 
  $(".card").on('click', function (event) {
    var myModal = $('#modalTask').modal('show');
    myModal.find('.modal-title').text($(this).find('.card-title').text());
    myModal.find('.modal-body p').text($(this).find('.card-text').text()); 
  
    $('#aModificar').val(   $( this ).attr('id')  );

  });
 
   $('#modalTask .btn-primary').click(function() {
     $('#'+ $('#aModificar').val()).addClass('text-white bg-success'); 
     $('#modalTask').modal('toggle');
      guardar($('#aModificar').val());
    });
 
 
 
 //acá buscaria los datos de las card y las mandaria
  function guardar(idCard){
     var id =$('#'+idCard).find('.card-body .card-title').text();
    var texto = $('#'+idCard).find('.card-body .card-text').text();
    var token = '{{csrf_token()}}'; 
    var data={'id':id,'texto':texto,'_token':token};
    $.ajax({
        type: "post",
        url: "{{route('TareasControllers.store')}}", 
        data: data,
        success: function (msg) {
                alert("Se ha realizado el POST con exito "+msg);
        }
    });
  }
});
