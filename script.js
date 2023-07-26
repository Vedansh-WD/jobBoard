// filter-section start hear //
function applyFilters() {
  var category = document.getElementById("category").value;
  var location = document.getElementById("location").value;
  var type = document.getElementById("type").value;
  var salary = document.getElementById("salary").value;
}

// loging section //

// Function to update the login link/button dynamically
function updateLoginLink() {
  const loginLinkContainer = document.getElementById("userLinkContainer");
  const loginLink = loginLinkContainer.querySelector("a.navbar-link.login");
  const isLoggedIn =
    loginLinkContainer.getAttribute("data-isLoggedIn") === "true";
  const username = loginLinkContainer.getAttribute("data-username");

  if (isLoggedIn) {
    loginLink.textContent = username;
    loginLink.href = "user_profile.html";
  } else {
    loginLink.textContent = "Login";
    loginLink.href = "_login.html";
  }
}
updateLoginLink();
