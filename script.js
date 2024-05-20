$(document).ready(function () {
  $("#update_button").click(function (e) {
    e.preventDefault();
    $.get("update.php", function (data) {
      $("#table_container").html(data);
    });
  });

  $(document).on("submit","#insertForm",function (e) {
    alert();
    e.preventDefault();

    var formdata = $(this).serialize();

    $.post("insert.php", formdata, function (data) {
      $("#table_container").html(data);
    });
  });


  $(document).on('submit', function(e){
    // validation code here
    if(!valid) {
      e.preventDefault();
    }
  });

  $("#table_button").click(function (e) {
    e.preventDefault();
    getTable();
  });

  $("#add_button").click(function (e) {
    e.preventDefault();
    $.get("insert.php", function (data) {
      $("#table_container").html(data);
    });
  });
  getTable();
});


function getTable(){
  $.get("select.php", function (data) {
    $("#table_container").html(data).show();
  });
}
