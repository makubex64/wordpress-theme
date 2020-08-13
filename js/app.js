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
	if (contenidoPro){
	contenidoPro.querySelectorAll('p').forEach(item =>{
		item.className += ' text-muted ';
		item.style.fontSize   = '20px';
		item.style.lineHeight = '2';

		});
	}	
}
textJustify();

// comments.php add class 
function addShadow(){
	const formComments = document.querySelector('#commentform');
	if(formComments){
		formComments.className += ' shadow p-3 mb-5 bg-white rounded col-lg-6';
		const labelForm = document.getElementsByTagName('label')[0];
		labelForm.remove();

		const textArea    = document.querySelector('#comment');
		const author      = document.querySelector('#author');
		const email       = document.querySelector('#email');
		const web         = document.querySelector('#url');

		if(author && email && web && textArea){
			textArea.setAttribute('class', ' form-control ')
			author.setAttribute('class', ' form-control ');
			email.setAttribute('class', ' form-control ');
			web.setAttribute('class', ' form-control ');
		}
	}
	
}
addShadow();

// index.php img content
function imageSize(){
	const entradas = document.querySelectorAll('.entradas img');
	// if (entradas){
		
	// }
	entradas.forEach(item =>{
	item.style.height    = '300px';
	item.style.maxHeight = '20%';
	console.log(item)

	});
}
imageSize();




