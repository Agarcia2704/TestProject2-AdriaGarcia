<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
</script>
<template>
  <AuthenticatedLayout>
    <div class="p-4">
      <h1 class="text-2xl font-bold mb-4">Llistat de cursos</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div v-for="info in informacion" :key="info.id" class="bg-white shadow-md rounded-md p-4">
          <h2 class="text-lg font-semibold">{{ info.nom }}</h2>
          <p class="text-gray-600 mt-2">{{ info.descripcio }}</p>
          <p class="text-gray-500 mt-2">{{ info.etapa }}</p>
          <!-- Botón desplegable -->
          <div class="mt-4">
            <button @click="toggleDropdown(info.id)" class="text-blue-600 font-semibold focus:outline-none">
              Continguts
            </button>
            <div v-if="showDropdown === info.id" class="mt-2 bg-gray-100 p-2 rounded-md">
              <!-- Contenido adicional aquí -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<script>
export default {
  props: {
    informacion: {
      type: Array,
      required: true,
    },
  },
  data() {
    return {
      showDropdown: null,
    };
  },
  methods: {
    toggleDropdown(id) {
      if (this.showDropdown === id) {
        this.showDropdown = null;
      } else {
        this.showDropdown = id;
      }
    },
  },
};
</script>
