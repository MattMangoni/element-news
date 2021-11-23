<template>
    <nav-link :href="route('latest-episode')" :active="$page.component === 'Episodes/LatestEpisode'">
        Ultimo Episodio
    </nav-link>
    <nav-link href="#">Staff</nav-link>
    <nav-link href="#">Linee Guida</nav-link>
</template>

<script setup>
    import NavLink from '@/Components/Breeze/NavLink'
</script>
