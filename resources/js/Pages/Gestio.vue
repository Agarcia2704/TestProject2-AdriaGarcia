<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { usePage } from '@inertiajs/inertia-vue3';

const { $inertia } = usePage();

const eliminarCurso = async (id) => {
    const confirmar = confirm('¿Estás seguro de que deseas eliminar este curso?');
    if (confirmar) {
        try {
            await $inertia.delete(`/ruta-del-controlador/${id}`);
            // Aquí puedes agregar lógica adicional si necesitas actualizar la lista de cursos después de eliminar
        } catch (error) {
            console.error('Error al eliminar el curso:', error);
        }
    }
};
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
                Crear Curs
              </a>
  
              <!-- Tabla de Información -->
              <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Etapa
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                      Descripción
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
    <tr v-for="curso in informacion" :key="curso.id">
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{ curso.nom }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{ curso.etapa }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{ curso.descripcio }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <div class="text-sm text-gray-900">{{ curso.visible }}</div>
        </td>
        <td class="px-6 py-4 whitespace-nowrap">
            <!-- Botones de Acción (Editar y Eliminar) -->
            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Editar</a>
            <a :href="`/eliminar-curso/${curso.id}`" class="text-red-600 hover:text-red-900">Eliminar</a>
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
