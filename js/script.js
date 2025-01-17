$(document).ready(function(){
    $('#submit').click(function(){
        var name = $('#name').val();
        var shout = $('#shout').val();
        var date = getDate(); //Still need to create getDate()
        var dataString = 'name=' + name + '&shout=' + shout + '&date=' + date;

        // Validation
        if(name == '' || shout == ''){
            alert('Please Fill in your name and shout');
        } else {
            $.ajax({
                type:"POST",
                url:"../jsshoutbox/shoutbox.php",
                data: dataString,
                cache: false,
                success: function(html){
                    $('#shouts ul').prepend(html);
                }
            });
        }

        return false;
    });
});


function getDate(){
    var date;
    date = new Date();
    date = date.getUTCFullYear + '-' + 
            ('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
            ('00' + date.getUTCDate()).slice(-2) + ' ' +
            ('00' + date.getUTCHours()).slice(-2) + ':' +
            ('00' + date.getUTCMinutes()).slice(-2) + ':' +
            ('00' + date.getUTCSeconds()).slice(-2);
    return date;
            

}