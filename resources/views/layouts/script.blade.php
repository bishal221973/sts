 <!-- jQuery -->
 <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
 <!-- Bootstrap 4 -->
 <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>


 <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

 <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
 <script src="{{ asset('dist/js/demo.js') }}"></script>

 <script src="{{ asset('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
 <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
 <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>


 <script src="{{asset('plugins/sweetalert2/sweetalert2.min.js')}}"></script>
 <!-- Toastr -->
 <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>




 <script>
     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             "buttons": ["copy", "csv", "excel", "print"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
         });
         $("#button").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             //  "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     });
 </script>
 <script>
     $(function() {
         //Initialize Select2 Elements
         $('.select2').select2()

         //Initialize Select2 Elements
         $('.select2bs4').select2({
             theme: 'bootstrap4'
         })

         //Datemask dd/mm/yyyy
         $('#datemask').inputmask('dd/mm/yyyy', {
             'placeholder': 'dd/mm/yyyy'
         })
         //Datemask2 mm/dd/yyyy
         $('#datemask2').inputmask('mm/dd/yyyy', {
             'placeholder': 'mm/dd/yyyy'
         })
         //Money Euro
         $('[data-mask]').inputmask()

         //Date picker
         $('#reservationdate').datetimepicker({
             format: 'L'
         });

         //Date and time picker
         $('#reservationdatetime').datetimepicker({
             icons: {
                 time: 'far fa-clock'
             }
         });

         //Date range picker
         $('#reservation').daterangepicker()
         //Date range picker with time picker
         $('#reservationtime').daterangepicker({
             timePicker: true,
             timePickerIncrement: 30,
             locale: {
                 format: 'MM/DD/YYYY hh:mm A'
             }
         })
         //Date range as a button
         $('#daterange-btn').daterangepicker({
                 ranges: {
                     'Today': [moment(), moment()],
                     'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                     'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                     'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                     'This Month': [moment().startOf('month'), moment().endOf('month')],
                     'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                         'month').endOf('month')]
                 },
                 startDate: moment().subtract(29, 'days'),
                 endDate: moment()
             },
             function(start, end) {
                 $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                     'MMMM D, YYYY'))
             }
         )

         //Timepicker
         $('#timepicker').datetimepicker({
             format: 'LT'
         })

         //Bootstrap Duallistbox
         $('.duallistbox').bootstrapDualListbox()

         //Colorpicker
         $('.my-colorpicker1').colorpicker()
         //color picker with addon
         $('.my-colorpicker2').colorpicker()

         $('.my-colorpicker2').on('colorpickerChange', function(event) {
             $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
         })

         $("input[data-bootstrap-switch]").each(function() {
             $(this).bootstrapSwitch('state', $(this).prop('checked'));
         })

     })
     // BS-Stepper Init
     document.addEventListener('DOMContentLoaded', function() {
         window.stepper = new Stepper(document.querySelector('.bs-stepper'))
     })

     // DropzoneJS Demo Code Start
     Dropzone.autoDiscover = false

     // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
     var previewNode = document.querySelector("#template")
     previewNode.id = ""
     var previewTemplate = previewNode.parentNode.innerHTML
     previewNode.parentNode.removeChild(previewNode)

     var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
         url: "/target-url", // Set the url
         thumbnailWidth: 80,
         thumbnailHeight: 80,
         parallelUploads: 20,
         previewTemplate: previewTemplate,
         autoQueue: false, // Make sure the files aren't queued until manually added
         previewsContainer: "#previews", // Define the container to display the previews
         clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
     })

     myDropzone.on("addedfile", function(file) {
         // Hookup the start button
         file.previewElement.querySelector(".start").onclick = function() {
             myDropzone.enqueueFile(file)
         }
     })

     // Update the total progress bar
     myDropzone.on("totaluploadprogress", function(progress) {
         document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
     })

     myDropzone.on("sending", function(file) {
         // Show the total progress bar when upload starts
         document.querySelector("#total-progress").style.opacity = "1"
         // And disable the start button
         file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
     })

     // Hide the total progress bar when nothing's uploading anymore
     myDropzone.on("queuecomplete", function(progress) {
         document.querySelector("#total-progress").style.opacity = "0"
     })

     // Setup the buttons for all transfers
     // The "add files" button doesn't need to be setup because the config
     // `clickable` has already been specified.
     document.querySelector("#actions .start").onclick = function() {
         myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
     }
     document.querySelector("#actions .cancel").onclick = function() {
         myDropzone.removeAllFiles(true)
     }
     // DropzoneJS Demo Code End
 </script>
 <script>
     $(".myTab").on('click', function() {
         $(".myTab").removeClass('active');
         $(this).addClass("active");
         var date = $(this).data('date');

         $(".time-list").addClass('d-none');
         $(".time-list").removeClass('active');
         $("." + date).removeClass('d-none');
     });

     $(".checkButton").click(function() {
         var checkbox = $(this);
         var dates = $(this).attr('id');
         if (checkbox.is(":checked")) {
             $(".checkButton1").removeClass('isChecked');
             $("." + dates).addClass('isChecked');
             $(".checkButton").prop("checked", false);
             $(this).prop("checked", true);
         } else {
             $("." + dates).removeClass('isChecked');
         }
     });


     $(".seat-name").click(function() {
         var checkbox = $(this);
         var name = $(this).attr('id');
         if (checkbox.is(":checked")) {
             $("." + name).addClass('isChecked');
             $(".checkButton").prop("checked", false);
             $(this).prop("checked", true);
         } else {
             $("." + name).removeClass('isChecked');
         }
     });
 </script>

 <script>
     const fileInput = document.getElementById('fileInput');
     const imagePreview = document.getElementById('imagePreview');

     fileInput.addEventListener('change', function() {
         const file = fileInput.files[0];
         if (file) {
             const reader = new FileReader();
             reader.onload = function(event) {
                 imagePreview.style.display = 'block';
                 imagePreview.style.backgroundImage = `url('${event.target.result}')`;
                 document.getElementById('NoImg').style.display = "none";
             };
             reader.readAsDataURL(file);
         } else {
             imagePreview.style.display = 'none';
             imagePreview.style.backgroundImage = 'none';
         }
     });
 </script>

 <script>
     const movieSearchInput = document.getElementById('movieSearch');
     const movieContainers = document.querySelectorAll('.zoom'); // Assuming the movie containers have the "zoom" class

     movieSearchInput.addEventListener('input', function() {
         const searchQuery = movieSearchInput.value.trim().toLowerCase();

         movieContainers.forEach(container => {
             const movieTitle = container.getAttribute('data-movie-title').toLowerCase();

             // Check if the movie title matches the search query
             if (movieTitle.includes(searchQuery)) {
                 container.style.display = 'block';
             } else {
                 container.style.display = 'none';
             }
         });
     });

     // The code below will ensure that the search works correctly across all pages

     // Listen for changes in the URL (e.g., when the user navigates to a different page)
     window.addEventListener('popstate', function() {
         const urlSearchParams = new URLSearchParams(window.location.search);
         const page = urlSearchParams.get('page') || 1;

         // Reapply the search filter when the URL changes
         movieSearchInput.dispatchEvent(new Event('input'));
     });
 </script>

