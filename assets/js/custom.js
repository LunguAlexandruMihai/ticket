jQuery(document).ready(function(){
  jQuery("#edit_sub").on('click',function(event){
    event.preventDefault();

    jQuery("#editModal").modal();
    return false;
  });


});
