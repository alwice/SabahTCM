<script>
	function sortTable(n){
		var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount=0;
		table=document.getElementById("forum");
		switching=true;
		//set the sorting direction to ascending
		dir="asc";
		/*Make a loop that will continue until no switching has been done*/
		while(switching){
			//start by saying: no switching is done
			switching=false;
			rows=table.getElementsByTagName("TR");
			/*loop through all table rows, except first(header) and last*/
			for(i=1;i<(rows.length-2);i++){
				//start by should no switching
				shouldSwitch=false;
				/*get two compare elements, one from current, one from next */
				x=rows[i].getElementsByTagName("TD")[n];
				y=rows[i+1].getElementsByTagName("TD")[n];
				//check if should switch, based on direction
				if(dir=="asc"){
					if(x.innerHTML.toLowerCase()>y.innerHTML.toLowerCase()){
						//mark switch
						shouldSwitch=true;
						break;
					}
				}
				else if(dir=="desc"){
					if(x.innerHTML.toLowerCase()<y.innerHTML.toLowerCase()){
						//mark switch
						shouldSwitch=true;
						break;
					}
				}
			}//end loop
			if(shouldSwitch){
				//make switch & mark done
				rows[i].parentNode.insertBefore(rows[i+1], rows[i]);
				switching=true;
				//increase count each time switched
				switchcount++;
			}
			else{
				/*if no switching && dir=="asc", change to "desc" & loop*/
				if(switchcount==0 && dir=="asc"){
					dir="desc";
					switching=true;
				}
			}
		}
	}	
</script>