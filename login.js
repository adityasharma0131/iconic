const wrapper = document.querySelector(".wrapper1"),
signupHeader = document.querySelector(".signup1 .heading"),
loginHeader = document.querySelector(".login1 .heading");

loginHeader.addEventListener("click", () => {
  wrapper.classList.add("active");
});
signupHeader.addEventListener("click", () => {
  wrapper.classList.remove("active");
});



$(function() {
  setTimeout(function() { $(".error-msg").fadeOut(1500); }, 5000)
  
  })