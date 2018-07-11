// $('document').ready(function() {
//     $('#open_modal').click(function(event){
//         showModal();
//     });

//     $('#modal_to_open .modal-card-head .delete').click(function(event) { 
//         hideModal(); 
//     }); 
    
//     $('#modal_to_open .modal-background').click(function(event) { 
//         hideModal();
//     });
// });

// function showModal() {
//     $('#modal_to_open').addClass('is-active');
// }

// function hideModal() {
//     $('#modal_to_open').removeClass('is-active');
// }

// $('#send_mail').click(function(e){
//     e.preventDefault();
//     var data = {
//         email: $('#email').val(),
//         name: $('#name').val(),
//         firstname: $('#firstname').val(),
//         message: $('#message').val()
//     };
//     $.ajax({
//         url: "mail.php",
//         type: 'POST',
//         data: data,
//         success: function(data) {
//             $('#js_alert_success').css({'display' : 'block'});
//             setTimeout(function(){
//                 $('#js_alert_success').css({'display' : 'none'});
//                 $('#email').val("");
//                 $('#name').val("");
//                 $('#firstname').val("");
//                 $('#message').val("")
//             }, 3000);
//         },
//         error: function(data) {
//             $('#js_alert_danger').css({'display' : 'block'});
//             setTimeout(function(){
//                 $('#js_alert_danger').css({'display' : 'none'});
//                 $('#email').val("");
//                 $('#name').val("");
//                 $('#firstname').val("");
//                 $('#message').val("")
//             }, 3000);
//         }
//     });
// });

