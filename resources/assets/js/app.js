import "babel-polyfill";
import Vue from "vue/dist/vue.esm";

import ContactForm from "./components/ContactForm.vue";

const app = new Vue({
  el: "#app",

  components: {
    ContactForm,
  },

  mounted() {
    let btn = document.getElementById("nav_btn");
    let links = document.getElementById("nav_links");
    btn.addEventListener("click", function() {
      links.classList.toggle("hidden");
    });
  },
});
