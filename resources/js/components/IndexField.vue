<template>
  <span v-if="field.visible" class="block text-center">
    <a v-bind="field.attributes" :href="field.url" :class="field.classes">
      {{ field.linkText }}
    </a>
  </span>
</template>

<script>
export default {
  props: ["resourceName", "field"]
};
</script>
