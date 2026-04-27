import './bootstrap';
import '../css/app.css';

import { createInertiaApp } from '@inertiajs/vue3'
import { createApp, h } from 'vue'
import { createHead } from '@vueuse/head'

const head = createHead()

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./pages/**/*.vue', { eager: true });
        const page = pages[`./pages/${name}.vue`];
        // page.default.layout = page.default.layout || DefaultLayout;
        return page;
    },

    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(head);

        // SSR safe check
        if (el) {
            app.mount(el);
        }

        return app;
    }
});
