<template>
  <slot v-if="mounted" />
</template>

<script lang="ts" setup>
import { onMounted, ref } from 'vue';

const mounted = ref(false);

onMounted(() => {
  mounted.value = true;
});
</script>
