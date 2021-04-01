window.swal = require("sweetalert2");

function firemsgSuccess(message) {
    swal.fire({
        title: message,
        icon: "success",
    });
}
window.firemsgSuccess = firemsgSuccess;

const Toast = swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", swal.stopTimer);
        toast.addEventListener("mouseleave", swal.resumeTimer);
    },
});
window.Toast = Toast;

function confirmAction(toemit, key) {
    swal.fire({
        title: "¡Confirma!",
        text: "¿Deseas eliminar el elemento?",
        position: "top-end",
        width: "20%",
        padding: ".7rem",
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Sí",
        cancelButtonText: "No",
        customClass: {
            header:
                "text-base items-start pl-2 text-left font-semibold text-gray-700",
            content: "text-xs pl-2 text-gray-500",
            confirmButton:
                "btn w-2/5 text-xs text-white bg-green-400 font-medium shadow-lg rounded-lg px-4 py-3 mr-4",
            cancelButton:
                "btn w-2/5 text-sm text-white bg-red-400 font-medium shadow-lg rounded-lg px-4 py-3",
        },
    }).then((result) => {
        if (result.isConfirmed) {
            console.log(toemit);
            console.log(key);
            Livewire.emit(toemit, key);            
        }
    });
}
window.confirmAction = confirmAction;
