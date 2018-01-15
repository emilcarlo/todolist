//check off specific to dos by clicking

$("ul").on("click", "li", function() {
	$(this).toggleClass("completed");

	$.post('done.php',
	{id: $(this).attr('id')},
	function (data,status){
		// console.log(data);
	});
});

$('#newTask').keypress(function(event){

	/*console.log(event.which);*/
	if (event.which == 13) {//user pressed enter key

	var	todoText = $(this).val();
	//console.log(todoText);

	$(this).val('');

	$.post('create.php',
	{task: todoText},
	function(data,status) {
		//console.log(data);

		$('ul').append('<li id="' + data + '"><span> <i class="fa fa-minus"></i></span>' + todoText + '</li>');
	});
}
});


//deleting a task

$('ul').on('click', 'span', function () {
//remove list item from DOM
$(this).parent().fadeOut(0, function() {
	$(this).remove();
});


//ajax request to update JSON
$.post('delete.php', {id: $(this).parent().attr('id')}, function(data,status) {

	/*console.log(data);*/
});

event.stopPropagation();

});