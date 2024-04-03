import "./bootstrap";
import * as bootstrap from "bootstrap";
import jQuery from "jquery";
window.$ = jQuery;

import swal from "sweetalert2";
window.Swal = swal;

document.addEventListener("DOMContentLoaded", function () {
    var toggleFiltersButton = document.getElementById("toggleFiltersButton");
    var fileInput = document.getElementById("fileUpload");
    var fotoPerfil = document.getElementById("foto_perfil");
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

    if (fotoPerfil) {
        fotoPerfil.addEventListener("change", function () {
            fileNameDisplay.textContent = fotoPerfil.files[0].name;
        });
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

document
    .getElementById("agregar_producto")
    .addEventListener("click", function () {
        const productoId = document.getElementById("producto_id");
        const productoSeleccionado =
            productoId.options[productoId.selectedIndex];
        const precioProducto = parseFloat(
            productoSeleccionado.getAttribute("dataPrecio")
        ); // Asegúrate de tener este atributo en el option
        const productosAgregados = document.getElementById(
            "productos_agregados"
        );

        if (
            document.querySelector(
                `input[name="productos[][id]"][value="${productoSeleccionado.value}"]`
            )
        ) {
            alert("Este producto ya ha sido agregado.");
            return;
        }

        const div = document.createElement("div");
        div.classList.add("mb-3", "d-flex", "align-items-center");
        div.setAttribute("data-precio", precioProducto); // Almacenar precio aquí
        div.id = "producto-" + productoSeleccionado.value;

        // Crear un input para el ID del producto
        const inputId = document.createElement("input");
        inputId.type = "hidden";
        inputId.name = `productos[${productoSeleccionado.value}][id]`;
        inputId.value = productoSeleccionado.value;
        div.appendChild(inputId);

        // Crear etiqueta con el nombre del producto y el precio
        const label = document.createElement("span");
        label.classList.add("me-2");
        label.textContent = `${productoSeleccionado.text} - $${precioProducto}`;
        div.appendChild(label);

        // Crear input para la cantidad
        const inputCantidad = document.createElement("input");
        inputCantidad.type = "number";
        inputCantidad.name = `productos[${productoSeleccionado.value}][cantidad]`;
        inputCantidad.placeholder = "Cantidad";
        inputCantidad.min = 1;
        inputCantidad.required = true;
        inputCantidad.classList.add("form-control", "ms-2");
        inputCantidad.style.width = "auto";
        div.appendChild(inputCantidad);

        // Etiqueta para mostrar el total por producto
        const totalProductoLabel = document.createElement("span");
        totalProductoLabel.classList.add("ms-2");
        totalProductoLabel.textContent = "Total: $0.00";
        div.appendChild(totalProductoLabel);

        // Evento para actualizar el total cuando cambie la cantidad
        inputCantidad.addEventListener("change", function () {
            const cantidad = parseInt(inputCantidad.value) || 0;
            const totalProducto = precioProducto * cantidad;
            totalProductoLabel.textContent = `Total: $${totalProducto.toFixed(
                2
            )}`;
            actualizarTotalPedido();
        });

        // Crear botón de eliminar
        const botonEliminar = document.createElement("button");
        botonEliminar.type = "button";
        botonEliminar.textContent = "Eliminar";
        botonEliminar.classList.add("btn", "btn-danger", "ms-2");
        botonEliminar.onclick = function () {
            productosAgregados.removeChild(div);
            actualizarTotalPedido();
        };
        div.appendChild(botonEliminar);

        // Añadir el contenedor al DOM y actualizar el total del pedido
        productosAgregados.appendChild(div);
        actualizarTotalPedido();
    });

function actualizarTotalPedido() {
    let totalPedido = 0;
    document.querySelectorAll("#productos_agregados > div").forEach((div) => {
        const precioProducto = parseFloat(div.getAttribute("data-precio"));
        const inputCantidad = div.querySelector('input[type="number"]');
        const cantidad = parseInt(inputCantidad.value) || 0;
        totalPedido += cantidad * precioProducto;
    });
    document.getElementById(
        "total_pedido"
    ).textContent = `${totalPedido.toFixed(2)}`;
    document.getElementById("total_pedido_input").value =
        totalPedido.toFixed(2);
}
