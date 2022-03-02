window.addEventListener("device-saved", (event) => {
    $("#device-modal").modal('hide');
    $('.modal-backdrop').remove();
});

var device_modal = document.getElementById('device-modal');
if (device_modal)
{
    device_modal.addEventListener('hidden.bs.modal', function (event) {
        Livewire.emit('resetForm');
    });
}
