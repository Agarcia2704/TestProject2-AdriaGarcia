<template>
    <div v-if="abierto" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
  
        <!-- Contenido del modal -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Crear Curso</h3>
                <div class="mt-2">
                  <!-- Formulario para Crear Curso -->
                  <form @submit.prevent="crearCurso">
                    <div class="mb-4">
                      <label for="nom" class="block text-sm font-medium text-gray-700">Nombre</label>
                      <input v-model="nuevoCurso.nom" type="text" id="nom" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                      <label for="etapa" class="block text-sm font-medium text-gray-700">Etapa</label>
                      <input v-model="nuevoCurso.etapa" type="text" id="etapa" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                      <label for="descripcio" class="block text-sm font-medium text-gray-700">Descripción</label>
                      <input v-model="nuevoCurso.descripcio" type="text" id="descripcio" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                      <input v-model="nuevoCurso.visible" type="checkbox" id="visible" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block shadow-sm sm:text-sm border-gray-300 rounded-md">
                      <label for="visible" class="ml-2 block text-sm font-medium text-gray-700">Visible</label>
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Curso</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin del contenido del modal -->
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      abierto: Boolean,
    },
    data() {
      return {
        nuevoCurso: {
          nom: '',
          etapa: '',
          descripcio: '',
          visible: false,
        },
      };
    },
    methods: {
      cerrarModal() {
        this.$emit('cerrar');
      },
      crearCurso() {
        this.$emit('crear', this.nuevoCurso);
      },
    },
  };
  </script>
  