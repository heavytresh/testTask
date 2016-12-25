$( document ).ready(function() {

var page = 1;

getPageData();

function getPageData() {
	$.ajax({
    	dataType: 'json',
    	url: url + 'api/getData.php',
    	data: { page: page}
	}).done(function(data){
		manageRow(data.data);
	});
}

function manageRow(data) {
	var rows = '';
	$.each( data, function( key, value ) {
	  	rows = rows + '<tr>';
	  	rows = rows + '<td>' + value.FirstName + '</td>';
	  	rows = rows + '<td>' + value.SecondName + '</td>';
                rows = rows + '<td>' + value.Email + '</td>';
	  	rows = rows + '<td data-id="' + value.id + '">';
        rows = rows + '<button data-toggle="modal" data-target="#edit-item" class="btn btn-primary edit-item">Edit</button> ';
        rows = rows + '<button class="btn btn-danger remove-item">Delete</button>';
        rows = rows + '</td>';
	  	rows = rows + '</tr>';
	});

	$("tbody").html(rows);
}

/* Create */
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");
    var FirstName = $("#create-item").find("input[name='FirstName']").val();
    var SecondName = $("#create-item").find("input[name='SecondName']").val();
    var Email = $("#create-item").find("input[name='Email']").val();

    if(FirstName != '' && SecondName != '' && Email != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + form_action,
            data:{FirstName:FirstName, SecondName:SecondName, Email:Email}
        }).done(function(data){
            $("#create-item").find("input[name='FirstName']").val('');
            $("#create-item").find("input[name='SecondName']").val('');
            $("#create-item").find("input[name='Email']").val('');
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
        });
    }else{
        alert('You are missing some field(s).')
    }

});

/* Remove */
$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: url + 'api/delete.php',
        data:{id:id}
    }).done(function(data){
        c_obj.remove();
        toastr.success('Item Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
    });

});

/* Edit */
$("body").on("click",".edit-item",function(){

    var id = $(this).parent("td").data('id');
    var FirstName = $(this).parent("td").prev("td").prev("td").prev("td").text();
    var SecondName = $(this).parent("td").prev("td").prev("td").text();
    var Email = $(this).parent("td").prev("td").text();
    
    $("#edit-item").find("input[name='FirstName']").val(FirstName);
    $("#edit-item").find("input[name='SecondName']").val(SecondName);
    $("#edit-item").find("input[name='Email']").val(Email);
    $("#edit-item").find(".edit-id").val(id);

});

/* Update */
$(".crud-submit-edit").click(function(e){

    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");
    var FirstName = $("#edit-item").find("input[name='FirstName']").val();
    var SecondName = $("#edit-item").find("input[name='SecondName']").val();
    var Email = $("#edit-item").find("input[name='Email']").val();
    
    var id = $("#edit-item").find(".edit-id").val();

      if(FirstName != '' && SecondName != '' && Email != ''){
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + form_action,
             data:{FirstName:FirstName, SecondName:SecondName, Email:Email, id:id}
        }).done(function(data){
            getPageData();
            $(".modal").modal('hide');
            toastr.success('Item Updated Successfully.', 'Success Alert', {timeOut: 5000});
        });
    }else{
        alert('You are missing title or description.')
    }

});
});

