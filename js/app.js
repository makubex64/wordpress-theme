// add class form
const form = document.querySelector('#searchform');
console.log(form)
if (form){
	form.classList += ' form-inline my-2 my-lg-0  ';
}

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
	inputForm.classList += ' form-control mr-sm-2 ';
}

// add class button buscador search
const searchsubmit = document.querySelector('#searchsubmit');
if(searchsubmit){
   searchsubmit.classList += ' btn btn-sm btn-outline-secondary ';

}

// add class list group sidebar widgets
const sidebarclass = document.querySelector('.sidebar-class ul');
if(sidebarclass){
   sidebarclass.classList += ' list-group list-group-flush ';
   sidebarclass.querySelectorAll('li').forEach(item =>{
   item.className += ' list-group-item ';
  });
}


