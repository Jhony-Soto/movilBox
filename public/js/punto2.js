$(document).ready(function(){
    
    let arrayNumer=[];

    $('#submitBtn').on('click',function(){
        if($('#inputNumber').val()<0 || $('#inputNumber').val()>5 || $('#inputNumber').val().trim()==""){
            alert('Solo se adminiten numeros de 1 al 5.')
        }else{
            if(arrayNumer.length<10){
                
                arrayNumer.push($('#inputNumber').val())
                $('#countNumber').text(`Te falta ingresar ${10-arrayNumer.length} numeros.`)
                $('#inputNumber').val('')
                $('#inputNumber').focus();
                $('#contentX').html(`<p>${JSON.stringify(arrayNumer)}</p>`)
                console.log(arrayNumer);
                if(arrayNumer.length==10){
                    $.ajax({
                        url:url+"PuntoTwo/ejercicio2",
                        type:"POST",
                        data:{array:JSON.stringify(arrayNumer)},
                        success:function(response){
                            $('#contentX').html(response)
                            console.log(response);
                        }
                    })

                }
            }
            

        }
    })

   
})