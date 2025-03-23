// Add your custom JS here.
AOS.init({
  easing: "ease-out-cubic",
  once: true,
  duration: 800,
});

(function () {
  // Hide header on scroll
  var doc = document.documentElement;
  var w = window;

  var prevScroll = w.scrollY || doc.scrollTop;
  var curScroll;
  var direction = 0;
  var prevDirection = 0;

  var header = document.getElementById("wrapper-navbar");

  var checkScroll = function () {
    // Find the direction of scroll (0 - initial, 1 - up, 2 - down)
    curScroll = w.scrollY || doc.scrollTop;
    if (curScroll > prevScroll) {
      // Scrolled down
      direction = 2;
    } else if (curScroll < prevScroll) {
      // Scrolled up
      direction = 1;
    }

    if (direction !== prevDirection) {
      toggleHeader(direction, curScroll);
    }

    prevScroll = curScroll;
  };

  var toggleHeader = function (direction, curScroll) {
    if (direction === 2 && curScroll > 125) {
      // Replace 52 with the height of your header in px
      if (
        !document.getElementById("wrapper-navbar").classList.contains("show")
      ) {
        header.classList.add("hide");
        prevDirection = direction;
      }
    } else if (direction === 1) {
      header.classList.remove("hide");
      prevDirection = direction;
    }
  };

  window.addEventListener("scroll", checkScroll);

  // Header background
  document.addEventListener("scroll", function () {
    var nav = document.getElementById("navbar");
    //   var primaryNav = document.getElementById('primaryNav');
    //   if (!primaryNav.classList.contains('show')) {
    //       nav.classList.toggle('scrolled', window.scrollY > nav.offsetHeight);
    //   }
    document.querySelectorAll(".dropdown-menu").forEach(function (dropdown) {
      dropdown.classList.remove("show");
    });
    document.querySelectorAll(".dropdown-toggle").forEach(function (toggle) {
      toggle.classList.remove("show");
      toggle.blur();
    });
  });

  // Toggle navdark class on nav toggle button click
  //   document.getElementById('navToggle').addEventListener('click', function() {
  //       var nav = document.getElementById('navbar');
  //       nav.classList.toggle('navdark');
  //   });

  // Hide menu on click outside
  //   document.body.addEventListener('click', function(event) {
  //       if (!event.target.closest('.navbar')) {
  //           var navbarCollapse = document.querySelector('.navbar .navbar-collapse');
  //           if (navbarCollapse) {
  //               var collapseInstance = bootstrap.Collapse.getInstance(navbarCollapse);
  //               if (collapseInstance) {
  //                   collapseInstance.hide();
  //               }
  //           }
  //       }
  //   });
})();
