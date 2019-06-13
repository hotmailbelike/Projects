$("#form").submit(function(event){
	var id = $("#id").val();
	var pass = $("#password").val();
	if (id === "iubAdmin" && pass === "iubAdmin"){

		$("form").attr("action", "iub_admin.php");
	}
	if (id === "aiubAdmin" && pass === "aiubAdmin"){

		$("form").attr("action", "aiub_admin.php");
	}
	if (id === "nsuAdmin" && pass === "nsuAdmin"){

		$("form").attr("action", "nsu_admin.php");
	}
	if (id === "bracAdmin" && pass === "bracAdmin"){

		$("form").attr("action", "brac_admin.php");
	}
	if (id === "ewuAdmin" && pass === "ewuAdmin"){

		$("form").attr("action", "ewu_admin.php");
	}
	if (id === "aiubFaculty" && pass === "aiubFaculty"){

		$("form").attr("action", "aiub_faculty_view_graph.php");
	}
	if (id === "iubFaculty" && pass === "iubFaculty"){

		$("form").attr("action", "iub_faculty_view_graph.php");
	}
	if (id === "nsuFaculty" && pass === "nsuFaculty"){

		$("form").attr("action", "nsu_faculty_view_graph.php");
	}
	if (id === "ewuFaculty" && pass === "ewuFaculty"){

		$("form").attr("action", "ewu_faculty_view_graph.php");
	}
	if (id === "bracFaculty" && pass === "bracFaculty"){

		$("form").attr("action", "brac_faculty_view_graph.php");
	}



});
	 
