function validate()
{
	let login = $("#login").val()
    let password = $("#password").val()

    $.ajax({
        type: "POST",
        url: '/ebanx/backend/routes.php',
        dataType: 'json',
        data: {functionname: 'verifyUser', arguments: [login, password]},
        success: function (obj, textstatus) {
            console.log(1,obj)
        	alert(1,obj)
            if( !('error' in obj) ) {
                yourVariable = obj.result;
            }
            else {
                console.log(obj.error);
            }
        },
		error: function (obj) {
        	console.log(2,obj)
			alert(2,obj)
        }
    });
}