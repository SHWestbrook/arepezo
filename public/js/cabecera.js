function toggleDropdown(menuId) {
    var dropdown = document.getElementById(menuId);
    $('.dropdown-menu').not(dropdown).hide();  // Oculta otros menús desplegables
    $(dropdown).toggle();
}

// Cerrar el menú si se hace clic fuera de él
$(document).click(function(event) {
    if (!$(event.target).closest('.menu-container').length) {
        $('.dropdown-menu').hide();
    }
});
