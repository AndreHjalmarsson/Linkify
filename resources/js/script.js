"use strict";

let comments = document.getElementsByClassName("comments");
let content = document.getElementById("content");

let myFunction = function() {
    if (content.className === "hide") {
		 content.className = "";
	 }
	 else {
		 content.className = "hide";
	 }
};

for (let i = 0; i < comments.length; i++) {
    comments[i].addEventListener('click', myFunction, false);
}

let rating = document.getElementById("rating");
let posts = document.getElementById("postC");

rating.addEventListener('click', function(event) {
	if (posts.className === "postContainer") {
		posts.className = "hide";
	}

});

let dropBtn = document.getElementById("dropBtn");
let dropContent = document.getElementById("dropContent");

dropBtn.addEventListener('click', function(event) {
	if (dropContent.className === "dropdown-content") {
		dropContent.className = "hide";
	} else if (dropContent.className === "hide") {
		dropContent.className = "dropdown-content";
	}

});
