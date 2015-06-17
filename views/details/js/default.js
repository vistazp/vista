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
                  
            },
            "description":{ 
                  
            },
            "instructions": {
                  
            }
          },
          messages: {
             "company_name": {
               required: "Please enter a Company"
             },
             "url": {
                      required: "Please enter a url"
                      
                    },
            "description": {required: "Please enter a Description"}
            
          }
        }        
        
                
                
                
                
                
        );
        
    }

};



$(document).ready(function() {
    Job.setup(); 
});
