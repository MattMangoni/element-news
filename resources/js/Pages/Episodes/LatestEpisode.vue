<script setup>
    const props = defineProps({
        episode: Object
    })

    //
</script>

<template>
    <div>
        <h1>Latest Episode</h1>
        {{ props.episode }}
    </div>
</template>
