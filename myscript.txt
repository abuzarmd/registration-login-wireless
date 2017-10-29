  function validation()
 {
     var result=true;
	 var i=document.getElementsByTagName("input");
	 if(i[0].value.length==0 || i[1].value.length==0)
	 result=false;
     return (result);
 }