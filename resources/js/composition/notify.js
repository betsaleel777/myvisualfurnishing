import AWN from "awesome-notifications"

export function notifier(variant, message) {
    const options = {
        position: "bottom-left",
        maxNotifications: 4,
    }
    let notifier = new AWN(options)
    if (variant === "success") {
        notifier.success(message)
    } else if (variant === "danger") {
        notifier.alert(message)
    } else if (variant === "warning") {
        notifier.warning(message)
    } else if (variant === "info") {
        notifier.info(message)
    } else {
        notifier.tip(message)
    }
}
