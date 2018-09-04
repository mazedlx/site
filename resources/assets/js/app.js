import "babel-polyfill";
import Vue from "vue";

const ContactForm = require("./components/ContactForm.vue");

const app = new Vue({
  el: "#vue",

  render: createElement => createElement(ContactForm),
});

let btn = document.getElementById("nav_btn");
let links = document.getElementById("nav_links");
btn.addEventListener("click", function() {
  links.classList.toggle("hidden");
  links.classList.toggle("flex");
  links.classList.toggle("flex-col");
});
