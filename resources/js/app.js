import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";
import Swal from "sweetalert2";
import $ from "jquery";
window.$ = $;
window.jQuery = $;

window.Alpine = Alpine;
window.Swal = Swal;

// Konfigurasi Toast
window.Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

Alpine.start();
