<template> </template>

<script>
export default {
  name: "notifications-user",
  props: {
    message: String,
    variant: String
  },
  mounted() {
    console.log("monter");
    this.notificationCall();
  },
  methods: {
    notificationCall() {
      if (this.variant === "success") {
        this.$awn.success(this.message);
      } else if (this.variant === "danger") {
        this.$awn.alert(this.message);
      } else if (this.variant === "warning") {
        this.$awn.warning(this.message);
      } else if (this.variant === "info") {
        this.$awn.info(this.message);
      }
    }
  }
};
</script>

<style scoped>
@import "~vue-awesome-notifications/dist/styles/style.css";
</style>
