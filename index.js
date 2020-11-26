let id = document.getElementById("userid");
id.onblur = () => {
	if (id.value > 10000) {
		id.value = "";
		alert("invalid id");
	}
};
