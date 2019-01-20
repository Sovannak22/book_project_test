$(document).ready(function(){
$("#profile-img").change(function(){
    $("#form-img").removeClass("image-upload");
    readURL(this);
});
$('#cancel-button').click(function() {
    location.reload();
});
});


function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
        $('#user-img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
  

