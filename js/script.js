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


$("#search").keyup(function () {
  $.ajax({
    url: "/employee/lookup",
    data: { keyup: $("#search").val() },
    type: 'POST',
    dataType: 'json',
    success:
      function (data) {
        if (data.response == "true") {
          $("#result").text('');
          $.each(data.message, function (index) {
            $("#result").append($("<li>", {}).append(
              (`
                ${data.message[index].first_name} 
                ${data.message[index].last_name} 
                ${data.message[index].job} 
                ${data.message[index].salary} 
                ${data.message[index].hiredate} 
              `)));
          });
        } else {
          $("#result").text('');
          console.log('false');
        }

      },
  });
});