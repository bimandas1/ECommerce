// Add new product.
$(document).on('submit', '#form-add-new-product', function(e) {
  e.preventDefault();
  $.ajax({
    url: 'add-new-product',
    type: 'POST',
    data: new FormData(this),
    processData: false,
    contentType: false,
    success: function(data) {
      if(data == '1') {
        showAlertMessage("New product added.")
      }
      else {
        showAlertMessage(data)
      }
    }
  })
})
