// Material Design Interactions

document.addEventListener("DOMContentLoaded", function () {
  // Add placeholder attribute to inputs for better label animation
  const inputs = document.querySelectorAll(".input-field input");
  inputs.forEach((input) => {
    input.setAttribute("placeholder", " ");

    // When input gets focus, add active class to parent for styling
    input.addEventListener("focus", function () {
      this.parentElement.classList.add("active");
    });

    // When input loses focus, check if it's empty
    input.addEventListener("blur", function () {
      if (this.value === "") {
        this.parentElement.classList.remove("active");
      }
    });

    // Check on page load if inputs already have values (e.g. after form submission)
    if (input.value !== "") {
      input.parentElement.classList.add("active");
    }
  });

  // Ripple effect for buttons
  const buttons = document.querySelectorAll(".btn");
  buttons.forEach((button) => {
    button.addEventListener("mousedown", function (e) {
      const rect = button.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;

      const ripple = document.createElement("span");
      ripple.classList.add("ripple");
      ripple.style.left = `${x}px`;
      ripple.style.top = `${y}px`;

      button.appendChild(ripple);

      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });
});
