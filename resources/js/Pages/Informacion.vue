<script setup>
import Componente from '@/Components/Componente.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';


</script>
<template>
    <AuthenticatedLayout>
  <div>
    <button @click="mostrarInformacion">Mostrar Informacion</button>
    <section v-if="activeSection === 'informacion'">
      <Componente :informacion="informacion" />
    </section>
  </div>
</AuthenticatedLayout>
</template>
<script>
export default {
  components: {
    Componente
  },
  props: {
    informacion: {
      type: Array,
      required: true
    }
  },
  data() {
    return {
      activeSection: null
    };
  },
  methods: {
    mostrarInformacion() {
      this.activeSection = 'informacion';
    }
  }
};
</script>