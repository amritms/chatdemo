<template lang="html">
  <div class="chat-composer">
  <input type="text" placeholder="Start typing your message..." v-model="messageText" v-on:keyup.enter="sendMessage">
  <button class="btn btn-primary" @click="sendMessage">Submit</button>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        messageText: ''
      }
    },
    methods: {
      sendMessage() {
        this.$emit('messageSent', {
          message: this.messageText,
          author: "Amrit"
        })
        console.log(this.messageText)
        this.messageText = ''
      }
    }
  }
</script>

<style lang="css">
  .chat-composer{
    display: flex;
  }

  .chat-composer input {
    flex: 1 auto;
  }

  .chat-composer button {
     border-radius: 0;
  }
</style>
