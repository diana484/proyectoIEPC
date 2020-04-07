$("#state").change(event => {
	$.get(`towns/${event.target.value}`, function(res, state){
		$("#town").empty();
		res.forEach(element => {
			$("#town").append(`<option value=${element.id}> ${element.name} </option>`);
		});
	});
});