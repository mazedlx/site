<template>
  <div v-if="done" class="pt-4 text-2xl text-center font-serif">
    Vielen Dank für Ihre Nachricht! Wir melden uns in Kürze.
  </div>
  <form v-else action="/contact" method="POST" class="flex flex-col w-full">
    <div class="flex flex-col py-2">
        <input
          v-model="name"
          @input="clearError('name')"
          placeholder="Ihr Name"
          type="text"
          class="text-xl font-serif w-full border bg-grey-lightest focus:bg-white focus:border-blue-light focus:outline-none p-4"
          :class="{
            'border-red': errors['name']
          }"
          required
        >
        <div v-if="errors['name']" class="text-red pt-2 text-lg">{{ errors['name'][0] }}</div>
    </div>
    <div class="flex flex-col py-2">
        <input
          v-model="email"
          @input="clearError('email')"
          placeholder="Ihre E-Mail-Adressse"
          type="email"
          class="text-xl font-serif w-full border bg-grey-lightest focus:bg-white focus:border-blue-light focus:outline-none p-4"
          :class="{
            'border-red': errors['email']
          }"
          required
        >
        <div v-if="errors['email']" class="text-red pt-2 text-lg">{{ errors['email'][0] }}</div>
    </div>
    <div class="flex flex-col py-2">
      <textarea
        v-model="message"
        @input="clearError('message')"
        placeholder="Ihre Idee die Sie mit uns umsetzen möchten"
        class="text-xl font-serif w-full border bg-grey-lightest focus:bg-white focus:border-blue-light focus:outline-none p-4"
        :class="{
            'border-red': errors['message']
          }"
        rows="10"
        cols="30"
        required
      ></textarea>
      <div v-if="errors['message']" class="text-red pt-2 text-lg">{{ errors['message'][0] }}</div>
    </div>
    <div class="flex justify-end">
      <button
        @click="sendMail"
        class="text-xl text-blue-light font-serif px-4 py-2 border-4 border-blue-light rounded-full hover:bg-blue-light hover:text-white focus:outline-none"
        type="button"
        :disabled="loading"
      >
        Nachricht absenden
      </button>
    </div>
  </form>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      done: false,
      name: "",
      email: "",
      message: "",
      errors: [],
      loading: false,
    };
  },

  methods: {
    clearError: function(key) {
      this.errors[key] = null;
    },

    sendMail: async function() {
      this.loading = true;
      try {
        const response = await axios.post("/contact", {
          name: this.name,
          email: this.email,
          message: this.message,
        });
        this.name = "";
        this.email = "";
        this.message = "";
        this.done = true;
      } catch (error) {
        this.errors = error.response.data.errors;
        this.loading = false;
      }
    },
  },
};
</script>
