<footer class="bg-success text-center mt-5 p-2 hide">
   <b>Copyright &copy; <?=date('Y');?></b>
   <a class="text-light" href="https://www.aslambd.com"> All rights reserved</a>
</footer>   


<!-- jQuery -->
   <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('js/dataTables.min.js') }}"></script>
   @yield('js')

{{-- script --}}
   {{-- Navbar Fixed --}}
      <script type="text/javascript">
         // if ($(window).width() > 992) {
           $(window).scroll(function(){
              if ($(this).scrollTop() > 0) { //default: 40
                 $('#navbar_top').addClass("fixed-top");
                 // add padding top to show content behind navbar
                 $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
               }else{
                 $('#navbar_top').removeClass("fixed-top");
                  // remove padding top from body
                 $('body').css('padding-top', '0');
               }   
           });
         // } // end
      </script>

   {{-- Bootstrap alert --}}
      <script type="text/javascript">
         window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function(){
               $(this).remove(); 
            });
         }, 5000);
         
         {{-- Datatable --}}
         $(document).ready( function () {
            $('.table').DataTable();
         } );
         
         $('.table').DataTable({
            // "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "All"] ]
         });
      </script>
