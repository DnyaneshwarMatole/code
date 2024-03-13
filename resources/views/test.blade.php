@php
    $user='yahoo baba';
    $fruits=['mango','banana','orange','apple']
@endphp
<script>
    var data=@json($fruits);
    data.forEach(element => {
        console.log(element);    
    });
    var data1=@json($user);
    console.log(data1);
</script>