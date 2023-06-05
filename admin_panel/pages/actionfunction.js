var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
  var options = {
    damping: '0.5'
  }
  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);




  // 
}
// Function to Delete Registered Patient
function deletePatient(value1) {
// Send an AJAX request to the PHP file that will delete the record
let xhr =  new XMLHttpRequest();
xhr.open("POST","action.php");
xhr.send(`del_id=${value1}`);


$.ajax({
url: "action.php",
type: "POST",
data: { del_id: value1 },
success: function() {
  // Reload the page to show the updated data
  location.reload();
}
});
}

// Function to Delete  Patient Request
function deletereq(value2) {
// Send an AJAX request to the PHP file that will delete the record
$.ajax({
url: "action.php",
type: "POST",
data: { delreq_id: value2 },
success: function() {
  // Reload the page to show the updated data
  location.reload();
}
});
}

// Function to Delete  Registered Donor
function del_donor(value3) {
    console.log("yes")
    // Send an AJAX request to the PHP file that will delete the record
    $.ajax({
    url: "action.php",
    type: "POST",
    data: { deld_id: value3 },
    success: function() {
      // Reload the page to show the updated data
      location.reload();
    }
    });
    }

// Function to Delete  Donor Request
function deld_req(value4) {
    // Send an AJAX request to the PHP file that will delete the record
    $.ajax({
    url: "action.php",
    type: "POST",
    data: { deldr_id: value4 },
    success: function() {
      // Reload the page to show the updated data
      location.reload();
    }
    });
    }  
    
    

    // Section for the confirmation of request


    function confirm_donor_request(value5) {
        // Send an AJAX request to the PHP file that will delete the record
        $.ajax({
        url: "action.php",
        type: "POST",
        data: { confdr_id: value5 , del_confdr_id: value5},
        success: function() {
          // Reload the page to show the updated data
          location.reload();
        }
        });
        }  