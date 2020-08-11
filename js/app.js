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
	inputForm.setAttribute('placeholder', 'contenido');
	 
}
//end input search

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

// single.php add class
function single(){
	const singleDiv = document.querySelector('.single-div');
	const tagNameParrafo = document.getElementsByTagName('p')[0];
	tagNameParrafo.setAttribute('class', ' text-white text-muted mt-5');
}
single();

// single.php add class content
function textJustify(){
	const contenidoPro = document.querySelector('.contenido-pro-col');
	contenidoPro.querySelectorAll('p').forEach(item =>{
		item.className += ' text-muted ';
		console.log(item)
		item.style.fontSize   = '20px';
		item.style.lineHeight = '2';

	});


}
textJustify();




