"use strict";


let dropBtn = document.getElementById("dropBtn");
let dropContent = document.getElementById("dropContent");

dropBtn.addEventListener('click', function(event) {
	if (dropContent.className === "") {
		dropContent.className = "hide";
	} else if (dropContent.className === "hide") {
		dropContent.className = "";
	}

});
