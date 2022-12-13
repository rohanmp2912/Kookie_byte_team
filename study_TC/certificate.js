
    
    
  function printstudy(){
   //setting name 
    let namefield = document.getElementById("namefield").value;
    let namep = document.getElementById("namep");
    namep.innerHTML=namefield;
    //setting usn
   let usnfield=document.getElementById("usnfield").value;
   let usnp=document.getElementById("usnp");
   usnp.innerHTML=usnfield;
//setting semester
   let semesterfield=document.getElementById("semesterfield").value;
   let semp=document.getElementById("semp");
   semp.innerHTML=semesterfield;
   //setting branch
   let branchfield=document.getElementById("branchfield").value;
   let branchp =document.getElementById("branchp");
   branchp.innerHTML=branchfield;

   document.getElementById("study_form").style.display='none';
   document.getElementById("study_temp").style.display='block';
   document.getElementById("downlod").style.display='block';
  }

