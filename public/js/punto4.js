$(document).ready(function(){
    
    $.ajax({
        url:url+"PuntoFour/ejercicio4",
        type:"POST",
        success:function(response){
            let data=JSON.parse(response)
            
            $('#sql').html(`<p>${data.sql}</p>`)
            pintarResult(data.data)
            $('#json').html(`<p>${JSON.stringify(data.data)}</p>`)
        }
    })


    function pintarResult(data)
    {
        let body=''
        data.forEach(element => {
            body+=`<tr>  <td>${element.departament}</td>
                    <td>${element.N_empleados}</td></tr>`
        });

        $('#tbody').empty()
        $('#tbody').append(body)
    }

})