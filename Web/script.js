function addField (argument) {
        var myTable = document.getElementById("myTable");
        var currentIndex = myTable.rows.length;
        var currentRow = myTable.insertRow(-1);		       
		
        var currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(indexfield);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(usernamefield);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(emailbox);

        currentCell = currentRow.insertCell(-1);
        currentCell.appendChild(deletebox);
}