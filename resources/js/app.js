import Vue from "vue";

import ContactForm from './components/ContactForm';

const app = new Vue({
  el: "#vue",

  render: createElement => createElement(ContactForm),
});

const btn = document.getElementById("nav_btn");
const links = document.getElementById("nav_links");
btn.addEventListener("click", function() {
  console.log('clicked');
  links.classList.toggle("hidden");
});
