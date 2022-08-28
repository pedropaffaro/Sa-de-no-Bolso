const urlState = 'https://servicodados.ibge.gov.br/api/v1/localidades/estados?orderBy=nome';

$.getJSON(urlState, function(data){
    let content = '<option value="" selected disabled hidden>State</option>';

    $.each(data, function(v, val){
        content += `<option id=${val.sigla} value=${val.sigla}>${val.nome}</option>`
    })
    $('#state').html(content);
})

function handleSelectedState(){
    var select = document.getElementById("state");

    $.getJSON(urlState, function(data){    
        $.each(data, function(v, val){
            var urlCity= 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + select.options[select.selectedIndex].value + '/distritos?orderBy=nome';
            
            $.getJSON(urlCity, function(data){
                let content = '<option value="" selected disabled hidden>City</option>';
                
                $.each(data, function(v, val){
                    content += `<option id=${val.sigla} value=${val.sigla}'>${val.nome}</option>`
                })
                $('#city').html(content);
            })
        })
    })
}