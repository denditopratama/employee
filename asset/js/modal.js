if(sessionStorage.getItem("key")!=='true'){
	$(document).ready(function(){
	$("#modals").openModal()
						});
sessionStorage.setItem('key', 'true');}