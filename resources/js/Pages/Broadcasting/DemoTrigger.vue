<template>
  <Layout>
    <h1>This is the Demo Trigger Page</h1>
    <br />

    <button @click.prevent="triggerMessage">Trigger Message</button>
  </Layout>
</template>     
<script setup>
import Layout from "@/Layouts/Broadcasting.vue";
import { ref } from "vue";

import { router } from "@inertiajs/vue3";

const triggerMessage = () => {
    axios
    .post(route('broadcasting.demoTriggerAttempt'))
    .then((response) => {
        console.log(response.data);
    })
    .catch(function (error) {
        // console.log(error.response);
        // console.log(error.response.data);
    });
};

</script>