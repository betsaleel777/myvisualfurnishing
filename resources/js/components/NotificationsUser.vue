<template> </template>

<script>
import { onMounted } from "@vue/composition-api"
import { notifier } from "../composition/notify"
export default {
	props: {
		variant: String,
		message: {
			type: String,
			required: true,
		},
	},
	setup(props) {
		onMounted(() => {
			notifier(props.variant, props.message)
		})
	},
}
</script>

<style scoped>
@import "~vue-awesome-notifications/dist/styles/style.css";
</style>
