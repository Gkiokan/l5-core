
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap-sass');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.baseURL = location.origin;

import swal from 'sweetalert'
import Interceptors from './inc/Interceptors.js'

/*
    Response Interceptor
*/
window.axios.interceptors.response.use(
    Interceptors.response.cb_success,
    Interceptors.response.cb_error
);


/*
    Requesting Interceptor
*/
window.axios.interceptors.request.use(
    Interceptors.request.cb_success,
    Interceptors.request.cb_error
);


/*
    Setup the X-CSRF-TOKEN
*/
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token)
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
else
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');


/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

// Requre Utility Stuff
require('./inc/Utility.js')

window.Vue = require('vue')
