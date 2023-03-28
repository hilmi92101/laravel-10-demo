<template>     
    <Layout>   
        <h1>This is the Demo Landing Page</h1><br>   
    </Layout>   
       
</template>     
<script setup>      
    import Layout from '@/Layouts/Broadcasting.vue';   
    import { ref, onMounted } from 'vue'; 

    import { EchoObj, CheckStatus, DemoMessage, GetVisitorToken, EchoObjPresence } from "@/Pusher/index.js";

    onMounted(() => { 
        //CheckStatus(EchoObj);
        //DemoMessage(EchoObj)

        GetVisitorToken().then((result) => {
            let token = result;
            localStorage.setItem('visitorToken', token);

            //EchoObjPresence.join(`presence-visitors-counter`)
            EchoObjPresence.join(`visitors-counter`)
                .here((users) => {
                    console.log('Here', users);
                })
                .joining((user) => {
                    console.log('Joining', user);
                })
                .leaving((user) => {
                    console.log('Leaving', user);
                })
                // .listen('.presence-visitors-counter-event', (e) => {
                //     console.log(e);
                // })
                .error((error) => {
                    console.error(error);
                });



        }).catch((error) => {
        });


    });
       
</script>