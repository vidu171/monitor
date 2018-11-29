var cloudinary_url = "https://api.cloudinary.com/v1_1/dm39od6po/upload" 
var cloudinary_upload_preset = "pnz2zx0p" 
  
var imagePreview  = document.getElementById('img-preview');
  var fileUpload = document.getElementById('file-upload');

  fileUpload.addEventListener('change', function(event){
      var file = event.target.files[0];
        var formData = new FormData();
        formData.append('file',file);
        formData.append('upload_preset', cloudinary_upload_preset);
       axios({
            url: cloudinary_url,
            method: 'POST',
            headers:{
                'Content-Type': 'application/x-www-form-urlencoded'
           },
           data:formData
        }).then(function(res){
            var url = res.data.secure_url
            
        }).catch(function(err){
            console.log(err);
        })

  })