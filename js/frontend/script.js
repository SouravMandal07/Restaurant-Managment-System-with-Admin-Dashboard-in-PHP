// JavaScript for modal behavior
const modal = document.getElementById('myModal');
const openModalButton = document.getElementById('openModalButton');
const closeModalButton = document.getElementById('closeModalButton');

// Open the modal
openModalButton.onclick = function () {
    modal.style.display = 'block';
};

// Close the modal
closeModalButton.onclick = function () {
    modal.style.display = 'none';
};

// Close the modal when clicking outside the modal content
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
};