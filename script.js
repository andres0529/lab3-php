/*=============================================
Object with Properties
=============================================*/
var p = {
  //elements inside the table
  editButtons: document.querySelectorAll(".edit"),
  deleteButtons: document.querySelectorAll(".delete"),
  addNewButton: document.querySelector(".addNewButton"),

  //Elements inside the pop-up-edit
  popUpEdit: document.querySelector("#pop-up-edit"),
  editId: document.querySelector("#pop-up-edit h5"),

  editName: document.querySelector("#pop-up-edit #clubName"),
  editGround: document.querySelector("#pop-up-edit #ground"),

  editIdInput: document.querySelector("#pop-up-edit #clubId"),
  cancelButton: document.querySelector(".cancelEdit"),
  saveButton: document.querySelector(".saveEdit"),

  //Elements inside the pop-up-delete
  popUpDelete: document.querySelector("#pop-up-delete"),
  deleteId: document.querySelector("#deleteId"),
  deleteIdInput: document.querySelector("#pop-up-delete #clubId"),
  deleteName: document.querySelector("#deleteName"),
  deleteGround: document.querySelector("#deleteGround"),
  cancelDelete: document.querySelector("#pop-up-delete .cancelDelete"),
  deleteButton: document.querySelector("#pop-up-delete .delete"),

  //elements inside the pop-up-add
  popUpAdd: document.querySelector("#pop-up-add"),
  cancelAdd: document.querySelector("#pop-up-add .cancelAdd"),
  saveAdd: document.querySelector("#pop-up-add .saveAdd"),
};

/*=============================================
Object with Methods
=============================================*/
m = {
  //function to block all the buttons
  blockButtons: () => {
    for (let i = 0; i < p.editButtons.length; i++) {
      p.editButtons[i].setAttribute("disabled", "true");
      p.deleteButtons[i].setAttribute("disabled", "true");
    }
    p.addNewButton.setAttribute("disabled", "true");
  },

  //function to unblock all the buttons
  unblockButtons: () => {
    for (let i = 0; i < p.editButtons.length; i++) {
      p.editButtons[i].removeAttribute("disabled");
      p.deleteButtons[i].removeAttribute("disabled");
    }
    p.addNewButton.removeAttribute("disabled");
  },

  //main function
  appStart: () => {
    //add eventlistener to all the Edit buttons
    [...p.editButtons].map((element) => {
      element.addEventListener("click", m.editClub);
    });

    //add eventlistener to add new button
    p.addNewButton.addEventListener("click", m.addNewClub);

    //add eventlistener to all the Delete buttons
    [...p.deleteButtons].map((element) => {
      element.addEventListener("click", m.deleteClub);
    });

    //function cancel button to edit
    p.cancelButton.addEventListener("click", () => {
      m.unblockButtons();
      p.popUpEdit.style.visibility = "hidden";
    });

    //function cancel button to delete
    p.cancelDelete.addEventListener("click", () => {
      m.unblockButtons();
      p.popUpDelete.style.visibility = "hidden";
    });

    //function cancel button to add
    p.cancelAdd.addEventListener("click", () => {
      m.unblockButtons();
      p.popUpAdd.style.visibility = "hidden";
    });
  },
  //-----function to edit the record------
  editClub: (e) => {
    m.blockButtons();
    p.editId.innerText = "ID: " + e.target.id;
    p.editIdInput.value = e.target.id;
    p.editName.value = e.target.dataset.name;
    p.editGround.value = e.target.dataset.ground;
    p.popUpEdit.style.visibility = "visible";
  },

  deleteClub: (event) => {
    m.blockButtons();
    p.deleteIdInput.value = event.target.id;
    p.deleteId.innerText = "ID: " + event.target.id;
    p.deleteName.innerText = "Club Name: " + event.target.dataset.name;
    p.deleteGround.innerText = "Ground: " + event.target.dataset.ground;
    p.popUpDelete.style.visibility = "visible";
  },

  addNewClub: () => {
    m.blockButtons();
    p.popUpAdd.style.visibility = "visible";
  },
};

m.appStart();
