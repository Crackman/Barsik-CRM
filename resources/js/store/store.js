window.addEventListener("product-saved", () => {
    $("#product-form-modal").modal('hide');
    $('.modal-backdrop').remove();
});

var product_modal = document.getElementById('product-modal');
if (product_modal)
{
    product_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

window.addEventListener("count-hide", () => {
    $("#count-modal").modal('hide');
    $('.modal-backdrop').remove();
});

Livewire.on("showModalProduct", () => {
    $("#product-modal").modal('show');
});