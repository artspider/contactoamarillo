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

function confirmAction(action) {
    swal.fire({
        title: "¡Confirma!",
        text: "¿Deseas eliminar el elemento?",
        position: "top-end",
        width: 270,
        showCancelButton: true,
        buttonsStyling: false,
        confirmButtonText: "Sí",
        cancelButtonText: "No",
        customClass: {
            confirmButton:
                "btn text-sm text-white bg-green-500 font-medium shadow-lg rounded-lg px-4 py-3 mr-4",

            cancelButton:
                "btn text-sm text-white bg-red-500 font-medium shadow-lg rounded-lg px-4 py-3",
        },
    }).then((result) => {
        if (result.isConfirmed) {
            console.log(action);
            Livewire.emit("eliminarcarrera", action);
            Toast.fire({
                title: "Elemento eliminado",
                icon: "success",
            });
        }
    });
}
window.confirmAction = confirmAction;
