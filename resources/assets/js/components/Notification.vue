<template>


</template>

<script>
    export default {

        props:['unreads','userId'],
        mounted() {

            Echo.join(`chat`)
    .here((users) => {
        console.log(users);
        //
    })
    .joining((user) => {
        console.log(user.name);
    })
    .leaving((user) => {
        console.log(user.name);



        /*Echo.private('App.User'+ this.userId)
        .notification((notification) =>{
            console.log(notification);
        })*/
    });
            
        }
    }
</script>
