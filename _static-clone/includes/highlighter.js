// written by sean bost
// original PHP: https://github.com/SeanBost/seanbost.com/blob/main/includes/highlighter.php 


// finding and applying a potential highlight
window.onload = function() {

  const queryString = window.location.search;
  if (queryString) {
    const topic = new URLSearchParams(queryString).get('jumpto');
    const color = getColor(topic);
    highlighter(color);
  }
}

// returns appropriate color for valid topic
function getColor(topic) {

  const topicColors = {
    roles:"red",
    ux:"blue",
    fullstack:"orange",
    marketing:"green",
    systems:"pink"
  }
  const color = topicColors[topic];

  return color;
}

// handles DOM changes to apply/remove highlighter styling and scroll to it
function highlighter(color) {

  // scrolling
  const colorId = document.getElementById(color+"-jump");
  colorId.scrollIntoView({ behavior: "smooth", block: "center"});

  // adding highlight styling
  const spanArray = document.querySelectorAll("span."+color+"-highlight");
  spanArray.forEach((spanItem) => {
    spanItem.classList.add("gen-highlighting");
    spanItem.classList.add(color+"-highlighting");
  });

  // removing highlight on click
  var clickFlag = false;
  document.getElementById("about-body").onclick = function(){pageClick()};
  function pageClick() {
    if (clickFlag == false) { 
      spanArray.forEach((spanItem) => {
        spanItem.style.backgroundColor = "white";
        spanItem.style.padding = "0";
        spanItem.style.fontWeight = "400";
      });
      clickFlag = true;
    }
  }
}
