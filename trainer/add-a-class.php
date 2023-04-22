<?php

session_start();

  if($_SESSION['email'] && $_SESSION['userpass']){

    include_once 'vendor/includes/head.php';
    include_once 'vendor/includes/nav.php';

    ?>

    <main class="pt-5 mx-lg-5">

      <div class="container-fluid mt-5">



      <div class="container-fluid mt-5">

        <div class="card mb-4 wow fadeIn">

            <!--Card content-->

            <div class="card-body d-sm-flex justify-content-center">

              <h4 class="mb-2 mb-sm-0 pt-1">

                Add Class

              </h4>

            </div>

        </div>

        <?php

        if(isset($_GET['err'])){

        ?>

      <div class="alert alert-warning" style="text-align: center;"> Some Error occured </div>

      <?php } ?>

      <?php

        if(isset($_GET['done'])){

        ?>

      <div class="alert alert-success" style="text-align: center;"> New Administrator Added Sucessfully </div>

      <?php } ?>

        <div class="card pt-4">

          <div class="container">

            <form action="add_a_class.php" enctype="multipart/form-data" method="post">

              <div class="form-row">

                <div class="form-group col-md-4">

                  <label for="useremail">Name</label>

                  <input type="username" class="form-control" name="class_name" id="useremail" placeholder="Class Name">

                </div>

                <div class="form-group col-md-4">

                  <label for="password">Duration</label>

                  <input type="password" class="form-control" name="class_duration" id="password" placeholder="Duration">

                </div>

				
                <div class="form-group col-md-4">

                  <label for="password">Featured Image</label>

                  <input type="file" class="form-control" name="featured_image" id="password" placeholder="Duration">

                </div>

              </div>

			<textarea rows="30" name="class_details" required>
				<p>Describe your class in detail</p>
			</textarea>

			  <div class="form-group col-md-1 pt-4">

                  <input type="submit" class="btn btn-success btn-sm" value="Add" />

                </div>

            </form>

        </div>

    </div>

  </main>



  <script type="text/javascript">

  $(document).ready(function () {

  $('#dtBasicExample').DataTable();

  $('.dataTables_length').addClass('bs-select');

  });

  </script>

<script>
	    $(document).keypress(
          function(event){
            if (event.which == '13') {
              event.preventDefault();
            }
        });
	</script>
  		<script>
  		
  		function checkDefaults(){
  		    const languages = ["English", "Russian", "Chinese", "French", "Japanese", "Portuguese", "Spanish", "Deutsh", "Italian", "More"];
  		    languages.forEach(function(language){
  		       document.getElementById(language).setAttribute("checked","");
  		    });
  		}
  		
  		function uncheckDefaults(){
  		    const languages = ["English", "Russian", "Chinese", "French", "Japanese", "Portuguese", "Spanish", "Deutsh", "Italian", "More"];
  		    languages.forEach(function(language){
  		       document.getElementById(language).removeAttribute("checked");
  		    });
  		}
  		
  		function descriptionLength(){
  		    var str = document.getElementById('game_description').value;
  		    gameDescriptionLength = str.length;
  		    document.getElementById('game_description_length').innerHTML = "Character Count: " + gameDescriptionLength;   
  		}
  		
  		function metaTitleLength(){
  		    var str = document.getElementById('game_meta_title').value;
  		    gameMetaTitleLength = str.length;
  		    document.getElementById('game_meta_title_length').innerHTML = "Character Count: " + gameMetaTitleLength;   
  		}
  		
  		function metaDescriptionLength(){
  		    var str = document.getElementById('game_meta_description').value;
  		    gameMetaDescriptionLength = str.length;
  		    document.getElementById('game_meta_description_length').innerHTML = "Character Count: " + gameMetaDescriptionLength;   
  		}
  			tinymce.init({selector: "textarea",
							  plugins: " advlist autolink autoresize autosave charmap lists codesample emoticons hr image insertdatetime link lists media nonbreaking pagebreak paste preview  searchreplace tabfocus table toc visualblocks wordcount code codesample",
							  toolbar: "undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist  | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  print | insertfile image media pageembed template link anchor codesample | preview code | customInsertButton Adbutton Adbutton1 Adbutton2 Adbutton3",
							      setup: function (editor) {
    
                                    editor.ui.registry.addButton('customInsertButton', {
                                      text: 'Ad 1',
                                      onAction: function (_) {
                                        editor.insertContent('<pre class=\"language-markup\"><code>&lt;script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"&gt;&lt;/script&gt;\n&lt;ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-8317283695412754\"\n     data-ad-slot=\"7057059564\"&gt;&lt;/ins&gt;\n&lt;script&gt;\n     (adsbygoogle = window.adsbygoogle || []).push({});\n&lt;/script&gt;</code></pre>');
                                      }
                                    });
                                    
                                    editor.ui.registry.addButton('Adbutton', {
                                      text: 'Ad 2',
                                      onAction: function (_) {
                                        editor.insertContent('<pre class=\"language-markup\"><code>&lt;script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"&gt;&lt;/script&gt;\n&lt;ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-8317283695412754\"\n     data-ad-slot=\"7731314151\"&gt;&lt;/ins&gt;\n&lt;script&gt;\n     (adsbygoogle = window.adsbygoogle || []).push({});\n&lt;/script&gt;</code></pre>');
                                      }
                                    });
                                    
                                    editor.ui.registry.addButton('Adbutton1', {
                                      text: 'Ad 3',
                                      onAction: function (_) {
                                        editor.insertContent('<pre class=\"language-markup\"><code>&lt;script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"&gt;&lt;/script&gt;\n&lt;ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-8317283695412754\"\n     data-ad-slot=\"3838150659\"&gt;&lt;/ins&gt;\n&lt;script&gt;\n     (adsbygoogle = window.adsbygoogle || []).push({});\n&lt;/script&gt;</code></pre>');
                                      }
                                    });
                                    
                                    editor.ui.registry.addButton('Adbutton2', {
                                      text: 'Ad 4',
                                      onAction: function (_) {
                                        editor.insertContent('<pre class=\"language-markup\"><code>&lt;script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"&gt;&lt;/script&gt;\n&lt;ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-8317283695412754\"\n     data-ad-slot=\"6084205895\"&gt;&lt;/ins&gt;\n&lt;script&gt;\n     (adsbygoogle = window.adsbygoogle || []).push({});\n&lt;/script&gt;</code></pre>');
                                      }
                                    });
                                    
                                    editor.ui.registry.addButton('Adbutton3', {
                                      text: 'Ad 5',
                                      onAction: function (_) {
                                        editor.insertContent('<pre class=\"language-markup\"><code>&lt;script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"&gt;&lt;/script&gt;\n&lt;ins class=\"adsbygoogle\"\n     style=\"display:block; text-align:center;\"\n     data-ad-layout=\"in-article\"\n     data-ad-format=\"fluid\"\n     data-ad-client=\"ca-pub-8317283695412754\"\n     data-ad-slot=\"9750072441\"&gt;&lt;/ins&gt;\n&lt;script&gt;\n     (adsbygoogle = window.adsbygoogle || []).push({});\n&lt;/script&gt;</code></pre>');
                                      }
                                    });
                                
                                    var toTimeHtml = function (date) {
                                      return '<time datetime="' + date.toString() + '">' + date.toDateString() + '</time>';
                                    };
                                
                                    editor.ui.registry.addButton('customDateButton', {
                                      icon: 'insert-time',
                                      tooltip: 'Insert Current Date',
                                      disabled: true,
                                      onAction: function (_) {
                                        editor.insertContent(toTimeHtml(new Date()));
                                      },
                                      onSetup: function (buttonApi) {
                                        var editorEventCallback = function (eventApi) {
                                          buttonApi.setDisabled(eventApi.element.nodeName.toLowerCase() === 'time');
                                        };
                                        editor.on('NodeChange', editorEventCallback);
                                
                                        /* onSetup should always return the unbind handlers */
                                        return function (buttonApi) {
                                          editor.off('NodeChange', editorEventCallback);
                                        };
                                      }
                                    });
                                  },
							  menubar: "tools",
							    image_class_list: [
                                {title: 'None', value: ''},
                                {title: 'Responsive', value: 'img-fluid'},
                                ],
                                images_upload_handler: function (blobInfo, success, failure) {
                                var xhr, formData;
                    
                                xhr = new XMLHttpRequest();
                                xhr.withCredentials = false;
                                xhr.open('POST', 'editorImageUpload.php');
                    
                                xhr.onload = function() {
                                  var json; 
                    
                                  if (xhr.status != 200) {
                                    failure('HTTP Error: ' + xhr.status);
                                    return;
                                  }
                    
                                  console.log(xhr.response);
                                  //your validation with the responce goes here
                    
                                  success(xhr.response);
                                };
                    
                                formData = new FormData();
                                formData.append('file', blobInfo.blob(), blobInfo.filename());
                    
                                xhr.send(formData);
                           }
							  });
		</script>

  <script type="text/javascript" src="js/addons/datatables.min.js"></script>



    <?php include_once 'vendor/includes/footer.php'; ?>



</body>



</html>

<?php

}else{

  header("location:logout.php");

}

?>