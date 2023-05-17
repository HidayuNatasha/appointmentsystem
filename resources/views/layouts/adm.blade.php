<!DOCTYPE html>
<html lang="en">
<?php
 $slots = App\Models\Slot::all();
?>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard 3</title>

    <!-- Fontfaces CSS-->
    <link href=" {{ asset('customer-template/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('customer-template/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('customer-template/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('customer-template/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('customer-template/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        {{--<a href="#">
                            <img src=" {{ asset('customer-template/images/icon/logo-white.png') }}" alt="CoolAdmin" />
                        </a>  --}}
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="{{ route('home') }}">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('service.index') }}">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>Service</a>
                            </li>
                            <li>
                                <a href="{{ route('slot.index') }}">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Slot</a>
                            </li>
                            <li>
                                <a href="{{ route('car.index') }}">
                                    <i class="fas fa-car"></i>Car</a>
                            </li>
                            <li>
                                <a href="{{ route('customer.indexAdmin') }}">
                                    <i class="fas fa-users"></i>
                                    <span class="bot-line"></span>Customer</a>
                            </li>
                            <li>
                                <a href="{{ route('appointment.indexadmin') }}">
                                    <i class="fas fa-calendar"></i>
                                    <span class="bot-line"></span>Appointment</a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src=" {{ asset('customer-template/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src=" {{ asset('customer-template/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ Auth::user()->name }}</a>
                                            </h5>
                                            <span class="email">{{ Auth::user()->email }}</span>
                                        </div>
                                    </div>
                                   
                                    <div class="account-dropdown__footer">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->


            <!-- MAIN CONTENT-->
            <section class="p-t-20">
             @yield('content')
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p></a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    <!-- Jquery JS-->
    <script src=" {{ asset('customer-template/vendor/jquery-3.2.1.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.min.js" integrity="sha512-WHnaxy6FscGMvbIB5EgmjW71v5BCQyz5kQTcZ5iMxann3HczLlBHH5PQk7030XmmK5siar66qzY+EJxKHZTPEQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS-->
    <script src=" {{ asset('customer-template/vendor/bootstrap-4.1/popper.min.jsvendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src=" {{ asset('customer-template/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src=" {{ asset('customer-template/vendor/slick/slick.min.js') }}">
    </script>
    <script src=" {{ asset('customer-template/vendor/wow/wow.min.js') }}"></script>
    <script src=" {{ asset('customer-template/vendor/animsition/animsition.min.js') }}"></script>
    <script src=" {{ asset('customer-template/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src=" {{ asset('customer-template/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src=" {{ asset('customer-template/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src=" {{ asset('customer-template/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src=" {{ asset('customer-template/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src=" {{ asset('customer-template/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src=" {{ asset('customer-template/vendor/select2/select2.min.js') }}">
    </script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Main JS-->
    <script src=" {{ asset('customer-template/js/main.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
$( document ).ready(function() {

    $('#start').timepicker({
    minTime: '08:00am',
    maxTime: '12:00am',
    step: 60,
    disableTimeRanges: [

<?php foreach($slots as $slot) {?>
    ['<?php echo \Carbon\Carbon::parse($slot->start_time)->format('H:ia'); ?>', '<?php echo \Carbon\Carbon::parse($slot->end_time)->format('H:ia'); ?>'],
<?php }?>
],
        timeFormat: 'h:i A',
        disableTextInput: true,
    //showDuration: true
    });

    $('#end').timepicker({
        minTime: '08:00am',
    maxTime: '12:00am',
    step: 60,

    disableTimeRanges: [

        <?php foreach($slots as $slot) {?>
        ['<?php echo \Carbon\Carbon::parse($slot->start_time)->format('H:ia'); ?>', '<?php echo \Carbon\Carbon::parse($slot->end_time)->format('H:ia'); ?>'],
        <?php }?>
    ],
    timeFormat: 'h:i A',
    disableTextInput: true,
    //showDuration: true
    });

    $('#start_edit').timepicker({
        minTime: '08:00am',
    maxTime: '12:00am',
    step: 60,

    disableTimeRanges: [

        <?php foreach($slots as $slot) {?>
        ['<?php echo \Carbon\Carbon::parse($slot->start_time)->format('H:ia'); ?>', '<?php echo \Carbon\Carbon::parse($slot->end_time)->format('H:ia'); ?>'],
        <?php }?>
    ],
    timeFormat: 'h:i A',
    disableTextInput: true,
    //showDuration: true
    });


    $('#end_edit').timepicker({
        minTime: '08:00am',
    maxTime: '12:00am',
    step: 60,

    disableTimeRanges: [

        <?php foreach($slots as $slot) {?>
        ['<?php echo \Carbon\Carbon::parse($slot->start_time)->format('H:ia'); ?>', '<?php echo \Carbon\Carbon::parse($slot->end_time)->format('H:ia'); ?>'],
        <?php }?>
    ],
    timeFormat: 'h:i A',
    disableTextInput: true,
    //showDuration: true
    });


});
</script>
<script>

const convertTime12to24 = (time12h) => {
  const [time, modifier] = time12h.split(' ');

  let [hours, minutes] = time.split(':');

  if (hours === '12') {
    hours = '00';
  }

  if (modifier === 'PM') {
    hours = parseInt(hours, 10) + 12;
  }

  return `${hours}:${minutes}`;
}

$(document).on('click', '#presub', function(){ 


    if($('#start').val().length <= 0){
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Please select Start Time !' 
});    
return false;
}
else if($('#end').val().length <= 0){
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Please select End Time !' 
});  
return false;
}
else if($('#desc').val().length <= 0){
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Please Enter description !' 
});  
return false;
}

var timefrom = new Date();
temp = convertTime12to24($('#start').val()).split(":");
console.log(temp);
timefrom.setHours((parseInt(temp[0]) - 1 + 24) % 24);
timefrom.setMinutes(parseInt(temp[1]));

var timeto = new Date();
temp = convertTime12to24($('#end').val()).split(":");
console.log(temp);
timeto.setHours((parseInt(temp[0]) - 1 + 24) % 24);
timeto.setMinutes(parseInt(temp[1]));
//console.log(timefrom,timeto);

if (timeto <= timefrom){
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Please ensure the End time is more than the Start Time !' 
}); 
}
else{
    Swal.fire('Saved!', 'Slot has been saved!', 'success');
    $(this).attr('disabled', true);
										$(this).html('Saving');
                    $('#finalsub').trigger('click');
}
});

function tConv24(time24) {
  var ts = time24;
  var H = +ts.substr(0, 2);
  var h = (H % 12) || 12;
  h = (h < 10)?("0"+h):h;  // leading 0 at the left for 1 digit hours
  var ampm = H < 12 ? " AM" : " PM";
  ts = h + ts.substr(2, 3) + ampm;
  return ts;
};

$(document).on('click', '#editbtn', function(){ 

    $('#id').val($(this).data('id'));
    $('#start_edit').val(tConv24($(this).data('start')));
    $('#end_edit').val(tConv24($(this).data('end')));
    $('#start_edit_ori').val(tConv24($(this).data('start')));
    $('#end_edit_ori').val(tConv24($(this).data('end')));
    $('#desc_edit').val($(this).data('desc'));

});

$(document).on('click', '#resetorival', function(){ 
    var start = $('#start_edit_ori').val();
    var end =  $('#end_edit_ori').val();
    $('#start_edit').val(start);
    $('#end_edit').val(end);
});



$(document).on('click', '#presubedit', function(){ 

if($('#start_edit').val().length <= 0){
Swal.fire({
icon: 'error',
title: 'Oops...',
text: 'Please select Start Time !' 
});    
return false;
}
else if($('#end_edit').val().length <= 0){
Swal.fire({
icon: 'error',
title: 'Oops...',
text: 'Please select End Time !' 
});  
return false;
}
else if($('#desc_edit').val().length <= 0){
Swal.fire({
icon: 'error',
title: 'Oops...',
text: 'Please Enter description !' 
});  
return false;
}

var timefrom = new Date();
temp = convertTime12to24($('#start_edit').val()).split(":");
console.log(temp);
timefrom.setHours((parseInt(temp[0]) - 1 + 24) % 24);
timefrom.setMinutes(parseInt(temp[1]));

var timeto = new Date();
temp = convertTime12to24($('#end_edit').val()).split(":");
console.log(temp);
timeto.setHours((parseInt(temp[0]) - 1 + 24) % 24);
timeto.setMinutes(parseInt(temp[1]));
//console.log(timefrom,timeto);

if (timeto <= timefrom){
Swal.fire({
icon: 'error',
title: 'Oops...',
text: 'Please ensure the End time is more than the Start Time !' 
}); 
}
else{
Swal.fire('Saved!', 'Slot has been saved!', 'success');
$(this).attr('disabled', true);
                                    $(this).html('Saving');
                $('#finalsubedit').trigger('click');
}
});



</script>
</body>
</html>

<!-- end document-->
