import Vue from 'vue';
import commonComponents from './components';

commonComponents.forEach(component => {
    Vue.component(component.name, component);
});

const app = new Vue({el: '#app',});
