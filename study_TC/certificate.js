//submitting the form

function Download()
{
    //input namefields 
    let namefield=document.getElementById("namefield").value;
    let namep = document.getElementById("namep");
    namep.innerHTML=namefield;
    console.log(namep);

    /*input usn
    let namefield1=document.getElementById("namefield1").value;
    let namep1 = document.getElementById("namep1");
    namep1.innerHTML=namefield1;
    console.log(namep);*/

    //input branch
    let branchfield = document.getElementById("branchfield").value;
    let brnp = document.getElementById("branchp");
    brnp.innerHTML=branchfield;
    console.log(brnp);

    //input semester
    let semesterfield = document.getElementById("semesterfield").value;
    let semp=document.getElementById("semp");
    semp.innerHTML=semesterfield;
    console.log(semp);

    document.getElementById("migrate_form").style.display='none';
    document.getElementById("certif").style.display='block';
   // document.getElementById("Download").style.display='block';
}

