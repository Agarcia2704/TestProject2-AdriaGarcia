<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { usePage } from '@inertiajs/inertia-vue3';


</script>

<template>
    <AuthenticatedLayout>
      <template #header>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">CRUD Cursos</h2>
      </template>
  
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
              <!-- Botón de Crear -->
              <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                Crear Contingut
              </a>
  
              <!-- Tabla de Información -->
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Titol
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Contingut
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Visibilitat
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Acciones
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
    <!-- Iteración de la Información -->
    <tr v-for="contingut in continguts" :key="contingut.id">
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{ contingut.titol }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{ contingut.contingut }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{ contingut.visibilitat }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Editar</a>
        <a :href="`/eliminar-curso/${contingut.id}`" class="text-red-600 hover:text-red-900">Eliminar</a>
    </td>
</tr>


</tbody>

              </table>
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  </template>

<script>
export default {
  props: {
    contingut: {
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
