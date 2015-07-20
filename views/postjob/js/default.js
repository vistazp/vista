// jobs.js
// manage job conversion process

var Job;

function removeClassError(){
  $("#new_job .errorForsteps").html("");
  $("#new_job .errorForsteps").hide();
  $("input").removeClass("error");
}

Job = {
    setup : function () {


       $("#new_job").validate( {
          errorLabelContainer: $("#new_job .errorForsteps"),
                                 rules: {
                                     
                                    "login": {
                                        minlength: 3
                                      },
                                    "password": {
                                        
                                        minlength: 3
                                      }

                                 },
                                 messages: {
                                  "login": {
                                        required: "Please enter a Login",
                                        email: "Please enter a valid email address for the login",
                                        minlength: "Your login must consist of at least 3 characters"
                                      },

                                 "password": {
                                        required: "Please enter a Password",
                                        minlength: "Your password must consist of at least 3 characters"
                                      }
                                      

		}
         });
        $("#job_featured_status_2").attr('checked',true);

        $("#step-1 label[for='job_featured_status_2']").click(function (event) {
            event.preventDefault();
            var label1 = $("#step-1 label[for='job_featured_status_1']");
            var label3 = $("#step-1 label[for='job_featured_status_3']");

            label1.removeClass('label-radio-check');
            label3.removeClass('label-radio-check');
            $(this).addClass('label-radio-check');

            $("#job_featured_status_1").attr('checked',false);
            $("#job_featured_status_3").attr('checked',false);
            $("#job_featured_status_2").attr('checked',true);
        });
        //standard checkbox
        $("#step-1 label[for='job_featured_status_1']").click(function (event) {
            event.preventDefault();
            var label2 = $("#step-1 label[for='job_featured_status_2']");
            var label3 = $("#step-1 label[for='job_featured_status_3']");

            label2.removeClass('label-radio-check');
            label3.removeClass('label-radio-check');
            $(this).addClass('label-radio-check');

            $("#job_featured_status_2").attr('checked',false);
            $("#job_featured_status_3").attr('checked',false);
            $("#job_featured_status_1").attr('checked',true);
           
        });
        //expert checkbox
        $("#step-1 label[for='job_featured_status_3']").click(function (event) {
            event.preventDefault();
            var label1 = $("#step-1 label[for='job_featured_status_1']");
            var label2 = $("#step-1 label[for='job_featured_status_2']");

            label1.removeClass('label-radio-check');
            label2.removeClass('label-radio-check');
            $(this).addClass('label-radio-check');

            $("#job_featured_status_1").attr('checked',false);
            $("#job_featured_status_2").attr('checked',false);
            $("#job_featured_status_3").attr('checked',true);
        });

    },
    //==============================commit===========================
  //  toggleTiers : function (radio_label, other_radio) {
 //       if (radio_label.hasClass('label-radio-check')) {
 //           radio_label.removeClass('label-radio-check');
 //           other_radio.addClass('label-radio-check');
 //       } else {
 //           radio_label.addClass('label-radio-check');
//            other_radio.removeClass('label-radio-check');


 //       }


 //   }
};



$(document).ready(function() {
    Job.setup(); 
});
