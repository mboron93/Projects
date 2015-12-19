$(document).ready(function(){
    $('#dodaj').click(function() {
        $.ajax({
            url: '/test/dodajdokoszyka?co=cos&ile=3',
            success: function(resp) {
                alert('dodano');
            }
        });
    });
})  ;  