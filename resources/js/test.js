window.addEventListener("test", () => {
    alert('test');
});

window.addEventListener("test_a", (event) => {
    alert(`${event.detail.id} - test_a`);
});

window.addEventListener("test_b", () => {
    alert('test_b');
});