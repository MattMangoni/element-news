import Authenticated from "@/Layouts/Authenticated";

require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Element News';

createInertiaApp({
    title: title => `${title} - ${appName}`,
    resolve: name => {
        const page = require(`./Pages/${name}.vue`).default
        page.layout = page.layout || Authenticated

        return page
    },
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
