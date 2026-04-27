import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3'
import { createApp, h } from 'vue'
import DefaultLayout from '@/layouts/default.vue'
import ClientOnly from '@/components/ClientOnly.vue'
import NuxtLink from '@/components/NuxtLink.vue'
import { createHead } from '@vueuse/head'

const head = createHead()

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./pages/**/*.vue', { eager: true });
        const page = pages[`./pages/${name}.vue`];
        page.default.layout = page.default.layout || DefaultLayout;
        return page;
    },

    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(head)
            .component('ClientOnly', ClientOnly)
            .component('NuxtLink', NuxtLink);

        // SSR safe check
        if (el) {
            app.mount(el);
        }

        return app;
    }
});
