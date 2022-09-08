// NAVBAR SHOW / HIDE
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100%";
  }
  prevScrollpos = currentScrollPos;
};

function startCountdown() {
  // COUNTDOWN
  var countDownDate = new Date("Nov 25, 2022").getTime();

  // Update the count down every 1 second
  var x = setInterval(function () {
    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Display the result in the corresponding element
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("days").innerHTML = 0;
      document.getElementById("hours").innerHTML = 0;
      document.getElementById("minutes").innerHTML = 0;
      document.getElementById("seconds").innerHTML = 0;
    }
  }, 1000);
}

if (document.querySelector(".countdown") !== null) {
  startCountdown();
}

// online / offline
const onlineOfflineSelect = document.querySelector("#online-offline");
const CouncilSelects = [
  document.querySelector("#firstCouncil"),
  document.querySelector("#secondCouncil"),
];

const onlineOfflineCouncil = {
  online: [
    "UNEP (United Nations Environment Programme)",
    "EU (European Union)",
  ],
  offline: [
    "UNSC (United Nations Security Council)",
    "WHO (World Health Organization)",
  ],
};

let lastOnlineOffline = "";

function removeOptions(toRemove) {
  CouncilSelects.forEach((select) => {
    let options = select.options;
    let optionToRemove = [];
    console.log(options);
    Array.prototype.forEach.call(options, (option) => {
      console.log(option);
      onlineOfflineCouncil[toRemove].forEach((offlineValue) => {
        if (offlineValue === option.value) {
          optionToRemove.push(option);
        }
      });
    });
    optionToRemove.forEach((option) => {
      select.removeChild(option);
    });
  });
}

function restoreOptions(toRestore) {
  CouncilSelects.forEach((select) => {
    onlineOfflineCouncil[toRestore].forEach((value) => {
      select.innerHTML += `<option value="${value}">${value}</option>`;
    });
  });
}

onlineOfflineSelect.addEventListener("change", () => {
  if (onlineOfflineSelect.value === "online") {
    removeOptions("offline");
    if (lastOnlineOffline !== "") {
      // bring back the online options
      restoreOptions("online");
    }
    lastOnlineOffline = "online";
  } else if (onlineOfflineSelect.value === "offline") {
    removeOptions("online");
    if (lastOnlineOffline !== "") {
      // bring back the online options
      restoreOptions("offline");
    }
    lastOnlineOffline = "offline";
  }
});
