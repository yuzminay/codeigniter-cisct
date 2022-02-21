$("#createEmployee").submit(function (event) {
  event.preventDefault();
  $.ajax({
    url: "/employee/add",
    data: $("#createEmployee").serialize(),
    type: "post",
    async: false,
    dataType: 'json',
    success: function (response) {
      $('#createEmployee')[0].reset();
      alert('Successfully inserted');
    }
  });
});