$(document).ready(function(){
    $('#inputSizeX').val(5)

    pintarX()

    $('#submitBtn').on('click',function(){
        pintarX()
    })

    function pintarX()
    {
        if($('#inputSizeX').val()>2){
            $.ajax({
                url:url+"PuntoOne/ejercicio1",
                type:"POST",
                data:{size:$('#inputSizeX').val()},
                success:function(response){
                    $('#contentX').html(response)
                    console.log(response);
                }
            })
        }else{
            alert('El valor minimo para contruir la X es 3!')
        }
    }
})

    

    


