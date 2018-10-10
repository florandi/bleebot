function loader(a,  message = 'Loading...')
{
	if(a == 1){
		$('#textr').html(message);
        $('#loadermodal').modal({
            backdrop: 'static',
            keyboard: true, 
            show: true
        }); 
    }

    if(a == 2){
        $('#loadermodal').modal('hide');
        $('.modal-backdrop').remove();
    }
}


function createModule()
{
    loader(1);
    // alert('here')
    mname = document.getElementById('modulename').value;
    order = document.getElementById('order').value;
	if(mname !== "" && order !== ""){
		$.post('/creating/module/ajax', {modulename : mname, order : order}, function(res){
			if(res)
			{
				loader(2)
				res = JSON.parse(res)
				if(res.type == 1){
					flashMessage(res.message, "info")
                    setTimeout(() => {
                        location.reload()
                    }, 3000);
				}

				if(res.type == 2){
					flashMessage(res.message, "danger")                    
				}
            } else {
                loader(2)
                flashMessage("Oops sorry there was no response please try again later", "danger")
            }
		});
    } else {
        loader(2)
        flashMessage("You have empty fields", "danger")
    }
	
	return false;
}

function flashMessage(message, type = "success", position = "top-right", timeout = 3000, page = ".page-container",style = "circle")
{
    $(page).pgNotification({
        style: style,
        message: message,
        position: position,
        timeout: timeout,
        type: type
    }).show();
}