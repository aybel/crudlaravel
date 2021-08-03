<template>
  <div>{{ alerta}}</div>
</template>

<script>
export default {
  props: ["mensaje","clase"],
  mounted() {
    //console.log(this.fecha);
  },
  computed: {
    alerta() {
      return Swal.fire({
        position: "top-end",
        icon: this.clase,
        title: this.mensaje,
        showConfirmButton: false,
        timer: 1500,
      });
    },
  },
};
</script>