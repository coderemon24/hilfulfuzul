<template>
    <div class="p-2">
        
        <div class="hadith-card bg-white p-4 rounded-lg shadow-md
        border
        border-gray-100
        relative
        overflow-hidden
        ">
        
        <h5 class="
        absolute
        top-2
        -left-5
        bg-green-700
        text-white
        px-2
        py-1
        text-[10px]        transform
        rotate-[-45deg]
        "
        style="z-index: 0;"
        >আজকের হাদিস...</h5>
        
        <div style="z-index: 1;" class="text-md pl-2 font-medium text-gray-800 mb-2">{{ props.text }}</div>
        <div class="text-sm text-gray-600 italic">~ {{ reference }}</div>
    </div>
    </div>
</template>

<script lang="ts" setup>
const props = defineProps({
    text: {
        type: String,
        required: true
    },
    reference: {
        type: String,
        required: true
    }
})
</script>

<style scoped>
.hadith-card {
    min-height: 120px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
</style>