$(document).ready(function() {
  $(".tel").mask("(99) 9.9999-9999");

  $(".navigation_menu li").click(function() {
    var pos = $("#" + this.dataset.id).position().top;
    $("html, body").animate(
      {
        scrollTop: pos
      },
      1000
    );
  });

  $("#announce_button").click(function() {
    var pos = $("#section_five").position().top;
    $("html, body").animate(
      {
        scrollTop: pos
      },
      1300
    );
  });

  $(".parallax").parallax();
  $(".modal").modal();
});

window.addEventListener("load", function() {
  var load = document.getElementById("preload");
  //document.getElementById("btins").classList.remove('ndis');
  document.body.removeChild(load);
});
