"use strict";

let comments = document.getElementsByClassName("comments");
let

let myFunction = function() {
    console.log("attribute");
};

for (var i = 0; i < comments.length; i++) {
    comments[i].addEventListener('click', myFunction, false);
}
