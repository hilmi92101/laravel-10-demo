<template>     
    <Layout>   
        <h1>This is the Demo Landing Page</h1><br>   
    </Layout>   
       
</template>     
<script setup>      
    import Layout from '@/Layouts/Broadcasting.vue';   
    import { ref, onMounted } from 'vue'; 

    import echo from "@/pusher.js";

    const onload = () => { 
        echo.channel('demo-message')
        .listen('.demo-message-event', (e) => {
            console.log(e);
        }).error((error) => {
            console.error(error);
        });
    }

    onMounted(() => { 
        onload()
    });
       
</script>