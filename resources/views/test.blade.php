@php
    $name = ["vishal","Aman","Rohit"];
@endphp

<script>
   
    var data = @json($name);
    data.forEach(function(e){
        console.log(e);
    });
    // console.log(data);
    
    
</script>