<template>
  <div>
    <input
      type="submit"
      class="btn btn-danger d-block w-100 mb-2"
      value="Cancelar x"
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
      this.$swal
        .fire({
          title: this.title,
          text: this.msj,
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Si",
        })
        .then((result) => {
          if (result.isConfirmed) {
            const params = {
              id: this.requisicionId,
            };
            axios
              .post(`/requisciones/{requisicion}`, {
                params,
                _method: "delete",
              })
              .then((respuesta) => {
                this.$swal.fire(
                  "Cancelado",
                  "La requisición ha sido cancelada",
                  "success"
                );
                //Elimina del DOM
                console.log(this.$el);
                this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
              })
              .catch((error) => {
                console.log(error);
              });
          }
        });
    },
  },
};
</script>