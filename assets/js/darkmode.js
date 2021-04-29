if (localStorage.getItem("theme") !== 'dark-mode') {
    console.log('OFF');
    document.getElementById('dark-mode-toggle').innerHTML = "DarkMode : OFF";
  } else {
    document.getElementById('dark-mode-toggle').innerHTML = "DarkMode : ON";
    console.log('ON');
  }
  (function() {
    let onpageLoad = localStorage.getItem("theme") || "";
    let element = document.body;
    element.classList.add(onpageLoad);
    document.getElementById("theme").textContent =
      localStorage.getItem("theme") || "light";
  })();

  function myFunction() {
    let element = document.body;
    element.classList.toggle("dark-mode");
    let theme = localStorage.getItem("theme");

    var button = document.querySelector('button')

    if (theme && theme === "dark-mode") {
      document.documentElement.setAttribute('dark-mode', 'dark');
      localStorage.setItem("theme", "");
      document.getElementById('dark-mode-toggle').innerHTML = "DarkMode : OFF";
    } else {
      document.documentElement.setAttribute('dark-mode', 'light');
      localStorage.setItem("theme", "dark-mode");
      document.getElementById('dark-mode-toggle').innerHTML = "DarkMode : ON";
    }

    document.getElementById("theme").textContent = localStorage.getItem("theme");
  }