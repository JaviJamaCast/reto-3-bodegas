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
    const lang = document.documentElement.lang;
    const swalConfigs = {
        en: {
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "Cancel",
            successTitle: "Success!",
            errorTitle: "Error",
            confirmButtonText: "OK",
        },
        es: {
            title: "¿Estás seguro?",
            text: "¡No podrás revertir esto!",
            confirmButtonText: "Sí, eliminar",
            cancelButtonText: "Cancelar",
            successTitle: "¡Éxito!",
            errorTitle: "Error",
            confirmButtonText: "OK",
        },
        eu: {
            title: "Ziur zaude?",
            text: "Ezinezkoa izango da hau desegin!",
            confirmButtonText: "Bai, ezabatu",
            cancelButtonText: "Ezeztatu",
            successTitle: "Arrakasta!",
            errorTitle: "Errorea",
            confirmButtonText: "Ados",
        },
    };
    const swalConfig = swalConfigs[lang] || swalConfigs["en"];
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
            title: swalConfig.successTitle,
            text: successMessage,
            icon: "success",
            confirmButtonText: swalConfig.confirmButtonText,
        });
    }

    if (errorMessage) {
        swal.fire({
            title: swalConfig.errorTitle,
            text: errorMessage,
            icon: "error",
            confirmButtonText: swalConfig.confirmButtonText,
        });
    }

    const deleteButtons = document.querySelectorAll(".delete-button");
    deleteButtons.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const form = this.form;
            swal.fire({
                title: swalConfig.title,
                text: swalConfig.text,
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: swalConfig.confirmButtonText,
                cancelButtonText: swalConfig.cancelButtonText,
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

    document
        .getElementById("generarCodigo")
        .addEventListener("click", function () {
            var codigo = Math.floor(100000 + Math.random() * 900000).toString();
            document.getElementById("codigo_acceso").value = codigo;
        });
});