<script>
    $(function () {
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });



      $('.swalDefaultSuccess').click(function () {
        Toast.fire({
          icon: 'success',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultInfo').click(function () {
        Toast.fire({
          icon: 'info',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultError').click(function () {
        Toast.fire({
          icon: 'error',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultWarning').click(function () {
        Toast.fire({
          icon: 'warning',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.swalDefaultQuestion').click(function () {
        Toast.fire({
          icon: 'question',
          title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });

      $('.toastrDefaultSuccess').click(function () {
        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultInfo').click(function () {
        toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultError').click(function () {
        toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });
      $('.toastrDefaultWarning').click(function () {
        toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
      });

      $('.toastsDefaultDefault').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultTopLeft').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'topLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomRight').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomRight',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultBottomLeft').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          position: 'bottomLeft',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultAutohide').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          autohide: true,
          delay: 750,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultNotFixed').click(function () {
        $(document).Toasts('create', {
          title: 'Toast Title',
          fixed: false,
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultFull').click(function () {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          icon: 'fas fa-envelope fa-lg',
        })
      });
      $('.toastsDefaultFullImage').click(function () {
        $(document).Toasts('create', {
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          image: '../../dist/img/user3-128x128.jpg',
          imageAlt: 'User Picture',
        })
      });
      $('.toastsDefaultSuccess').click(function () {
        $(document).Toasts('create', {
          class: 'bg-success',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultInfo').click(function () {
        $(document).Toasts('create', {
          class: 'bg-info',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultWarning').click(function () {
        $(document).Toasts('create', {
          class: 'bg-warning',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultDanger').click(function () {
        $(document).Toasts('create', {
          class: 'bg-danger',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
      $('.toastsDefaultMaroon').click(function () {
        $(document).Toasts('create', {
          class: 'bg-maroon',
          title: 'Toast Title',
          subtitle: 'Subtitle',
          body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
        })
      });
    });

  </script>
@stack('toast')
