   <div class="clear">&nbsp;</div>
   
   <div id="footer" align="right" class="round5">
      Copyright &copy; <?php echo date('Y');?> Fund My Fight
   </div>

   <script type="text/javascript">

   (function($){
      // code for sidebar menu animation starts
         
         var animateSidebarMenu = true; // whether or not sidebar menu animation should be there

         // DO NOT EDIT BELOW THIS LINE

         if (animateSidebarMenu){
            // initially hide all sidebar items except for first one
            $('#sidebar ul.navlinks:not(:first)').hide();

            $('.navhead').click(function(){
               if (! $(this).next('ul.navlinks').is(':visible')){
                  // hide all opended ones
                  $(this).siblings('ul.navlinks').slideUp('fast');
                  // now show the clicked one
                  $(this).next('ul.navlinks').slideDown('fast');
               }

               return false;
            });

         }

      // code for sidebar menu animation ends
   })(jQuery);

   </script>
