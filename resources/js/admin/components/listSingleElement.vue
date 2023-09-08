<script setup>
import { ref } from 'vue';
defineProps([
   'id',
   'name',
   'url',
]);
</script>

<template>
<div class="lists-single-element p-2  shadow-sm px-4">
    <div>
        <a
            href="{{ url }}/{{ id }}"
            class="fs-4 text-dark"
        >
            #{{ id }}
            {{ name }}
        </a>
    </div>
    <div>
        <a href="{{ url }}" class="text-dark fs-5 customBorder pe-2">Wyświetl</a>
        <a href="{{ url }}" class="text-dark fs-5 mx-2 pe-2 customBorder">Edytuj</a>
        <a href="{{ url }}" class="text-dark fs-5">Usuń</a>
    </div>
</div>
</template>

<style scoped>
a {
    text-decoration: none;
}
</style>
