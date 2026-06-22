// LOGIN & REGISTRATION CONTROLLER


// INITIALIZATION
document.addEventListener("DOMContentLoaded", () => {
  initPasswordStrength();

  // Read URL parameters to switch to the appropriate tab on load
  const urlParams = new URLSearchParams(window.location.search);
  const tab = urlParams.get("tab");
  if (tab === "register") {
    switchAuthTab("register");
  } else {
    switchAuthTab("login");
  }
});

// 1. DYNAMIC AUTH TAB TOGGLE
window.switchAuthTab = function (tabId, event) {
  if (event) event.preventDefault();

  // Hide alert
  const alertEl = document.getElementById("authAlert");
  if (alertEl) alertEl.classList.add("d-none");

  // Remove active styling from tab buttons
  document.querySelectorAll(".auth-tab-link").forEach(btn => {
    btn.classList.remove("active");
  });

  // Set active tab button
  if (event && event.target) {
    event.target.classList.add("active");
  } else {
    // Fail-safe selection by type
    const buttons = document.querySelectorAll(".auth-tab-link");
    if (tabId === "login" && buttons[0]) buttons[0].classList.add("active");
    if (tabId === "register" && buttons[1]) buttons[1].classList.add("active");
  }

  // Hide all form panes
  document.querySelectorAll(".auth-form-pane").forEach(pane => {
    pane.classList.remove("active");
  });

  // Show selected form pane
  const targetPane = document.getElementById(`pane-${tabId}`);
  if (targetPane) {
    targetPane.classList.add("active");
  }
};

// 2. TOGGLE PASSWORD VISIBILITY SHOW/HIDE
window.togglePasswordVisibility = function (inputId, buttonEl) {
  const passwordInput = document.getElementById(inputId);
  if (!passwordInput) return;

  const icon = buttonEl.querySelector("i");
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    if (icon) {
      icon.classList.remove("bi-eye-fill");
      icon.classList.add("bi-eye-slash-fill");
    }
  } else {
    passwordInput.type = "password";
    if (icon) {
      icon.classList.remove("bi-eye-slash-fill");
      icon.classList.add("bi-eye-fill");
    }
  }
};

// 3. REAL-TIME PASSWORD STRENGTH INDICATOR
function initPasswordStrength() {
  const passwordInput = document.getElementById("regPassword");
  const strengthBar = document.getElementById("passwordStrengthBar");

  if (!passwordInput || !strengthBar) return;

  passwordInput.addEventListener("input", () => {
    const val = passwordInput.value;
    let score = 0;

    if (val.length === 0) {
      strengthBar.style.width = "0%";
      strengthBar.className = "progress-bar";
      return;
    }

    if (val.length >= 6) score++;
    if (/[A-Z]/.test(val)) score++;
    if (/[0-9]/.test(val)) score++;
    if (/[^A-Za-z0-9]/.test(val)) score++;

    // Translate score to bar style
    if (score <= 1) {
      strengthBar.style.width = "25%";
      strengthBar.className = "progress-bar bg-danger";
    } else if (score === 2) {
      strengthBar.style.width = "50%";
      strengthBar.className = "progress-bar bg-warning";
    } else if (score === 3) {
      strengthBar.style.width = "75%";
      strengthBar.className = "progress-bar bg-info";
    } else {
      strengthBar.style.width = "100%";
      strengthBar.className = "progress-bar bg-success";
    }
  });
}


