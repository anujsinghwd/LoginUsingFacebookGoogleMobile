document.addEventListener("DOMContentLoaded",function(){
	document.getElementById("createpost").addEventListener("click",addTask);

});

function addTask(){

	var text = document.getElementById('textarea');
	var list = document.getElementById('taskList');

	//document.getElementById('date').innerHTML = Date();
	//list.innerHTML = text.value;
	var post = text.value;
	//document.getElementById('panel').style.display = 'block';
	text.value="";

	       $.ajax({
					        type: 'POST',
					        url: 'postdb.php',
					        data: { post: post },
					        success: function(data) {
					     			window.location.href = "wall.php";
					        	}

			    });

}