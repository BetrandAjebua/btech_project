<?php
if(!empty($_POST)){
$p_name=htmlspecialchars($_POST[ "p_name"]);
$p_age=htmlspecialchars($_POST[ "p_age"]);

$p_number=htmlspecialchars($_POST[ "p_number"]);

$p_disease=htmlspecialchars($_POST[ "p_disease"]);

$p_bgroup=htmlspecialchars($_POST[ "p_bgroup"]);

$p_gender=htmlspecialchars($_POST[ "p_gender"]);

$p_email=htmlspecialchars($_POST[ "p_email"]);



 $queryUpdate =  $db->prepare(" UPDATE patient SET p_name='$p_name', p_age='$p_age', p_phone='$p_number', 
 p_disease='$p_disease', p_blood_group='$p_bgroup', p_gender='$p_gender', email='$p_email' WHERE p_id=$value->p_id");
 $queryUpdate->execute();
}



?>



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
     <div class="modal" id="<?php echo 'love'.$value->p_id ?>">
     <div  class="modal-dialog page-header min-vh-60 text-center rounded-3" style=" z-index=9">
            <div class="col-xl-10 col-lg-8 col-md-8 d-flex flex-column ms-auto me-auto ms-lg-auto ">
              <div class=" modal-content card card-plain">
                <div class=" modal-header bg-gradient-danger text-white">
                  <h4 class="modal-title font-weight-bolder text-white">Update Data</h4>
                </div>
                <div class="modal-body">
                  <form id= "myForm" role="form" method="post" action="<?php $_SELF  ?>" >
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Name</label>
                      <input type="text" class="form-control" name = "p_name" value="<?php echo $value->p_name  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Age</label>
                      <input type="number" class="form-control" name = "p_age" value="<?php echo $value->p_age  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Phone Number</label>
                      <input type="text" class="form-control"name = "p_number" value="<?php echo $value->p_phone  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Disease</label>
                      <input type="text" class="form-control" name = "p_disease" value="<?php echo $value->p_disease  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Blood Group</label>
                      <input type="text" class="form-control" name = "p_bgroup" value="<?php echo $value->p_blood_group  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Gender</label>
                      <input type="text" class="form-control"name = "p_gender" value="<?php echo $value->p_gender  ?>">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label text-sm">Email</label>
                      <input type="email" class="form-control" name = "p_email" value="<?php echo $value->email  ?>">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg bg-gradient-danger btn-lg w-100 mt-4 mb-0" onclick="updatePatient()">Save</button>
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
      $(document).ready(function() {
  $('#myForm').submit(function(event) {
    event.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: 'action.php',
      data: formData,
      success: function(response) {
        location.reload();
      }
    });
  });
      });
     </script>