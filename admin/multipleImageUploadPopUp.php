  


 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <
        <div class="modal-body">
          <!-- File Upload form start -->

             <form id="uploadForm" action="upload.php" method="post">  
                     <div id="gallery"></div><div style="clear:both;"></div><br /><br />  
                     <div class="col-md-4" align="right">  
                          <label>Upload Multiple Image</label>  
                     </div>  
                     <div class="col-md-4">  
                          <input name="files[]" type="file" multiple />  
                     </div>  
                     <div class="col-md-4">  
                          <input type="submit" value="Submit" />  
                     </div>  
                     <div style="clear:both"></div>  
                </form>  

          <!-- File Upload form end -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script>  
 $(document).ready(function(){  
      $('#uploadForm').on('submit', function(e){  
           e.preventDefault();  
           $.ajax({  
                url: "upload.php",  
                type: "POST",  
                data: new FormData(this),  
                contentType: false,  
                processData:false,  
                success: function(data)  
                 {  
                     $("#gallery").html(data);  
                     alert("Image Uploaded");  
                }  
           });  
      });  
 });  
 </script>    
</body>
</html>
