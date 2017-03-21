$(document).ready(function(){

	$("#outdoors").on('click', function(event){
		var activities = $("#plannerForm").serialize();
		$.post('activities.php', activities, function(data){
			var sortResult = $.trim(data);
			$("#suggestions").html(sortResult);
		});
	});

	$("#indoors").on('click', function(event){
		var activities = $("#plannerForm").serialize();
		$.post('activities.php', activities, function(data){
			var sortResult = $.trim(data);
			$("#suggestions").html(sortResult);
		});
	});
	
	$("#events").on('click', function(event){
		var activities = $("#plannerForm").serialize();
		$.post('activities.php', activities, function(data){
			var sortResult = $.trim(data);
			$("#suggestions").html(sortResult);
		});
	});

	$("#all").on('click', function(event){
		var activities = $("#plannerForm").serialize();
		$.post('activities.php', activities, function(data){
			var sortResult = $.trim(data);
			$("#suggestions").html(sortResult);
		});
	});
	
	$("#winter").on('click', function(event){
		var activities = $("#plannerForm").serialize();
		$.post('activities.php', activities, function(data){
			var sortResult = $.trim(data);
			$("#suggestions").html(sortResult);
		});
	});
	
		$("#spring").on('click', function(event){
		var activities = $("#plannerForm").serialize();
		$.post('activities.php', activities, function(data){
			var sortResult = $.trim(data);
			$("#suggestions").html(sortResult);
		});
	});
	
	$("#summer").on('click', function(event){
		var activities = $("#plannerForm").serialize();
		$.post('activities.php', activities, function(data){
			var sortResult = $.trim(data);
			$("#suggestions").html(sortResult);
		});
	});	

		$("#fall").on('click', function(event){
		var activities = $("#plannerForm").serialize();
		$.post('activities.php', activities, function(data){
			var sortResult = $.trim(data);
			$("#suggestions").html(sortResult);
		});
	});


});
