<template lang="html">
  <div class="chat-log">
  <chat-message v-for="message in messages" :message="message"></chat-message>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        messages: [
        {
          message: 'Hey!',
          user: 'John'
        },
        {
          message: 'Hello!',
          user: 'Jane'
          }
      ]
      }
    }
  }
</script>

<style lang="css">
</style>
