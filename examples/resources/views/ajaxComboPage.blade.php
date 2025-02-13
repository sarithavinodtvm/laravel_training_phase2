<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <body>
        <h1>Add New Book</h1>
<script>
function loadBlocks(district){
    //district=$('#districtCombo').val();
    options="";
    $.ajax({
        type:'GET',
        url:'/getAllBlocks/'+district,
        success:function(data)
        {
            $.each(data,function(index,block){
                options=options+"<option value="+block.block_id+">"+block.block_name+"</option>";
            })
            $('#blockCombo').html(options);
        }
    });
}
</script>
        <form name="frmAjaxCombo" method="post" action="">
            @csrf
            District
            <select id="districtCombo" name="districtCombo" onChange="loadBlocks(this.value)">
                <option value="00" >Select District</option>
                <?php 
                foreach($districtList as $district){
                echo "<option value=$district->dist_id>$district->dist_name</option>";
                }
                ?>
            </select>
            <br>
            Block
            <select id="blockCombo" name="blockCombo"></select>
        </form>
    </body>
</html>