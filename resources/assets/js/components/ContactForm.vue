<template>
  <div v-if="done" class="subheading text-center py-8">
    Vielen Dank für Ihre Nachricht! Wir melden uns in Kürze.
  </div>
  <form v-else action="/contact" method="POST" class="flex flex-col w-full">
    <div class="form-group">
        <input
          v-model="name"
          @input="clearError('name')"
          placeholder="Ihr Name"
          type="text"
          class="form-input"
          :class="{
            'border-red': errors['name']
          }"
          required
        >
        <div v-if="errors['name']" class="form-error">{{ errors['name'][0] }}</div>
    </div>
    <div class="form-group">
        <input
          v-model="email"
          @input="clearError('email')"
          placeholder="Ihre E-Mail-Adressse"
          type="email"
          class="form-input"
          :class="{
            'border-red': errors['email']
          }"
          required
        >
        <div v-if="errors['email']" class="form-error">{{ errors['email'][0] }}</div>
    </div>
    <div class="form-group">
      <textarea
        v-model="message"
        @input="clearError('message')"
        placeholder="Ihre Idee die Sie mit uns umsetzen möchten"
        class="form-input"
        :class="{
            'border-red': errors['message']
          }"
        rows="10"
        cols="30"
        required
      ></textarea>
      <div v-if="errors['message']" class="form-error">{{ errors['message'][0] }}</div>
    </div>
    <div class="flex justify-end">
      <button
        @click="sendMail"
        class="btn"
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
