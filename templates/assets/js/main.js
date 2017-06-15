const app = {
  productImageUpload(arg) {
          var slots = arg;
          window.URL = window.URL || window.webkitURL;

          let productUploadElem = document.getElementsByClassName("product-img-input"),
              productUploadBtn = document.getElementsByClassName("btn-product-img"),
              productImgWrapper = document.getElementById("product-img-wrapper"),
              productImgList = document.getElementById("product-imgs");

          productImgWrapper.style.display = "none";

          Array.from(productUploadBtn).forEach( button => {
                button.addEventListener('click', (e) => {
                    Array.from(productUploadElem).some( (input) => {
                        if (input) {
                            input.click();
                            return true;
                        }
                    });
                    e.preventDefault();
                }, false);
          });

          var imageList = [];
          var products;

          Array.from(productUploadElem).forEach( input => {
                input.addEventListener('change', () => {
                    if (slots == 0) {
                        return;
                    }
                    else{
                        productImgWrapper.style.display = "block";

                        products = input.files;
                        imageList.unshift(products)
                        // console.log(products);
                        imageHandler(products);
                        slots--;
                        console.log(slots);
                    }
                    
                }, false);
          });

          function imageHandler(files) {
              Array.from(files).forEach( file => {
                  if ((file.type !== "image/jpeg") && (file.type !== "image/png")) {

                      return false;

                  } else {

                      let imageItem = document.createElement("li"),
                          image = document.createElement("img"),
                          removeBtn = document.createElement("span");

                      image.src = window.URL.createObjectURL(file);
                        image.onload = function() {
                          // console.log(this);
                          window.URL.revokeObjectURL(this.src);
                      }

                      imageItem.appendChild(removeBtn);
                      imageItem.appendChild(image);
                      productImgList.appendChild(imageItem);
                  }
              });

              if (imageList.length > 4) {
                  // alert("Complete");
                  input.style.display ='none';
              } 
          }
      },

      commentHandler() {
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

      }
}
