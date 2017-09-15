function getsub(obj) {

    var httprequest= new XMLHttpRequest();
    httprequest.onreadystatechange=function () {
        if(this.readyState==4 && this.status==200)
        {


            document.getElementById("tbsubcategory").innerHTML=this.responseText;
        }

    };

    httprequest.open("GET","getsubcategory.php?cid="+obj,true);
    httprequest.send();

}