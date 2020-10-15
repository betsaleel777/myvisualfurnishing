<template>
    <div>
        <div class="input-group input-group-overlay flex-nowrap">
            <div class="input-group-prepend-overlay">
                <span class="input-group-text text-muted"
                    ><i class="fe-mail"></i
                ></span>
            </div>
            <input
                class="form-control prepended-form-control"
                type="email"
                v-model="email"
            />
            <div class="input-group-append">
                <button
                    @click="sendMail"
                    class="btn btn-primary"
                    type="button"
                    name="subscribe"
                >
                    Souscrire*
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "newsletter-field",
    data() {
        return {
            message: "",
            email: ""
        };
    },
    methods: {
        sendMail() {
            axios
                .post("/frontal/newsletter/store", { email: this.email })
                .then(result => {
                    this.$awn.success(result.data.message);
                    this.email = "";
                })
                .catch(err => {
                    this.message = err.response.data.errors.email[0];
                    this.$awn.alert(this.message);
                });
        }
    }
};
</script>

<style></style>
