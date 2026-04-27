<template>
  <a v-if="shouldRenderAnchor" :href="resolvedHref" v-bind="$attrs">
    <slot />
  </a>

  <Link v-else :href="resolvedHref" v-bind="$attrs">
    <slot />
  </Link>
</template>

<script lang="ts" setup>
import { computed, useAttrs } from 'vue';
import { Link } from '@inertiajs/vue3';

defineOptions({
  inheritAttrs: false,
});

const props = defineProps<{
  href?: string;
  to?: string;
}>();

const attrs = useAttrs();

const resolvedHref = computed(() => props.href ?? props.to ?? '#');

const shouldRenderAnchor = computed(() => {
  const href = resolvedHref.value;
  const hasTarget = typeof attrs.target === 'string' && attrs.target.length > 0;

  return hasTarget || href.startsWith('#') || /^(https?:|mailto:|tel:)/.test(href);
});
</script>
