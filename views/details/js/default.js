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


        $("#form_step").validate(
        {
          errorLabelContainer: $("#form_step .errorForsteps"),
          rules:{
            "company_name":{ 
                  
            },
            "url": {
            
                   //required: "#step-1:hidden",
                   url:{
//		  	depends: function () {
//				return $("#step-2").css('display') == 'block';
//			}
                   }
                
            },
            "description":{ 
                  
            },
            "apply": {
                  url:{}
            }
          },
          messages: {
             "company_name": {
               required: "Please enter a Company"
             },
             "url": {
                      required: "Please enter a Url"
                      
                    },
            "description": {required: "Please enter a Description"},
            "apply": {required: "Please enter a Apply link"}
            
          }
        }        
        
                
                
                
                
                
        );
        
    }

};



$(document).ready(function() {
    Job.setup(); 
});
