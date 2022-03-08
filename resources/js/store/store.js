window.addEventListener("product-saved", () => {
    $("#product-form-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("count-saved", () => {
    $("#count-modal").modal('hide');
    $('.modal-backdrop').remove();
});

var product_modal = document.getElementById('product-modal');
if (product_modal)
{
    product_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emitTo('store.product-form', 'resetForm');
    });
}

var count_modal = document.getElementById('count-modal');
if (count_modal)
{
    count_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emitTo('store.count-form','resetForm');
    });
}

Livewire.on("showModalProduct", () => {
    $("#product-modal").modal('show');
});

Livewire.on("showModalCount", () => {
    $("#count-modal").modal('show');
});
