function validate(event)
{
    console.log(event)

    let data = new FormData();
    data.append('functionname', 'verifyUser');
    data.append('login', $("#login").val());
    data.append('password', $("#password").val());

/*
    $.ajax({
        type: "POST",
        url: '/ebanx/backend/routes.php',
        dataType: 'json',
        data: data,
        success: function (obj) {
            console.log(1,obj)

        },
		error: function (obj) {
        	console.log(2,obj)
        }
    });*/

    let ajax = new XMLHttpRequest();
    ajax.open("POST", "/ebanx/backend/routes.php", true);
    ajax.setRequestHeader("Content-type", false);
    ajax.send("data="+data);
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4 && ajax.status == 200) {
            var data = ajax.responseText;
            console.log(data);
        }
    }

}