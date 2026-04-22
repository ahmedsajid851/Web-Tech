// script.js
console.log("Script connected ✅");

function showError(id, message) {
  const el = document.getElementById(id);
  if (el) {
    el.textContent = message;
    el.style.display = message ? "block" : "none";
  }
}

function clearErrors() {
  showError("emailErr", "");
  showError("passwordErr", "");
}

function showSuccessPopup() {
  const popup = document.getElementById("success-popup");
  if (popup) {
    popup.style.display = "flex";
  }
}

function closePopup() {
  const popup = document.getElementById("success-popup");
  if (popup) {
    popup.style.display = "none";
  }
}

function collectData() {
  const email = document.getElementById("email")?.value.trim() || "";
  const password = document.getElementById("password")?.value.trim() || "";

  clearErrors();

  let isValid = true;

  if (!email) {
    showError("emailErr", "Email is required");
    isValid = false;
  }

  if (!password) {
    showError("passwordErr", "Password is required");
    isValid = false;
  }

  console.log("Submit → valid:", isValid, "| email:", email || "[empty]", "| password:", password ? "•••" : "[empty]");

  if (isValid) {
    showSuccessPopup();
    // Optional: clear fields after success
    // document.getElementById("email").value = "";
    // document.getElementById("password").value = "";
  }
}

// Live validation (optional but improves UX)
function validateEmail() {
  const email = document.getElementById("email")?.value.trim() || "";
  showError("emailErr", email ? "" : "Email is required");
}

function validatePassword() {
  const password = document.getElementById("password")?.value.trim() || "";
  showError("passwordErr", password ? "" : "Password is required");
}

// ────────────────────────────────────────────────

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("loginForm");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");

  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      collectData();
    });
  }

  if (emailInput) {
    emailInput.addEventListener("input", validateEmail);
  }

  if (passwordInput) {
    passwordInput.addEventListener("input", validatePassword);
  }

  // Popup close handlers
  const closeBtn = document.querySelector(".close-btn");
  const okBtn = document.getElementById("close-popup-btn");
  const popup = document.getElementById("success-popup");

  if (closeBtn) closeBtn.addEventListener("click", closePopup);
  if (okBtn) okBtn.addEventListener("click", closePopup);
  if (popup) {
    popup.addEventListener("click", (e) => {
      if (e.target === popup) closePopup();
    });
  }
});