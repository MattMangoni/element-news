<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { computed } from "vue";

const props = defineProps({ href: String, active: Boolean })

const classes = computed(() => props.active
    ? 'block px-4 py-3 rounded-md text-sm text-white font-medium leading-5 bg-gray-900 focus:outline-none transition duration-500 ease-in-out'
    : 'block px-4 py-3 rounded-md text-sm text-gray-300 hover:text-white font-medium leading-5 hover:bg-gray-700 focus:outline-none transition duration-500 ease-in-out'
)
</script>
