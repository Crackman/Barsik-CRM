window.addEventListener("category-saved", () => {
    $("#category-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("brand-saved", () => {
    $("#brand-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("model-saved", () => {
    $("#model-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("status-saved", () => {
    $("#status-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("type-saved", () => {
    $("#type-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("group-product-saved", () => {
    $("#group-product-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("product-saved", () => {
    $("#product-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("unit-saved", () => {
    $("#unit-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("group-work-saved", () => {
    $("#group-work-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("work-saved", () => {
    $("#work-modal").modal('hide');
    $('.modal-backdrop').remove();
});

window.addEventListener("counterparty-saved", () => {
    $("#counterparty-modal").modal('hide');
    $('.modal-backdrop').remove();
});


var status_modal = document.getElementById('status-modal');
if (status_modal)
{
    status_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var category_modal = document.getElementById('category-modal');
if (category_modal)
{
    category_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var model_modal = document.getElementById('model-modal');
if (model_modal)
{
    model_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    })
}

var brand_modal = document.getElementById('brand-modal');
if (brand_modal)
{
    brand_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var type_modal = document.getElementById('type-modal');
if (type_modal)
{
    type_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var group_product_modal = document.getElementById('group-product-modal');
if (group_product_modal)
{
    group_product_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var product_modal = document.getElementById('product-modal');
if (product_modal)
{
    product_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var unit_modal = document.getElementById('unit-modal');
if (unit_modal)
{
    unit_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var group_work_modal = document.getElementById('group-work-modal');
if (group_work_modal)
{
    group_work_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var work_modal = document.getElementById('work-modal');
if (work_modal)
{
    work_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}

var counterparty_modal = document.getElementById('counterparty-modal');
if (counterparty_modal)
{
    counterparty_modal.addEventListener('hidden.bs.modal', function () {
        Livewire.emit('resetForm');
    });
}
