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
        if (fileInput.files.length == 1) {
            fileInput.addEventListener("change", function () {
                fileNameDisplay.textContent = fileInput.files[0].name;
            });
        } else {
            fileInput.addEventListener("change", function () {
                fileNameDisplay.textContent =
                    this.files.length + " archivo/s seleccionados";
            });
        }
    }
    const successMessage = document
        .querySelector('meta[name="success-message"]')
        .getAttribute("content");
    const errorMessage = document
        .querySelector('meta[name="error-message"]')
        .getAttribute("content");

    if (successMessage) {
        swal.fire({
            title: "Éxito",
            text: successMessage,
            icon: "success",
            confirmButtonText: "OK",
        });
    }

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
            e.preventDefault();
            const form = this.form;
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
                    form.submit();
                }
            });
        });
    });
    var cardsImagenes = document.querySelectorAll(".card-imagen");

    cardsImagenes.forEach(function (card) {
        card.addEventListener("click", function (event) {
            var checkbox = this.querySelector('input[type="checkbox"]');
            var target = event.target;
            if (target.tagName !== "INPUT") {
                checkbox.checked = !checkbox.checked;
            }
        });
    });
});
