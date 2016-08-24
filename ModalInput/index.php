<!DOCTYPE html>
<html lang="en">
    <head>
         <title>Modal Input Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
        <script type="text/javascript">
             $(function() { $(".submit_button").click(function() { var textcontent = $("#content").val();
              var dataString = 'content='+ textcontent; if(textcontent=='') { alert("Enter some text.."); 
              $("#content").focus(); } else{ $("#flash").show(); 
              $("#flash").fadeIn(400).html('<span class="load">Loading..</span>'); 
              $.ajax({ type: "POST", url: "action.php", data: dataString, cache: true, success: function(html){ $("#show").after(html);
               document.getElementById('content').value=''; 
 $("#flash").hide(); 
 $("#content").focus(); } }); 
 } return false; }); }); 
        </script>
         </head>
    <body>
        <!--
        <div class="container"> 
            <div class="main"> 
                <form method="post" name="form" action=""> 
                    <textarea style="width:500px; font-size:14px; height:60px; font-weight:bold; resize:none;" name="content" id="content" >
                    </textarea><br />
                     <input type="submit" value="Post" name="submit" class="submit_button"/> 
                </form> </div> <div class="space"></div> <div id="flash">
            </div> 
            <div id="show">
        </div>
             </div>
        Grrr
        -->
        <div class="container">
          <h2>Alert</h2>
          <div class="well">Example Input</div>
        </div>
        <div class="container">
  <h2>Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Dailog</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
            <form method="post" name="form" action="">
            <div class="form-group">
          <label for="content">Comment:</label>
          <textarea class="form-control" rows="5" name="content" id="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
            <div class="space">
            </div> <div id="flash">
        </div> 
            <div id="show">
            </div>
</div>
    </body>
</html>
