<template>
  <div
    id="thanks"
    v-if="done"
    class="text-center text-3xl font-serif py-4"
  >
    {{ thankYouMessage }}
  </div>
  <form
    v-else
    action="/contact"
    method="POST"
    class="flex flex-col w-full"
  >
    <div class="flex flex-col py-2">
      <input
        v-model="name"
        @input="clearError('name')"
        :placeholder="placeholders.name"
        type="text"
        class="text-xl font-serif w-full border bg-gray-200 p-4 hover:bg-white hover:border-teal-700"
        :class="{
            'border-red': errors['name']
          }"
        required
      >
      <div
        v-if="errors['name']"
        class="text-red-500 pt-2 text-lg font-serif"
      >{{ errors['name'][0] }}</div>
    </div>
    <div class="flex flex-col py-2">
      <input
        v-model="email"
        @input="clearError('email')"
        :placeholder="placeholders.email"
        type="email"
        class="text-xl font-serif w-full border bg-gray-200 p-4"
        :class="{
            'border-red': errors['email']
          }"
        required
      >
      <div
        v-if="errors['email']"
        class="text-red-500 pt-2 text-lg font-serif"
      >{{ errors['email'][0] }}</div>
    </div>
    <div class="flex flex-col py-2">
      <textarea
        v-model="message"
        @input="clearError('message')"
        :placeholder="placeholders.message"
        class="text-xl font-serif w-full border bg-gray-200 p-4"
        :class="{
            'border-red': errors['message']
          }"
        rows="10"
        cols="30"
        required
      ></textarea>
      <div
        v-if="errors['message']"
        class="text-red-500 pt-2 text-lg font-serif"
      >{{ errors['message'][0] }}</div>
    </div>
    <div class="flex justify-end">
      <button
        @click="sendMail"
        class="text-xl text-teal-700 font-serif px-4 py-2 border-4 border-teal-700 rounded-full hover:bg-teal-700 hover:text-white"
        type="button"
        :disabled="loading"
        v-text="buttonText"
      ></button>
    </div>
    <input
      v-model="spamProtection"
      @input="clearError('email')"
      type="text"
      class="hidden"
    >
  </form>
</template>
<script>
import axios from 'axios';

export default {
  data() {
    return {
      done: false,
      name: '',
      email: '',
      message: '',
      errors: [],
      loading: false,
      thankYouMessage: this.isGerman()
        ? 'Vielen Dank für Ihre Nachricht, wir melden uns in Kürze.'
        : 'Thank you for your message. We\'ll get back at you shortly.',
      placeholders: {
        name: this.isGerman() ? 'Ihr Name' : 'Your name',
        email: this.isGerman() ? 'Ihre E-Mail-Adresse' : 'Your email address',
        message: this.isGerman()
          ? 'Ihre Idee die Sie mit uns umsetzen wollen'
          : 'Your awesome idea that needs realization',
      },
      spamProtection: '',
      buttonText: this.isGerman() ? 'Nachricht absenden' : 'Send message',
    };
  },

  methods: {
    isGerman: function () {
      return window.locale === 'de';
    },

    clearError: function (key) {
      this.errors[key] = null;
    },

    sendMail: async function () {
      this.loading = true;
      try {
        await axios.post('/contact', {
          name: this.name,
          email: this.email,
          message: this.message,
          spam_protection: this.spamProtection,
          locale: window.locale,
        });
        this.name = '';
        this.email = '';
        this.message = '';
        this.done = true;
        document.getElementById('thanks').scrollIntoView();
      } catch (error) {
        this.errors = error.repsonse && error.response.data.errors;
        this.loading = false;
      }
    },
  },
};
</script>
