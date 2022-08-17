$(document).ready(function () {
 
  $(".card").on('click', function (event) {
    var myModal = $('#modalTask').modal('show');
    myModal.find('.modal-title').text($(this).find('.card-title').text());
    myModal.find('.modal-body p').text($(this).find('.card-text').text()); 

  });
 
});
