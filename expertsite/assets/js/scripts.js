
$(document).ready(function() {

    $('.sendMessage').click(function () {

        document.getElementById('show_image').style.display = "block";
        var span = document.getElementsByClassName("close_image")[0];

        span.onclick = function () {
            document.getElementById('show_image').style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == document.getElementById('show_image')) {
                document.getElementById('show_image').style.display = "none";
            }
        }
    });

});