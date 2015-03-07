$(document).ready(function() {
    $("#tekst").keyup(function (e) {
        if (e.which == 13) {
            e.preventDefault();
            console.log("nesto");
        }
        else{
            var len = $("#tekst").val().length;
            console.log(len);
            if (len >= 200) {
                $("#tekst").html($("#tekst").val().substring(0, 200));
            } else {
                $('#charNum').text((200 - len)+ ' characters left');
            }
        }
    });
    })
