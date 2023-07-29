// filter-section start hear //
function applyFilters() {
  var category = document.getElementById("category").value;
  var location = document.getElementById("location").value;
  var type = document.getElementById("type").value;
  var salary = document.getElementById("salary").value;
}

// loging section //
document.addEventListener("DOMContentLoaded", function () {
  const loginLink = document.getElementById("loginLink");
  const loginBtn = document.getElementById("login-btn");
  let isLoggedIn = getLoginStatus();

  updateLoginButton(isLoggedIn);

  loginBtn.addEventListener("click", function (event) {
    event.preventDefault();
    toggleLoginStatus();
    isLoggedIn = getLoginStatus();
    updateLoginButton(isLoggedIn);
  });

  loginLink.addEventListener("click", function (event) {
    if (isLoggedIn) {
    } else {
      event.preventDefault();
      window.location.href = "https://hirenet.orgfree.com/login.html";
    }
  });

  function getLoginStatus() {
    return document.cookie.indexOf("loggedIn=true") !== -1;
  }

  function toggleLoginStatus() {
    if (isLoggedIn) {
      document.cookie =
        "loggedIn=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    } else {
      document.cookie = "loggedIn=true; path=/;";
    }
  }

  function updateLoginButton(isLoggedIn) {
    if (isLoggedIn) {
      loginLink.href = "https://hirenet.orgfree.com/register.html";
      loginLink.textContent = "Logout";
    } else {
      loginLink.href = "https://hirenet.orgfree.com/login.html";
      loginLink.textContent = "Login";
    }
  }
});
