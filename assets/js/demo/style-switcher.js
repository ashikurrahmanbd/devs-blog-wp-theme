(function($){
    
    $(document).ready(function() {
    
        /* ======= DEMO THEME CONFIG ====== */
        $('#config-trigger').click(function(e){
            
            e.preventDefault();
            
            //$("#config-panel").toggleClass('config-panel-open');
            
            if($(this).hasClass('config-panel-open')){
              $("#config-panel").animate({
                right: "-=190" //same as the panel width
               }, 500);
              $(this).removeClass('config-panel-open').addClass('config-panel-hide');
             }
             else {      
             $("#config-panel").animate({
               right: "+=190" //same as the panel width
               }, 500);
              $(this).removeClass('config-panel-hide').addClass('config-panel-open');    
             }
        });
        
        $('#config-close').on('click', function(e) {
            e.preventDefault();
            $('#config-trigger').click();
        });
        
        
        $('#color-options a').on('click', function(e) { 

            e.preventDefault();
            var $styleSheet =   $(this).attr('data-style');
            
            // -css is actually added by wp so i added here
            $('#theme-main-style-css').attr('href', $styleSheet);
                    
            var $listItem = $(this).closest('li');
            $listItem.addClass('active');
            $listItem.siblings().removeClass('active');
            
            
            
            
        });
    
    
    });


})(jQuery);