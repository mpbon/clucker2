
axios.get('http://127.0.0.1:8001/api/users').then(function(response){

    $.each(response.data, function( key , user ) {
        $('#user-list').append(user.name);
    });
});
