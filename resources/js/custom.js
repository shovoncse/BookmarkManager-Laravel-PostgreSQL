let axios = require('axios');

$('body').on('click', '.delete-bookmark', function(){
    let id = $(this).data('id');

    axios.delete('/bookmarks/'+id)
        .then(function(){
            //alert();
            window.location.reload();
        })
        .catch(function(error){
            //alert(error);
            console.log(error);
        });
});