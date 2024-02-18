import "./bootstrap";
import * as bootstrap from "bootstrap";
import jQuery from "jquery";
window.$ = jQuery;

import swal from "sweetalert2";
window.Swal = swal;

document.addEventListener("DOMContentLoaded", function () {
    var toggleFiltersButton = document.getElementById("toggleFiltersButton");
    var fileInput = document.getElementById("fileUpload");
    var fileNameDisplay = document.getElementById("fileName");

    if (toggleFiltersButton) {
        toggleFiltersButton.addEventListener("click", function () {
            var filtersModal = new bootstrap.Modal(
                document.getElementById("filtersModal")
            );
            filtersModal.show();
        });
    }

    if (fileInput) {
        fileInput.addEventListener("change", function () {
            if (fileInput.files.length > 0) {
                fileNameDisplay.textContent = fileInput.files[0].name;
            }
        });
    }

    const successMessage = document
        .querySelector('meta[name="success-message"]')
        .getAttribute("content");
    const errorMessage = document
        .querySelector('meta[name="error-message"]')
        .getAttribute("content");

    // Mostrar SweetAlert para éxito
    if (successMessage) {
        swal.fire({
            title: "Éxito",
            text: successMessage,
            icon: "success",
            confirmButtonText: "OK",
        });
    }

    // Mostrar SweetAlert para error
    if (errorMessage) {
        swal.fire({
            title: "Error",
            text: errorMessage,
            icon: "error",
            confirmButtonText: "OK",
        });
    }

    const deleteButtons = document.querySelectorAll(".delete-button");
    deleteButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault(); // Prevenir la acción por defecto del botón
            const form = this.form; // Suponiendo que cada botón está dentro de un formulario específico
            swal.fire({
                title: "¿Estás seguro?",
                text: "No podrás revertir esto!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminar!",
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit the form associated with this button
                }
            });
        });
    });
});
