const addForm = document.getElementById("add-list-form");
const showAlert = document.getElementById("showAlert");
const addModal = new bootstrap.Modal(document.getElementById("addNewListModal"));

const tbody = document.querySelector("tbody");
const updateForm = document.getElementById("edit-list-form");
const editModal = new bootstrap.Modal(document.getElementById("editListModal"))

addForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(addForm);
    formData.append("add", 1);

    if (addForm.checkValidity() === false) {
        e.preventDefault();
        e.stopPropagation();
        addForm.classList.add("was-validated");
        return false;
    } else {
        document.getElementById("add-list-btn").value = "Pease wait...";

        const data = await fetch("action.php", {
            method: "POST",
            body: formData
        })

        const response = await data.text();
        showAlert.innerHTML = response;
        document.getElementById("add-list-btn").value = "Add List";
        addForm.reset();
        addForm.classList.remove("was-validated");
        addModal.hide();
        fetchAllList();
    }
})

const fetchAllList = async () => {
    const data = await fetch("action.php?read=1", {
        method: "GET"
    })
    const response = await data.text();
    tbody.innerHTML = response;
}

fetchAllList();

tbody.addEventListener("click", (e) => {
    if (e.target && e.target.matches("a.editlink")) {
        e.preventDefault();
        let id = e.target.getAttribute("id");
        editList(id);
    }
})

const editList = async (id) => {
    const data = await fetch(`action.php?edit=1&id=${id}`, {
        method: "GET"
    })
    const response = await data.json();
    document.getElementById("id").value = response.id;
    document.getElementById("kind").value = response.kind;
    document.getElementById("part").value = response.part;
    document.getElementById("protein").value = response.protein;
    document.getElementById("kcal").value = response.kcal;

}

updateForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(updateForm);
    formData.append("update", 1);

    if (updateForm.checkValidity() === false) {
        e.preventDefault();
        e.stopPropagation();
        updateForm.classList.add("was-validated");
        return false;
    } else {
        document.getElementById("edit-list-btn").value = "Please wait...";

        const data = await fetch("action.php", {
            method: "POST",
            body: formData
        })
        const response = await data.text();
        showAlert.innerHTML = response;
        document.getElementById("edit-list-btn").value = "Edit List";
        updateForm.reset();
        updateForm.classList.remove("was-validated");
        editModal.hide();
        fetchAllList();
    }

})

tbody.addEventListener("click", (e) => {
    if (e.target && e.target.matches("a.deletelink")) {
        e.preventDefault();
        let id = e.target.getAttribute("id");
        deleteList(id);
    }
})

const deleteList = async (id) => {
    const data = await fetch(`action.php?delete=1&id=${id}`, {
        mehod: "GET"
    })
    const response = await data.text();
    showAlert.innerHTML = response;
    fetchAllList();
}