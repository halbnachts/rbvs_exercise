function validateForm() {

    let x = document.forms["neuerjob"]["abteilungs_id"].value;
    if (x == "") {
      alert("Die Abteilungs-ID muss ausgewählt werden.");
      return false;
    }

    let y = document.forms["neuerjob"]["jobtitel"].value;
    if (y == "") {
      alert("Jobtitel muss eingetragen werden.");
      return false;
    }

    let z = document.forms["neuerjob"]["beschreibung"].value;
    if (z == "") {
      alert("Eine Beschreibung muss eingetragen werden.");
      return false;
    }

  }