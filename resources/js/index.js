let comments = document.getElementsByClassName("comments");

let myFunction = function(id) {

	let content = document.getElementById("content-"+id);

    if (content.className === "hide") {
		 content.className = "";
	 }
	 else {
		 content.className = "hide";
	 }
};

for (let i = 0; i < comments.length; i++) {
    comments[i].addEventListener('click', () => myFunction(comments[i].id), false);
}

let recentTag = document.getElementById("recent");
let gamingTag = document.getElementById("gaming");
let moviesTag = document.getElementById("movies");
let scienceTag = document.getElementById("science");
let sportsTag = document.getElementById("sports");

let recentContent = document.getElementById("recentId");
let gamingContent = document.getElementById("gamingId");
let moviesContent = document.getElementById("movieId");
let scienceContent = document.getElementById("scienceId");
let sportsContent = document.getElementById("sportsId");

gamingTag.addEventListener('click', function(event) {
	if (gamingContent.className === "hide") {
		gamingContent.className = "";
		moviesContent.className = "hide";
		scienceContent.className = "hide";
		sportsContent.className = "hide";
		recentContent.className = "hide";
	}

});

moviesTag.addEventListener('click', function(event) {
	if (moviesContent.className === "hide") {
		moviesContent.className = "";
		gamingContent.className = "hide";
		scienceContent.className = "hide";
		sportsContent.className = "hide";
		recentContent.className = "hide";
	}

});

scienceTag.addEventListener('click', function(event) {
	if (scienceContent.className === "hide") {
		scienceContent.className = "";
		gamingContent.className = "hide";
		moviesContent.className = "hide";
		sportsContent.className = "hide";
		recentContent.className = "hide";
	}

});

sportsTag.addEventListener('click', function(event) {
	if (sportsContent.className === "hide") {
		sportsContent.className = "";
		gamingContent.className = "hide";
		moviesContent.className = "hide";
		scienceContent.className = "hide";
		recentContent.className = "hide";
	}

});

recentTag.addEventListener('click', function(event) {
	if (recentContent.className === "hide") {
		recentContent.className = "";
		gamingContent.className = "hide";
		moviesContent.className = "hide";
		scienceContent.className = "hide";
		sportsContent.className = "hide";
	}

});
