"use strict";

function assignInputBackground (file, type) {
  let placeholder = document.getElementById(type+"Placeholder");
  let reader = new FileReader();
  reader.readAsDataURL(file);
  reader.onloadend = function () {
    placeholder.style.background = "url("+this.result+") no-repeat center center";
    placeholder.style.backgroundSize = "cover";
  }
}

window.addEventListener("load", function() {

  document.getElementById("changeAvatar").addEventListener("click", function() {
    document.getElementById("avatarSource").click();
  });

  document.getElementById("changeCover").addEventListener("click", function() {
    document.getElementById("coverSource").click();
  });

  document.getElementById("avatarSource").addEventListener("change", function(e) {
    assignInputBackground(e.target.files[0], "avatar");
  });

  document.getElementById("coverSource").addEventListener("change", function(e) {
    assignInputBackground(e.target.files[0], "cover");
  });

});
