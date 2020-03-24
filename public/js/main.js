$('#reset').click(function () {
    if (!$('#myCheck').is(':checked')) {
        alert('Check box is not checked!');
        return false;
    }
});


function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }