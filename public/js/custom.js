$(document).ready(function(){
    $.ajax({
        type: "get",
        url: "send.php",
        success: function (result) {
            $("#tabela").html(result);
        }
    });
    $("#button").click(function() {
        var text = $("#poruka").val();
        var email = $("#email").val();
        var dataString = 'text1=' + text + '&email1=' + email;
        if(text=='' || email=='')
        {
            alert("Please Fill All Fields");
        }
        else {

            $.ajax({
                type: "POST",
                url: "add.php",
                data: dataString,
                cache: false,
                success: function () {
                    $.ajax({
                        type: "get",
                        url: "send.php",
                        success: function (result) {
                            $("#tabela").html(result);
                        }
                    });
                }
            });
        }
        return false;
    });
});