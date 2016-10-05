/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$('.Creations').collagePlus();
listCreations();


function listCreations() {
  var $testContainer = $('#jsontest');
  var thumbsApi = "/photos-gallery/gallery.json";
  $.getJSON( thumbsApi, {
    format: "json"
  })
    .done(function( data ) {
    console.log('data: ',data);
        $(data).each(function(index, Element) {
                //console.log(index,Element);
                //only if it's an image
                var n = Element.name.indexOf(".jpg");
                
                if (n > -1) {
                   $('<div/>', {
                       text: 'Creation ' +Element.name,
                       id: 'thumb_' +Element.id
                   }).appendTo('#jsontest');   

                    var img = $('<img />', { 
                      src: '/photos-gallery/' +Element.name,
                      alt: Element.name,
                      width: '12%',
                      height: '12%'
                    });
                      img.width(img.clientWidth /10);
                      img.height(img.clientHeight /10);                    
    
                    console.log(img);
                    
                    img.appendTo('#thumb_' +Element.id);


            
            
            
                    //$creaimg = ('<img src="/photos-gallery/' +Element.name +'"/>');
            
                }
                /*else if (n === -1) {
                   $creatitle = ('<h3>' +Element.name +'</h3>'); 
                   $('<div/>', {
                       text: 'Creation ' +name,
                       html: $creatitle
                   }).appendTo('#jsontest');               
                }
                */
          
        });

    });    
    
}

