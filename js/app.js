// add class form
const form = document.querySelector('#searchform');
if (form){
	form.classList += ' form-inline my-2 my-lg-0  ';
}
//end add class form

//set attribute form div
function divForm(){
	// console.log(form)
	const classDivForm = form.getElementsByTagName('div')[0].setAttribute('class', 'div-input');
	const idDivForm    = form.getElementsByTagName('div')[0].setAttribute('id', 'div-input');
	const divInput     = document.querySelector('.div-input');
	console.log(divInput); 
	if (divInput){
		const elementIcon = document.createElement('i');
		divInput.appendChild(elementIcon);
		const iconTagName = document.getElementsByTagName('i')[1];
		iconTagName.setAttribute('class', 'icon fas fa-search');
		console.log(iconTagName)
	}

}
divForm();
//end set attribute form div

//remove label form
function myFunctionLabel(){
const labelForm = document.querySelector('.screen-reader-text');
const elementLabel = document.getElementsByTagName('label')[0];
elementLabel.setAttribute('id', 'label-id');
	elementLabel.remove();
}
myFunctionLabel();
//end remove label form


// input search
const inputForm = document.querySelector('#s');
if(inputForm){
	inputForm.classList += 'input-search form-control mr-sm-2 ';
	 
}
//end input search

//icon fontawesome

//end icon fontawesome



// add class button buscador search
const searchsubmit = document.querySelector('#searchsubmit');
if(searchsubmit){
   searchsubmit.classList += ' btn btn-sm btn-outline-secondary ';

}
// end add class button buscador search

// add class list group sidebar widgets
const sidebarclass = document.querySelector('.sidebar-class ul');
if(sidebarclass){
   sidebarclass.classList += ' list-group list-group-flush ';
   sidebarclass.querySelectorAll('li').forEach(item =>{
   item.className += ' list-group-item ';
  });
}
//end add class list group sidebar widgets



