$(document).ready(function(){

get_details();
function get_details(){

	$.ajax({
url:"/action",
type:"POST",
data:{action:1,'_token':$('meta[name="csrf-token"]').attr('content')},
success :function (data){

$("#act").html(data);


}

	})

}


$("body").delegate("#ADevices","click",function(){

	$.ajax({
url:"/action",
type:"POST",
data:{ADevices:1,'_token':$('meta[name="csrf-token"]').attr('content')},
success :function (data){


$("#act").html(data);

}

	})

})

$("body").delegate("#Access","click",function(){

	$.ajax({
url:"/action",
type:"POST",
data:{Access:1,'_token':$('meta[name="csrf-token"]').attr('content')},
success :function (data){


$("#act").html(data);

}

	})

})
$("body").delegate("#reg","click",function(){

	$.ajax({
url:"/register",
type:"POST",
data:{regs:1,'_token':$('meta[name="csrf-token"]').attr('content')},
success :function (data){


$("#act").html(data);

}

	})

})




$("body").delegate("#log","click",function(){

	$.ajax({
url:"/login",
type:"POST",
data:{regs:1,'_token':$('meta[name="csrf-token"]').attr('content')},
success :function (data){


$("#regs").html(data);

}

	})

})
});