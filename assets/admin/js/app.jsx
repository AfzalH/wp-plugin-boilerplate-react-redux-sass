import React from 'react';
import ReactDOM from 'react-dom';
import Test from './containers/Test';
import store from './store';
import {Provider} from 'react-redux';

const render = () => {
    ReactDOM.render(
        <Provider store={store}>
            <Test />
        </Provider>
        ,
        document.getElementById('srizon-instagram-admin')
    );
};

window.axios = require('axios');

if(wpApiSettings) {
    window.axios.defaults.headers.common['X-WP-Nonce'] = wpApiSettings.nonce;
}

store.subscribe(render);
render();
