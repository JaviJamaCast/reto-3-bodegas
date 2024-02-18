import './bootstrap';
import * as bootstrap from 'bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    var toggleFiltersButton = document.getElementById('toggleFiltersButton');
    var fileInput = document.getElementById('fileUpload');
    var fileNameDisplay = document.getElementById('fileName');

    if (toggleFiltersButton) {
        toggleFiltersButton.addEventListener('click', function() {
            var filtersModal = new bootstrap.Modal(document.getElementById('filtersModal'));
            filtersModal.show();
        });
    }

    // Asigna el evento onchange al input de archivo
    fileInput.addEventListener('change', function() {
        fileNameDisplay.textContent =  fileInput.files[0].name ;
    });
});
