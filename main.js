function myFunction()
{
    var k = document.getElementById("xyz");
    var l = document.getElementById("open");
    var m = document.getElementById("close");
    
    if (k.type === "password") 
    {
        k.type="text";
        l.style.display="block";
        m.style.display="none";
    } 
    else 
    {
        k.type="password";
        l.style.display="none";
        m.style.display="block";
    }
}
// for student Login btn
function student()
{
    var showhide_s = document.getElementById('navbar1');
    var showhide_a = document.getElementById('navbar2'); //for show only student form and avoid admin form

    if(showhide_s.style.display==="block")
    {
        showhide_s.style.display='none';
        
    }else
    {
        showhide_s.style.display="block";
        showhide_a.style.display='none'; //for show only student form and avoid admin form
    }
}
// submit reload check
function submit_student()
{
    var showhide_s = document.getElementsByClassName('oes-err');
    if(showhide_s.style.display==="none")
    {
        showhide_s.style.display='block';
        
    }else
    {
        showhide_s.style.display="block";
    }
}
// for admin Login btn
function admin()
{
    var showhide_a = document.getElementById('navbar2');
    var showhide_s = document.getElementById('navbar1'); //for show only admin form and hide student form

    if(showhide_a.style.display==="block")
    {
        showhide_a.style.display='none';
    }
    else
    {
        showhide_a.style.display="block";
        showhide_s.style.display='none'; //for show only admin form and hide student form

    }
}