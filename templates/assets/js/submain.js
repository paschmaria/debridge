commentHandler: function(){
		var $container = $('section.main');
		var $addComment = $container.find('#press');
		// creating messages
		var callbackdata = JSON.parse(localStorage.getItem('story'));
		var comment = callbackdata || {}; //
        comment.users = comment.users || []; //
        //console.log({stories});

        var commentParameters = {
        	shoulEdit: false,
        	userIndex: "",
        	allUsers:comment.users.length,

        	updatecomment: function (arg){
        		//stories = callbackdata;
        		//console.log(callbackdata.users);
        		//console.log(stories.users.length);
        		//console.log(arg.val());
        		
        			var output = "";

	        		for (var i = 0; i < comment.users.length; ++i){
	        			output += ` <div class="media">
	                                    <div class="pull-left p-r-10">
	                                        <img class="media-object " src="assets/img/acc-img-2.png" alt="Image">
	                                    </div>
	                                    <div class="media-body">
	                                        <h6 class="media-heading w-700 m-b-5 f-12">Cindy Fashion House </h6>
	                                        <p m-b- f-12>`+comment.users[i].comment+`</p>
	                                        <ul class="m-b-0 f-12">
	                                            <li class="c-brand dis-inline-b p-r-10"><a href="#"><span><i class="fa fa-heart-o"></i></span> Like</a></li>
	                                        <li class="c-brand dis-inline-b p-l-10 p-r-10"><a href="#">Reply</a></li>
	                                        <li class="c-brand dis-inline-b p-l-10">31 May 2017</li>
	                                        </ul>
	                                        <div class="media m-t-5">
	                                            <div class="pull-left p-r-10">
	                                                <img src="assets/img/acc-img-1.png" class="media-object">
	                                            </div>
	                                            <div class="media-body">
	                                                <textarea name="" class="md-textarea input-alternate p-10 h-58 border-box" style="width:400px" placeholder="Write a reply..."></textarea>
	                                            </div>
	                                        </div>
	                                    </div>
                                	</div>`
	        		}
	        					


	        		$(".go").html(output);
	        		//console.log(arg.val());
	        		arg.val(" ");
	        		//console.log(arg.val());

	        
        	},
        	creatcomment: function(arg){
        		var $textarea = arg.val();//gets the text put in the text area
        		//console.log($textarea);
        		
				comment.users.unshift({
        			comment: $textarea,
        		});
        		comment.allUsers ++;


        		//console.log('stories');
        	}
        };
        $.extend (comment, commentParameters);

        $addComment.keypress(function(e) {
        	//console.log($(this).val().length);
	    	if(e.which === 13 && $(this).val() !== '' && $(this).val().trim() !== '') {
		 		comment.creatcomment($(this));
	    		comment.updatecomment($(this));
	        }
        	 
	});

	},
