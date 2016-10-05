/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// .gallery-title

$(window).load(function () {
$( ".gallery-title" ).click(function(e) {
    e.preventDefault();
    $targetDiv = $($(this).attr('href'));
    console.log($targetDiv.is(":visible"));
    if ($targetDiv.is(":visible") === false)
        {
        $('.gallery-container').hide();  
        $targetDiv.show();
        }
    else
        {
        $('.gallery-container').hide();   
        }
    
    
    
    
    

   
  });

for (i = 0; i < 9; i++) { 

$("#gc_" +i).nanoGallery({
      thumbnailGutterWidth : 2,
      thumbnailGutterHeight : 2,
      colorSchemeViewer: 'dark',
      thumbnailHoverEffect:'borderLighter,imageScaleIn80',
      thumbnailHeight: 'auto', 
      thumbnailWidth: 200
  });


}    
    
    
    
    
    
});   