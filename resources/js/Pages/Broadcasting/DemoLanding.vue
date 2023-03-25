<template>     
    <Layout>   
        <h1>This is the Demo Landing Page</h1><br>   
    </Layout>   
       
</template>     
<script setup>      
    import Layout from '@/Layouts/Broadcasting.vue';   
    import { ref, onMounted } from 'vue'; 

    import { EchoObj, CheckStatus, DemoMessage } from "@/Pusher/index.js";

    onMounted(() => { 
        //CheckStatus(EchoObj);
        DemoMessage(EchoObj)
    });
       
</script>