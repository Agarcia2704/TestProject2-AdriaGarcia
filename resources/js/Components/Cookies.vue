<template>
    <div v-if="!accepted" class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4">
      <p>Aquest lloc web utilitza cookies per millorar l'experiència de l'usuari. En continuar utilitzant aquest lloc, accepteu l'ús de cookies.</p>
      <button @click="accept" class="ml-2 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Acceptar</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        accepted: false
      };
    },
    methods: {
      accept() {
        // Guardar el estado de aceptación de cookies en localStorage
        localStorage.setItem('cookie_accepted', true);
        this.accepted = true;
      }
    },
    mounted() {
      // Verificar si se ha aceptado previamente
      if (localStorage.getItem('cookie_accepted')) {
        this.accepted = true;
      }
    }
  };
  </script>
  