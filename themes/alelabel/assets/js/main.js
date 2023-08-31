document.addEventListener("DOMContentLoaded", function () {
  var scrollSpyElement = document.body;
  var scrollSpyOptions = {
    target: "#navbarNav",
    offset: 70,
  };

  var scrollSpyInstance = new bootstrap.ScrollSpy(
    scrollSpyElement,
    scrollSpyOptions
  );
});

// Function to handle parallax scrolling
function handleParallax() {
  var parallaxImage = document.querySelector(".parallax-image");
  if (parallaxImage) {
    var scrollPosition = window.pageYOffset;
    parallaxImage.style.transform =
      "translateY(" + scrollPosition * 0.5 + "px)";
  }
}

// Initialize parallax on page load
document.addEventListener("DOMContentLoaded", function () {
  handleParallax();
});

// Update parallax on scroll
document.addEventListener("scroll", function () {
  handleParallax();
});
