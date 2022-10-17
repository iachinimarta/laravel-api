import Vue from 'vue';
import App from './views/App';
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = new Vue ({
    el: '#root',
    render: h => h (App)
});