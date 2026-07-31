(function ($) {
   "use strict";

   /*=========================
  MEANMENU JS
   ===========================*/
   $("#mobile-menu").meanmenu({
      meanMenuContainer: ".mobile-menu",
      meanScreenWidth: "767",
   });
  
   // tooltip
   $(function () {
      $('[data-toggle="tooltip"]').tooltip();
   });


})(jQuery);
