<script setup>
import { ref, defineProps, onMounted } from 'vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// Inicializa CKEditor cuando el componente se monta en el DOM
onMounted(() => {
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
});
</script>

<template>
  
      
      <div>
        <h1>Lista de Información</h1>
        <div>
          <ul>
            <div name="content" id="editor">
            <li v-for="info in informacion" :key="info.id">
              {{ info.nombre }} {{ info.apellido }}
            </li>
          </div>
          </ul>
        </div>
      </div>
    
  </template>

  <script>
export default {
  props: {
    informacion: { // Corregido el nombre de la propiedad
      type: Array,
      required: true,
    },
  },
  mounted() {
    console.log(this.informacion);
  }
};
</script>

