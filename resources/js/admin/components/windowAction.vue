<script setup>
import windowActionMenu from './windowActionMenu.vue'
import windowActionContent from './windowActionContent.vue'
import { ref } from 'vue'
defineProps([
    'name',
    'id',
])

</script>

<template>

    <windowActionMenu
        :name="name"
        :id="id"
    />
    <slot>
        <windowActionContent
        />
    </slot>
</template>

<style scoped>

</style>
