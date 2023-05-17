document.addEventListener('DOMContentLoaded', function() {
  var Role = $('#role').val();

  var TotalSlots = $('#totalslots').val();


   var calendarEl = document.getElementById('calendar');

   var calendar = new FullCalendar.Calendar(calendarEl, {
   
     headerToolbar: {
       left: 'prev,next today',
       center: 'title',
       right: 'dayGridMonth,timeGridWeek,timeGridDay'
     },

     eventTimeFormat: { // like '14:30:00'
       hour: 'numeric',
 minute: '2-digit',
 meridiem: 'short'
 },



     navLinks: true, // can click day/week names to navigate views
     selectable: false,
     selectMirror: true,
     selectAllow: function(select) {
     return moment().diff(select.start, 'days') <= 0
  },
     select: function(arg) {
       var today = new Date(arg.startStr);
if(today.getDay() == 6 || today.getDay() == 0) {
 return false;
};
    
       $.ajax({
       type: "GET",
       url: "/verifyAppointmentAvailability",
       async: false,
       data: {
         _token: $("#csrf").val(),
         date: moment(arg.startStr).format("YYYY-MM-DD"),
       },
       success: function(data) {
         $('.slots').show();
         $.each(data.slots, function( index, value ) {
           $('#'+value.slot_id).hide();
         });

         $('.slots').removeClass('btn-success').addClass('btn-secondary');
         $('#car_id').val('');
         $('#service_id').val('');
         $('#time').val('');
         $('#mileage').val('');
         $('#carColour').val('');
         $('#numberPlate').val('');
         
         
         if(data.totalappointment >= TotalSlots){
           Swal.fire({
 icon: 'error',
 title: 'Oops...',
 text: 'All slots has been fully booked !',
 footer: '<b>Please select another Date :)</b>'
});
       calendar.unselect()
         }
         else{
           $('#appdate').val(moment(arg.startStr).format("YYYY-MM-DD"));
       jQuery('#eventModal').modal();
       calendar.unselect()
         }
       }
     });

     },
     eventClick: function(info) {

    

   

      

       var eventDate = moment(info.event.start).format("YYYY-MM-DD"); 
       var eventTime = moment(info.event.start).format("HH:mm:ss"); 
       
       $.ajax({
           type: "GET",
           url: "/getAppointmentDetails",
           async: false,
           data: {
             _token: $("#csrf").val(),
             date: eventDate,
             time: eventTime,
           },
           success: function(data) {
            /*
             var userid = $('#userid').val();
             if(userid != data.user_id){
               return false;
             }
             */

             $('#deleteapp').hide();

             var slot = '';
  

             $.ajax({
               type: "GET",
               url: "/getSlotTitle",
               async: false,
               data: {
                 _token: $("#csrf").val(),
                 id: info.event.id,
               },
               success: function(data) {
                 slot = data;
               }
               });
      
               jQuery('#viewModal').modal();
               $('#appdateview').val(eventDate);

               $('#getselectedate').val(moment(info.event.start).format("DD/MM/YYYY"));
               $('#getselectedtime').val(eventTime);

             

           $('#appby').val(data.name);
             $('#car_id_view').val(data.car_id);
             $('#service_id_view').val(data.service_id);
             $('#mileageview').val(data.mileage);
             $('#carColourview').val(data.carColour);
             $('#numberPlateview').val(data.numberPlate);
             
             

        
             $('#timeslotview').val(slot);

             

           }
         });


       //example output: "Wed Oct 02 2019 00:00:00 GMT-0600 (Central Standard Time)"
 },

     editable: true,
     dayMaxEvents: true, // allow "more" link when too many events


   });

   calendar.render();


   $( document ).ready(function() {
   $.ajax({
 type: "GET",
   url: "/getAppointment",
   dataType: 'json',

   success: function(res) {

       $.each(res, function(key, value) {
        
       var source = { events: [
       {
           id: value.id,
           title: value.model,
           start: new Date(value.start_datetime),
           end: new Date(value.end_datetime),
          
           allDay: false,
           color: "#" + Math.floor(Math.random()*16777215).toString(16),
       }
       ]};

       calendar.addEventSource( source )
 
   });
  
   }
});
});
 });

 

 $("#makeApp").click(function(){
   if($('#car_id').val() == '' || $('#car_id').val() ==  undefined){
     Swal.fire({
 icon: 'error',
 title: 'Oops...',
 text: 'Please select Car !' 
});
   }
   else if($('#service_id').val() == '' || $('#service_id').val() == undefined){
     Swal.fire({
 icon: 'error',
 title: 'Oops...',
 text: 'Please select Service !' 
});
   }
   else if($('#time').val() == ''){
     Swal.fire({
 icon: 'error',
 title: 'Oops...',
 text: 'Please select Time Slot !' 
});
   }
   else if($('#mileage').val() == ''){
     Swal.fire({
 icon: 'error',
 title: 'Oops...',
 text: 'Please input Mileage !' 
});
   }
   else{
     $(this).attr('disabled', true);
                   $(this).html('Saving');
                   $('#makeAppFinal').trigger('click');
     Swal.fire('Saved!', 'Appointment has been booked', 'success');
   }
 });

   
 $(".slots").click(function(){
   var id = this.value;

   $('#slot').val(id);
   $('.slots').removeClass('btn-success').addClass('btn-secondary');
   $('#'+id).removeClass('btn-secondary').addClass('btn-success');

 });


$(document).on('show.bs.modal', '.modal', function () {
   $(this).appendTo('body');
 });



 $(document).on("click", "#deleteapp", function () {
   var getdate = $('#getselectedate').val();
   var gettime = $('#getselectedtime').val();
 


   Swal.fire({
     title: 'Are you sure?',
     text: "You won't be able to revert this!",
     icon: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, delete it!'
   }).then((result) => {
     if (result.isConfirmed) {


     

       $.ajax({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
         type: "DELETE",
         url: "/deleteApp",
         async: false,
         data: {
           _token: $("#csrf").val(),
           date: getdate,
           time: gettime,
         },
         dataType: "json",
         cache: false,
         success: function (dataResult) {
           
             Swal.fire(
               'Deleted!',
               'Appointment has been deleted.',
               'success'
             )
            location.reload();
         },
     });

     }
   })

 });


