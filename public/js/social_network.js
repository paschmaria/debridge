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



// var reciever_email = $(".send_").data("email");
// console.log(reciever_email);
$(document).ready(function(){
        $(".send_request").click(function(e){
            e.preventDefault();
            var reciever_email = $(this).data("email");
            // alert(reciever_email);
            $.ajax({
                url:'send_request/'+reciever_email,
                type:'POST',
                data: {email:reciever_email},
                success:function(data){
                    toastr.options.preventDuplicates = true;
                    toastr.success("Request sent just now!");
                    $("send_request").css('display', 'none');
                },
                error: function (data) {
                    toastr.options.preventDuplicates = true;
                    toastr.error("An error occured sending request...");
                }
            });
        });
    });

$(document).ready(function(){
        $(".undo_request").click(function(e){
            e.preventDefault();
            var reciever_email = $(this).data("email");
            // alert(reciever_email);
            $.ajax({
                url:'undo_request/'+reciever_email,
                type:'POST',
                data: {email:reciever_email},
                success:function(data){
                    // alert(data);
                    // console.log(data);
                    toastr.options.preventDuplicates = true;
                    toastr.info("Request cancelled!");
                    $(this).hide();
                    $("#send_request").show()
                },
                error: function (data) {
                    toastr.options.preventDuplicates = true;
                    toastr.error("An error occured cancelling request...");
                    // var obj = jQuery.parseJSON( data.responseText );
                }
            });
        });
    });


//