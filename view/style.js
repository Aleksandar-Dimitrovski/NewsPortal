// footer-top home page link
document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".scroll-to-top").addEventListener("click", function() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });

// navbar-bottom ul li active
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.nav-link');
  const navbar = document.querySelector('.navbar-bottom');
  
  navLinks.forEach(function(link) {
    link.addEventListener('click', function() {
      navLinks.forEach(function(link) {
        link.classList.remove('active-link');
      });
      this.classList.add('active-link');
    });
  });

  window.addEventListener('click', function(event) {
    if (!navbar.contains(event.target)) {
      navLinks.forEach(function(link) {
        link.classList.remove('active-link');
      });
    }
  });
});

//hamburger content close when clicked outside
document.addEventListener('DOMContentLoaded', function () {
  const collapseElements = document.querySelectorAll('[data-bs-auto-close="outside"]');
  
  collapseElements.forEach(function (collapse) {
    collapse.addEventListener('show.bs.collapse', function () {
      document.addEventListener('click', outsideCollapseClickHandler);
    });
    
    collapse.addEventListener('hide.bs.collapse', function () {
      document.removeEventListener('click', outsideCollapseClickHandler);
    });
  });
  
  function outsideCollapseClickHandler(event) {
    const target = event.target;
    
    if (!target.closest('[data-bs-auto-close="outside"]')) {
      const collapses = document.querySelectorAll('[data-bs-auto-close="outside"]');
      
      collapses.forEach(function (collapse) {
        const collapseInstance = bootstrap.Collapse.getInstance(collapse);
        if (collapseInstance) {
          collapseInstance.hide();
        }
      });
    }
  }
});

