function addField (argument) {
        var myTable = document.getElementById("myTable");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(-1);

		var indexfield = document.createElement("td");
        indexfield.setAttribute("name", "indexfield" + currentIndex);
		indexfield.innerHTML = "" + currentIndex;
		
		var usernamefield = document.createElement("input");
        usernamefield.setAttribute("name", "username" + currentIndex);
		
		var emailbox = document.createElement("input");
        emailbox.setAttribute("name", "email" + currentIndex);
		
		var rightsbox = document.createElement("form-control");
        //TODO

        var deletebox = document.createElement("button");
        deletebox.setAttribute("type", "button");
        deletebox.setAttribute("onclick", "deleteRow(this.parentNode.parentNode.rowIndex)");
        deletebox.setAttribute("class", "btn btn-info btn-outline btn-circle btn-lg m-r-5");
		deletebox.innerHTML = '<i class="icon-trash"></i>';
		
        var currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(indexfield);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(usernamefield);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(emailbox);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(deletebox);
}

function deleteRow(i){
    document.getElementById('myTable').deleteRow(i)
}