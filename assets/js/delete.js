$(document).ready(function(){

  $("a#deleteStatus").click(function(event){
    event.preventDefault();
    var _instance = $(this);
    //console.log('Clicked!' + _instance.attr('data-delete-id'));

    $("#deleteModalLabel").html(_instance.attr('data-delete-modal-header'));
    $("#deleteModalBody").html(_instance.attr('data-delete-modal-body'));
    $("a#deleteButton").attr('href',$("base").attr('url')+'admin/status/delete/'+_instance.attr('data-delete-id'));
    $("#deleteModal").modal('toggle');

    return false;
  });
});