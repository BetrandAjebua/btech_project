<!-- <script src="jquery.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
<?php 
// include "../assets/connection/head.php" 
?>
</head>

<body class=""> -->
<style>
  #content{
    
    
  }
.page-header{
  background-color:white;
  width:40vw;
  position:relative;
  margin:20vw;
  margin-top:5vw;
  margin-left:38vw;
  padding:10px;

}
</style>

     <div class="modal" id="updateData">
     <div  class="modal-dialog page-header min-vh-60 text-center rounded-3" style=" z-index=9">
            <div class="col-xl-10 col-lg-8 col-md-8 d-flex flex-column ms-auto me-auto ms-lg-auto ">
              <div class=" modal-content card card-plain">
                <div class=" modal-header bg-gradient-danger text-white">
                  <h4 class="modal-title font-weight-bolder text-white">Update Data</h4>
                </div>
                <div class="modal-body">
                  <form role="form" method="post">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="text-center">
                      <button type="button" class="btn btn-lg bg-gradient-danger btn-lg w-100 mt-4 mb-0" id="hide">Save</button>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
      <script>
        // $("#content").hide();
document.querySelector("#hide").addEventListener("click", function(){
$("#content").hide();

})
      </script>
<!-- </body> -->

<!-- </html> -->