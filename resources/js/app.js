/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import VueSweetAlert2 from 'vue-sweetalert2';


require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Agregamos los componentes
Vue.use(VueSweetAlert2);
Vue.component('formato-fecha', require('./components/FormatoFecha.vue').default);
Vue.component('alerta-mensaje', require('./components/AlertaMensaje.vue').default);
Vue.component('eliminar-requisicion', require('./components/EliminarRequisicion.vue').default);
Vue.component('alerta-confirm', require('./components/AlertaConfirm.vue').default);

console.log(Vue);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
