<template>
  <div>
    <input
      type="submit"
      class="btn btn-danger d-block w-100 mb-2"
      value="Eliminar x"
      @click="eliminarRequisicion"
    />
  </div>
</template>

<script>
export default {
  props: ["requisicionId", "titulo", "msj"],
  mounted() {
    //console.log(this.requisicionId);
  },
  methods: {
    eliminarRequisicion() {
      this.$swal({
        title: this.titulo,
        text: this.msj,
        icon: "warning",
      });
    },
  },
};
</script>