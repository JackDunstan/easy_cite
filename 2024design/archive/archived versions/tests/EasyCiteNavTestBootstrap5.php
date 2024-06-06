<!doctype html>
<html><head>
<meta charset="UTF-8">
<title>Bootstrap Tabs and Pills</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

<?php 
	
	$testvar1 = "hello";
	echo($testvar1); 
	
	
	?>

<style>
	body {margin:2rem;}
	.myleftpills {text-align: left;}
</style>
</head>
<body>
	<script>
$(function(){
	//use this string after the URL to test -  #v-pills-2-tab#collapse4
	if (location.hash !== null && location.hash !== "") { //check for hash
		var hash = window.location.hash; 
		var myArray = hash.split("#"); //split hash into two parts & save in an array
		var tabopen = myArray[1];  //first item of array
		tabopen && $('div.tab-pane #' + tabopen).tab('show'); //show pills tab
		var accordionopen = "#" + myArray[2];  //second item of array
       	$(accordionopen + ".collapse").collapse("show"); //show accordion
		console.log(tabopen);
		console.log(accordionopen);
     };
});
</script>
	<p id="demo0"></p>
	<p id="demo1"></p>
	<script>
		$(function(){
		if (location.hash !== null && location.hash !== "") { //check for hash
		var hash2 = window.location.hash;
		var myArray2 = hash2.split("#");
		document.getElementById("demo0").innerHTML = myArray2[1]; 
		document.getElementById("demo1").innerHTML = myArray2[2]; 
		}
			});
	</script>
<h2>Easycite layouts: Bootstrap 5 - tabs , vertical pills &amp; accordions</h2>
<p>&nbsp;</p>

	<nav><div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-harvard-tab" data-bs-toggle="tab" data-bs-target="#nav-harvard" type="button" role="tab" aria-controls="nav-harvard" aria-selected="true">RMIT Harvard</button>
    <button class="nav-link" id="nav-apa-tab" data-bs-toggle="tab" data-bs-target="#nav-apa" type="button" role="tab" aria-controls="nav-apa" aria-selected="false">APA 7<sup>th</sup> Ed.</button>
    <button class="nav-link" id="nav-chicago-tab" data-bs-toggle="tab" data-bs-target="#nav-chicago" type="button" role="tab" aria-controls="nav-chicago" aria-selected="false">Chicago</button>
  </div></nav>
	<p>&nbsp;</p>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-harvard" role="tabpanel" aria-labelledby="nav-harvard-tab">
	  <div class="d-flex align-items-start">
		  <div class="row">
		  <div class="col-sm-2">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active myleftpills" id="v-pills-1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true">Using Harvard</button>
    <button class="nav-link myleftpills" id="v-pills-2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false">Books</button>
    <button class="nav-link myleftpills" id="v-pills-3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false">Journal articles</button>
    <button class="nav-link myleftpills" id="v-pills-4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4" aria-selected="false">Images</button>
   <!-- end flex--></div>
			   <!-- end column 1--></div>
			  
			  
<div class="col-12 col-sm-10">
	
  <div class="tab-content w-100" id="v-pills-tabContent">  
    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">		
<div class="accordion accordion-flush" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading1">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
        Introduction
      </button>
    </h2>
    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1">
      <div class="accordion-body">
        Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.
      <!-- end accordion-body--></div>
    <!-- end accordion-collapse--></div>
  <!-- end accordion-item--></div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading2">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
        General rules for in-text references
      </button>
    </h2>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2">
      <div class="accordion-body">
        Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading3">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
        Multiple works by same author(s) in the same year
      </button>
    </h2>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3">
      <div class="accordion-body">
        Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.
      </div>
    </div>
  </div>
<!-- end accordion--></div>		
 <!-- end tab-pane--></div>	  
    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
	  <div class="accordion" id="accordionExample2">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading6">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
        Books
      </button>
    </h2>
    <div id="collapse6" class="accordion-collapse collapse show" aria-labelledby="heading6">
		<div class="accordion-body">
        Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        General rules for in-text references
      </button>
    </h2>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4">
      <div class="accordion-body">
        Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        Multiple works by same author(s) in the same year
      </button>
    </h2>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5">
      <div class="accordion-body">
        Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.
      </div>
    </div>
  </div>
<!-- end accordion--></div>	  
	  <!-- end tab-pane--></div>
    <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
	  <div class="accordion" id="accordionExample3">
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading7">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
        Journals
      </button>
    </h2>
    <div id="collapse7" class="accordion-collapse collapse show" aria-labelledby="heading7">
		<div class="accordion-body">
        Cillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Id id reprehenderit sit est eu aliqua occaecat quis et velit excepteur laborum mollit dolore eiusmod. Ipsum dolor in occaecat commodo et voluptate minim reprehenderit mollit pariatur. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading8">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
        General rules for in-text references
      </button>
    </h2>
    <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8">
      <div class="accordion-body">
        Culpa dolor voluptate do laboris laboris irure reprehenderit id incididunt duis pariatur mollit aute magna pariatur consectetur. Eu veniam duis non ut dolor deserunt commodo et minim in quis laboris ipsum velit id veniam. Quis ut consectetur adipisicing officia excepteur non sit. Ut et elit aliquip labore Lorem enim eu. Ullamco mollit occaecat dolore ipsum id officia mollit qui esse anim eiusmod do sint minim consectetur qui.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading9">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
        Multiple works by same author(s) in the same year
      </button>
    </h2>
    <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9">
      <div class="accordion-body">
        Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.
      </div>
    </div>

	  
	  </div>
		<!-- end accordion --></div>
		<!-- end tab-pane--></div>	  
		<div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">Eu dolore ea ullamco dolore Lorem id cupidatat excepteur reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.</div>
 <!-- end tab-content--></div>
				  
			    
<!-- end second column --></div>  
		  <!-- end row--></div> 		  
	  <!-- end flex item--></div>
	<!-- end tab-pane--></div>
	
		  
			  <!-- end row -->	
  <div class="tab-pane fade" id="nav-apa" role="tabpanel" aria-labelledby="nav-some text here </div>apa-tab">Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.<!-- end tab-pane--></div>
  <div class="tab-pane fade" id="nav-chicago" role="tabpanel" aria-labelledby="nav-chicago-tab">reprehenderit consectetur elit id dolor proident in cupidatat officia. Voluptate excepteur commodo labore nisi cillum duis aliqua do. Aliqua amet qui mollit consectetur nulla mollit velit aliqua veniam nisi id do Lorem deserunt amet. Culpa ullamco sit adipisicing labore officia magna elit nisi in aute tempor commodo eiusmod.<!-- end tab-pane--></div>

<!-- end tab-content--></div>
	
	
	     
 
  
	
</body>
</html>
