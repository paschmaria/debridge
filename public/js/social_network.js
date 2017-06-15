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
    
        $(document).on('click', '.send_request',function(e){
            e.preventDefault();
            var reciever_email = $(this).data("email");
            $(this).removeClass('send_request').text('undo request');
            $(this).addClass('undo_request');
            $.ajax({
                url:'send_request/'+reciever_email,
                type:'POST',
                data: {email:reciever_email},
                success:function(data){
                    toastr.options.preventDuplicates = true;
                    toastr.success("Request sent to " + reciever_email);
                        
                },
                error: function (data) {
                    toastr.options.preventDuplicates = true;
                    toastr.error("An error occured sending request...");
                }
            });

        });
    });

//sudo rm -r or -f /var/www/html/de_bridge

    $(document).on('click', "button.undo_request", function(e){
          // alert('clickrf now kilonshele');
            e.preventDefault();
            var reciever_email = $(this).data("email");
            $(this).removeClass('undo_request').text('Send Friend Request');
            $(this).addClass('send_request');

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


//follow logic

$(document).on('click', ".follow", function(e){
          // alert('clickrf now kilonshele');
            e.preventDefault();
            var reciever_email = $(this).data("email");
            // alert(reciever_email);
            $(this).removeClass('follow').text('unfollow');
            $(this).addClass('unfollow');

            $.ajax({
                url:'follow/'+reciever_email,
                type:'POST',
                data: {email:reciever_email},
                success:function(data){
                    // alert(data);
                    // console.log(data);
                    toastr.options.preventDuplicates = true;
                    toastr.success("Now following "+reciever_email);
                },
                error: function (data) {
                    toastr.options.preventDuplicates = true;
                    toastr.error("An error occured while following "+ reciever_email);
                    // var obj = jQuery.parseJSON( data.responseText );
                }
            });
    });

$(document).on('click', ".unfollow", function(e){
          // alert('clickrf now kilonshele');
            e.preventDefault();
            var reciever_email = $(this).data("email");
            // alert(reciever_email);
            $(this).removeClass('unfollow').text('follow');
            $(this).addClass('follow');
            $.ajax({
                url:'unfollow/'+reciever_email,
                type:'POST',
                data: {email:reciever_email},
                success:function(data){
                    // alert(data);
                    // console.log(data);
                    toastr.options.preventDuplicates = true;
                    toastr.info("You unfollowed "+reciever_email);
                },
                error: function (data) {
                    toastr.options.preventDuplicates = true;
                    toastr.error("An error occured while following "+ reciever_email);
                    // var obj = jQuery.parseJSON( data.responseText );
                }
            });
    });

//accept friend_request
$(document).on('click', ".accept_friend", function(e){
          // alert('clickrf now kilonshele');
            e.preventDefault();
            var reciever_email = $(this).data("email");
            var friend_request_div = $(this).data("id");

            // alert(reciever_email);
            $("#user_div"+friend_request_div).hide();
            $.ajax({
                url:'accept_friend/'+reciever_email,
                type:'POST',
                data: {email:reciever_email},
                success:function(data){
                    // alert(data);
                    // console.log(data);
                    toastr.options.preventDuplicates = true;
                    toastr.info("You are now friend with "+reciever_email);
                },
                error: function (data) {
                    toastr.options.preventDuplicates = true;
                    toastr.error("An error occured while accepting "+ reciever_email + " request");
                    // var obj = jQuery.parseJSON( data.responseText );
                }
            });
    });

//decline friend_request
function ConfirmDelete()
              {
              var x = confirm("Are you sure you want to decline this request ?");
              if (x)
                return true;
              else
                return false;
              }
              $("button#a_del").click(function(){
               return ConfirmDelete();
              });
              $("button#a_del").click(function(){
               return ConfirmDelete();
              });


$(document).on('click', ".decline_friend", function(e){
          // alert('clickrf now kilonshele');
            e.preventDefault();
            var reciever_email = $(this).data("email");
            var friend_request_div = $(this).data("id");

            // alert(reciever_email);
            $("#user_div"+friend_request_div).hide();

            $.ajax({
                url:'decline_friend/'+reciever_email,
                type:'POST',
                data: {email:reciever_email},
                success:function(data){
                    // alert(data);
                    // console.log(data);
                    toastr.options.preventDuplicates = true;
                    toastr.info("You declined "+reciever_email+"'s request");
                },
                error: function (data) {
                    toastr.options.preventDuplicates = true;
                    toastr.error("An error occured while accepting "+ reciever_email + " request");
                    // var obj = jQuery.parseJSON( data.responseText );
                }
            });
    });