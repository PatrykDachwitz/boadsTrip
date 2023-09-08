<script setup>
import { ref } from 'vue'
import listSingleElement from "./listSingleElement.vue";
import windowAction from "./windowAction.vue";
const listsValue = ref([]);
const url = ref("/test/")
for (let i = 0; i < 10; i++) {
    listsValue.value.push({
        "id": i,
        "name": `test${i}`
    })
}

</script>

<template>
    <window-action
        name="Lista"
    >
        <div class="overflow-y-scroll lists">
            <listSingleElement
                v-for="(element, index) in listsValue"
                :key="index"
                :name="element.name"
                :id="element.id"
                :url="url"
            />
        </div>
    </window-action>
</template>

<style scoped>
div.lists {
    flex: 1;
}
</style>
