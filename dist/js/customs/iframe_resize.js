function autoResize(){
	/* CODE DOESN'T WORK YET. GET IT GOING SOON.

	BASIC LAYOUT -->>

	<<inside iframe>>
	div id="content-main"
		div class="main-inner"
			div style="width:580px"

			^^ want to change this div to
			width:100%

	*/

	//alert('it loads');

    var parent = document.getElementById('content-main');
    //alert('id is '+parent.id);

    var child = parent.firstChild.firstChild;

    if (parent) {
    	//alert('child\'s width is '+child.width);

    	child.width= "100%";
    	//alert('child\'s new width is 100%');
    }
}