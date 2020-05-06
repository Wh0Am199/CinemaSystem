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
		
		var rightsbox = document.createElement("select");
        rightsbox.setAttribute("class", "form-control");
		var OPT1 = document.createElement('OPTION');
		OPT1.setAttribute('value', 0);
		var OPT2 = document.createElement('OPTION');
		OPT2.setAttribute('value', 0);
		OPT2.setAttribute('selected', 'selected');
		OPT1.appendChild( document.createTextNode( 'Admin' ) );
		OPT2.appendChild( document.createTextNode( 'Felhasználó' ) );
		rightsbox.appendChild(OPT1);
		rightsbox.appendChild(OPT2);

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