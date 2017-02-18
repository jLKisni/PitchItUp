


function uploadImage(input){
  if(input.files && input.files[0]){
    var reader = new FileReader();

    reader.onload = function(e){
      $('#img_avatar2').attr('src',e.target.result);
    };
     reader.readAsDataURL(input.files[0]);

  }
}



function click_image(){

  $('#uploadImage').click();

}

function click_staff(){

  $('#uploadStaff').click();

}
