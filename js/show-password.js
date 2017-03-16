$(document).ready(function() {
  $("#showPassword").click(function() {
    if ($(".login-password-text-box").attr("type") == "password") {
        $(".login-password-text-box").attr("type", "text");
        $(".show-off").attr("class", "fa fa-eye show-on");
    } else {
        $(".login-password-text-box").attr("type", "password");
        $(".show-on").attr("class", "fa fa-eye show-off");
    }
  });
});
