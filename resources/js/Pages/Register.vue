<template>
  <layout>
    <div style="margin-top: 30px">
      <div v-for="(erro, index) in errors " :key="index" style="border:1px solid red; margin-bottom: 10px">
        {{ erro }}
      </div>
      <form @submit.prevent="handleForm">
        <input type="text" placeholder="Seu nome" v-model="form.name">

        <input type="email" placeholder="Seu email" v-model="form.email">

        <input type="password" placeholder="Sua senha" v-model="form.password">

        <button type="submit">Cadastrar</button>
      </form>
    </div>
  </layout>
</template>

<script>
import Layout from '../Layout.vue';
export default {
  components: { Layout },
  props: {
    errors: Object,
  },
  data: () => {
    return {
      form: {
        name: null,
        email: null,
        password: null,
      }
    }
  },
  methods: {
    handleForm() {
      this.$inertia.post('/register', this.form);
    }
  }
};
</script>

<style>

</style>