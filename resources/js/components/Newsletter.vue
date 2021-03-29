<template>
	<div>
		<div class="input-group input-group-overlay flex-nowrap">
			<div class="input-group-prepend-overlay">
				<span class="input-group-text text-muted"><i class="fe-mail"></i></span>
			</div>
			<input class="form-control prepended-form-control" type="email" v-model="email" />
			<div class="input-group-append">
				<button @click="sendMail" class="btn btn-primary" type="button" name="subscribe">
					Souscrire*
				</button>
			</div>
		</div>
	</div>
</template>

<script>
import { ref } from "@vue/composition-api"
import { useAddNewsletter } from "../composition/addNewsletter"
export default {
	setup(props) {
		let email = ref("")
		const { courriel, sendMail } = useAddNewsletter(email)
		return {
			email: courriel,
			sendMail,
		}
	},
}
</script>

<style></style>
