let dropBtn = document.getElementById("dropBtn");
let dropContent = document.getElementById("dropContent");

dropBtn.addEventListener('click', function(event) {
	if (dropContent.className === "dropdown-content") {
		dropContent.className = "hide";
	} else if (dropContent.className === "hide") {
		dropContent.className = "dropdown-content";
	}

});


let infoTag = document.getElementById("info");
let passwordTag = document.getElementById("password");
let avatarTag = document.getElementById("avatar");

let infoContent = document.getElementById("infoId");
let passwordContent = document.getElementById("passwordId");
let avatarContent = document.getElementById("avatarId");

infoTag.addEventListener('click', function(event) {
	if (infoContent.className === "hide") {
		infoContent.className = "infoId";
		passwordContent.className = "hide";
		avatarContent.className = "hide";
	}


});

passwordTag.addEventListener('click', function(event) {
	if (passwordContent.className === "hide") {
		passwordContent.className = "passwordId";
		infoContent.className = "hide";
		avatarContent.className = "hide";
	}

});

avatarTag.addEventListener('click', function(event) {
	if (avatarContent.className === "hide") {
		avatarContent.className = "avatarId";
		infoContent.className = "hide";
		passwordContent.className = "hide";
	}

});
