// jobs.js
// manage job conversion process

var Job;

function removeClassError(){
  $("#form_step_2 .errorForsteps").html("");
  $("#form_step_2 .errorForsteps").hide();
  $("input").removeClass("error");
}

Job = {
    setup : function () {

        // setup validations
        $("#job_account_options_1").click(function(){
          $("#newAccountForm").hide();
          $("#loginForm").show();
          removeClassError();

        });
        $("#job_account_options_2").click(function(){
          $("#loginForm").hide();
          $("#newAccountForm").show();
          removeClassError();
        });

        $("#form_step_2").validate({
          errorLabelContainer: $("#form_step_2 .errorForsteps"),
          rules:{
            "company_name":{ 
                   required: "#step-1:hidden"
            },
            "url": {
                   required: "#step-1:hidden",
                   url:{
		  	depends: function () {
				return $("#step-2").css('display') == 'block';
			}
                   }
            },
            "description":{ 
                   required: "#step-1:hidden"
            },
            "instructions": {
                   required: "#step-1:hidden"
            }
          },
          messages: {
             "company_name": {
               required: "Please enter a Company"
             },
             "url": {
                      required: "Please enter a Company"
                      
                    },
            "description": {required: "Please enter a Description"},
            "instructions": {required: "Please enter the Instructions"}
          }
        });

        $("#new_job").validate( {
          errorLabelContainer: $("#new_job .errorForsteps"),
                                 rules: {
                                    "user[login]": {
                                        required: "#job_account_options_1:checked",
                                        email: "#job_account_options_1:checked",
                                        minlength: 3
                                      },
                                    "user[password]": {
                                        required: "#job_account_options_1:checked",
                                        minlength: 3
                                      },

                                    "new_user[login]": {
                                        required: "#job_account_options_2:checked",
                                        email: "#job_account_options_2:checked",
                                        minlength: 3
                                      },
                                    "new_user[name]": {
                                        required: "#job_account_options_2:checked"
                                      },
                                    "new_user[password]": {
                                        required: "#job_account_options_2:checked",
                                        minlength: 3
                                      },
                                    "new_user[password_confirmation]": {
                                                      required: "#job_account_options_2:checked",
                                                      equalTo: '#new_user_password',
                                                      minlength: 3
                                     },
                                     "new_user[terms]":{
                                         required: "#job_account_options_2:checked"
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
                                        minlength: "Your password must consist of at least 5 characters"
                                      },
                                    "new_user[login]": {
                                        required: "Please enter a Login",
                                        email: "Please enter a valid email address for the login",
                                        minlength: "Your login must consist of at least 3 characters"
                                      },
                                    "new_user[name]": {
                                        required: "Please enter a Name"
                                      },
                                    "new_user[password]": {
                                        required: "Please enter a Password",
                                        minlength: "Your password must consist of at least 5 characters"

                                      },
                                    "new_user[password_confirmation]": {
                                        required: "Please enter a confirmation for the Password",
                                        minlength: "Your password must consist of at least 5 characters",
                                       equalTo: "The passwords doesn't match"
                                                      
                                     },
                                     "new_user[terms]":{
                                         required: "Please accept our terms"
                                     }
		}
         });

        if ($('#job_description').length > 0) {
            $('#job_description').markItUp(myMarkdownSettings);
        };

        if ($("div#step-2 #job_headline").length > 0) {
//            $("div#step-1 #job_headline").onchange(function (event){
//                $("div#step-2 #job_headline").val($("div#step-1 #job_headline").val());
//            });
        };


      

        if ($('a#job_highlight').lenght > 0) {
            $("a#job_highlight").fancybox();
        }

        // setup checkboxes step 1
        //premium checkbox
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
       

    },
    toggleTiers : function (radio_label, other_radio) {
        if (radio_label.hasClass('label-radio-check')) {
            radio_label.removeClass('label-radio-check');
            other_radio.addClass('label-radio-check');
        } else {
            radio_label.addClass('label-radio-check');
            other_radio.removeClass('label-radio-check');
        }


    }
};



$(document).ready(function() {
    Job.setup(); 
});
