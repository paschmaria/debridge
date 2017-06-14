$(document).ready(function(){
        var postForm = $("#postForm");
        postForm.submit(function(e){
            e.preventDefault();
            var formData = postForm.serialize();
            // console.log(formData);
            // $( '#register-errors-name' ).html( "" );
            // $( '#register-errors-email' ).html( "" );
            // $( '#register-errors-password' ).html( "" );
            // $("#register-name").removeClass("has-error");
            // $("#register-email").removeClass("has-error");
            // $("#register-password").removeClass("has-error");

            $.ajax({
                url:'/post',
                type:'POST',
                data:formData,
                success:function(data){
                	toastr.options.preventDuplicates = true;
                	toastr.success("Post achieved successfully!");
                	
                	// location.reload(true);
                },
                error: function (data) {
                	toastr.options.preventDuplicates = true;
                	toastr.error("An error occured while posting...");
                    // console.log(data.responseText);
                    var obj = jQuery.parseJSON( data.responseText );
                }
            });
        });
    });
