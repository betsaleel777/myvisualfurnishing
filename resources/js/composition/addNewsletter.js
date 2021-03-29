import { ref } from "@vue/composition-api"
import AWN from "awesome-notifications"

export function useAddNewsletter(email) {
    let courriel = ref(email)
    const options = {
        position: "bottom-left",
        maxNotifications: 5,
    }
    let notifier = new AWN(options)
    const sendMail = async function () {
        await axios.post("/frontal/newsletter/store", { email: courriel.value }).then(result => {
            notifier.success(result.data.message)
            courriel.value = ""
        }).catch(err => {
            const message = err.response.data.errors.email[0]
            notifier.alert(message)
        })
    }
    return {
        courriel,
        sendMail
    }
}
