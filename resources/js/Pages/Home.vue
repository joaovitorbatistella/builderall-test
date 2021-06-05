<template>
  <layout>
    <div>
      Olá {{ user }} você está na Home
    </div>

    <div v-if="props.flash.success">
      {{ $page.flash.success }}
    </div>

  </layout>
</template>

<script>
import Layout from '../Layout.vue';
export default {
  components: {
    Layout
  },
    props: {
      user: String,
    }
  };
</script>

<style>

</style>