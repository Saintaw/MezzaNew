$(function() {
    
    
$( ".modal-body" ).on( "click", ".img-hook", function() {
    
    $ref = $(this).data("file");
    $lb = $(this).data("lightbox");
    $(this).wrap('<a href="' + $ref + '" rel="lightbox" data-lightbox="' +$lb +' " />');
    $(this).parent('a').trigger('click');
});

$( ".gallery-hook" ).on( "click", function() {
    console.clear();
    $('.modal-body').html('');
    $eventId = $(this).data("event");
    $eventName = $(this).data("eventname");
  
  
  $.post( "./inc/json_gallery.php", {id: $eventId, name: $eventName})
    .done(function(data) {
    //console.log(data);
         
       
    //Loop through Gallery
    $.each($.parseJSON(data), function( index, value ) {
          console.log(value);
          
          console.log(value.alt);
          console.log(value.url);
          console.log(value.caption);         
          console.log(value.thumbnail);
          console.log(value.path);
          
          //Add the items in the modal container
          // .modal-body
          
          
            var div = $('<div>');
            div.addClass('img-hold');
            
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
          
            div.appendTo('.modal-body');
          
          
        }); 
    $("#modal-title").html($eventName);
    
     $("#myModal").modal({backdrop: true});
    
    });
});

}) //end doc ready
