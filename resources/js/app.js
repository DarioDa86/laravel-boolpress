require('./bootstrap');

const deleteButtons = document.querySelectorAll(".btn-delete");
const inputDeleteID = document.getElementById("delete-id");

deleteButtons.forEach(
    (elm) => {
        elm.addEventListener("click", function() {
            inputDeleteID.value = this.getAttribute("data-id")
        });
    }
);