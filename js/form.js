// online / offline
const onlineOfflineSelect = document.querySelector("#attendance");
const CouncilSelects = [
  document.querySelector("#firstCouncil"),
  document.querySelector("#secondCouncil"),
];

const onlineOfflineCouncil = {
  online: [
    "UNEP (United Nations Environment Programme)",
    "EU (European Union)",
    "UNSC (United Nations Security Council)",
  ],
  offline: ["WHO (World Health Organization)"],
};

let lastOnlineOffline = "";

function removeOptions(toRemove) {
  CouncilSelects.forEach((select) => {
    let options = select.options;
    let optionToRemove = [];

    Array.prototype.forEach.call(options, (option) => {
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
