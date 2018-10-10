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

function flatNotify(init, id, type, message, mid)
{
    if(init == 1){
        place = document.getElementById(id);
        place.classList.add(type)
        mp = document.getElementById(mid)
        mp.innerText = message;
        document.getElementById(id).style.display = "block";
    }

    if(init == 2){
        document.getElementById(id).style.display = "none";
    }
}

function flashMessage(message, type = "success", position = "top-right", style = "circle", timeout = 3000, page = ".page-container")
{
    $(page).pgNotification({
        style: style,
        message: message,
        position: position,
        timeout: timeout,
        type: type
    }).show();
}

function editModule(a,b,c){
    $('#modname').val(a)
    $('#modorder').val(b)
    $('#the-id').val(c)
    ModalCaller("editModuleModal", "side");
}

function ModalCaller(id, type, size = "mini"){
    if(type == "SUP"){
        if (size == "mini") {
            $('#'+id).modal('show')
        } else {
            $('#'+id).modal('show')
            if (size == "default") {
                modalElem.children('.modal-dialog').removeClass('modal-lg');
            } else if (size == "full") {
                modalElem.children('.modal-dialog').addClass('modal-lg');
            }
        }
    }

    if(type == "SLIDE"){
        if (size == "mini") {
            $('#'+id).modal('show') 
        } else {
            $('#'+id).modal('show')
            if (size == "default") {
                modalElem.children('.modal-dialog').removeClass('modal-lg');
            } else if (size == "full") {
                modalElem.children('.modal-dialog').addClass('modal-lg');
            }
        }
    }
    if(type == "side"){
        $('#'+id).modal('show')
    }
    return false;
}

function saveModuleEditedDetails()
{
    mname = $('#modname').val()
    morder = $('#modorder').val()
    mid = $('#the-id').val()
    if(mname !== "" && morder !== "" && mid !== ""){
        $.post('/edit/module/ajax', {modulename : mname, moduleorder : morder, id : mid}, function(res){
            if(res){
                res = JSON.parse(res)
                console.log(res)
                flatNotify(1, 'editmodtab', 'alert-info', res.message, 'editmodMess');
                setTimeout(()=> {
                    location.reload();
                }, 2000);
            }
        });
    } else {
        flatNotify(1, 'editmodtab', 'alert-danger', 'You have empty fields!', 'editmodMess');
    }
}