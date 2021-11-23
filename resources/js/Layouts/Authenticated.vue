<template>
    <div class="min-h-screen bg-gray-100">
        <nav class="bg-gray-800">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 mr-10">
                            <h1 class="text-xl text-white font-black">Element News Project</h1>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <svg @click="toggleMenu()" class="block h-6 w-6" :class="menuOpen ? 'hidden' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            <svg @click="menuOpen = !menuOpen" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" :class="! menuOpen ? 'hidden' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="hidden md:flex items-baseline space-x-4">
                        <inertia-link href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                            Ultimo Episodio
                        </inertia-link>

                        <inertia-link href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Staff</inertia-link>

                        <inertia-link href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Linee Guida</inertia-link>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" :class="! menuOpen ? 'hidden' : ''" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <inertia-link :href="route('latest-episode')" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">
                        Ultimo Episodio
                    </inertia-link>
                    <inertia-link href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Staff</inertia-link>
                    <inertia-link href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Linee Guida</inertia-link>
                </div>
            </div>
        </nav>
        <slot />
    </div>
</template>

<script setup>
import { ref } from "vue";
import { InertiaLink } from "@inertiajs/inertia-vue3";

let menuOpen = ref(false)

function toggleMenu() {
    menuOpen.value = !menuOpen.value
}
</script>
