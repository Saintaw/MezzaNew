$(function() {
  
    
$( ".modal-body" ).on( "click", ".img-hook", function() {
    
    $ref = $(this).data("file");
    $lb = $(this).data("lightbox");
    $(this).wrap('<a href="' + $ref + '" rel="lightbox" data-lightbox="' +$lb +' " />');
    $(this).parent('a').trigger('click');
});

$( ".gallery-hook" ).on( "click", function() {
    console.clear();
    $('.modal-body').empty();
    $eventId = $(this).data("event");
    $eventName = $(this).data("eventname");
  
  
  $.post( "./inc/json_gallery.php", {id: $eventId, name: $eventName})
    .done(function(data) {
    //console.log(data);
         
       
    //Loop through Gallery
    $.each($.parseJSON(data), function( index, value ) {
        
          //Add the items in the modal container
            var div = $('<div>');
            div.addClass('img-hold');
            div.appendTo('.modal-body');
            /*var a = $('<a>');
            a.attr('href', value.url);
            a.attr('data-path', value.path);
            a.appendTo(div);*/
            
            var img = $('<img>'); 
            img.attr('src', value.path+value.thumbnail);
            img.attr('alt', value.caption);
            img.attr('rel', 'lightbox');
            img.attr('data-lightbox', $eventName);
            img.attr('data-file', value.path+value.url);
            img.addClass('thumbnail img-hook');
            img.appendTo(div);

        }); 
    $("#modal-title").html($eventName);
    $(".modal-footer").html("Copyright: Mezzaluna 2016");
    $("#myModal").modal({backdrop: true});
     
        
    });
});

}) //end doc ready
