<template>
<v-app>
  <v-main>
    <section>
        <router-view :key="$router.path"></router-view>
      </section>
  </v-main>
</v-app>  
</template>

<script>
  export default {
    name: 'App',
    data: () => ({
      //
    }),
  };
</script>

<style>

</style>
