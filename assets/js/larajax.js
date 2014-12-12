(function ( $ ) {
 
    $.fn.larajax = function( options ) {
        
        var settings = $.extend({ 
            data_load: false,
            data_load_img: "assets/images/712.GIF"
        }, options );
        
        if(settings.data_load){
            $('a[data-load="true"]').on("click",function(e){
               e.preventDefault();
               var link = $(this).attr('href');
               var workspace = $(this).attr('data-load-workspace');
               
                $("#" + workspace).html('<img src="'+ settings.data_load_img +'" />');
                 alert(link + workspace);
                $("#" + workspace).load( link, function( response, status, xhr ) {
                  if ( status == "error" ) {
                    var msg = "Sorry but there was an error: ";
                    $("#" + workspace).html( msg + xhr.status + " " + xhr.statusText );
                  } 
                }); 
             });
        }
 
    };
 
}( jQuery ));
 

$("a").larajax({
    data_load: true,
    data_load_img_url: "assets/images/712.GIF"
});