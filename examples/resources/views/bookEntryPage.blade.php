<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
function validateBookDetails(){
    if($('#txtName').val()==""){
        alert("Name cannot be null");
        return false;
    }
    else if($('#txtAuth').val()==""){
        alert("Author cannot be null");
        return false;
    }
    else
        return true;

}
</script>
    <body>
        <h1>Add New Book</h1>
        <!--<form name="frmReg" method="post" action="saveBookDetails" onSubmit="return validateBookDetails()">-->
        <form name="frmReg" method="post" action="saveBookDetailsUsingLaravelValidation" >
            @csrf
            Name <input type="text" name="txtName" id="txtName" /></br>
            Author <input type="text" name="txtAuth" id="txtAuth"  /><br>
            Description<textarea name="txtDescr" id="txtDescr"></textarea><br>
            <input type="submit" value="Save"/></br>
            <input type="reset" value="Cancel"/>
        </form>
    @if($errors)
     {{ dd($errors->all()) }}
    @endif
    </body>
</html>