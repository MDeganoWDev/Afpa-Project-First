document.getElementById("toggleButton").addEventListener("click", function(event) {
    event.preventDefault();
    var thirdTd = document.querySelector("td.hidden");
    thirdTd.classList.toggle("hidden");
  });

