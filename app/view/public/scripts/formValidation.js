function handleSignInValidation(event){
    const cpf = document.querySelector('#cpf');
    const password = document.querySelector('#password');

    const upperRegex = /[A-Z]/g;

    if(cpf.value.length != 14){
        event.preventDefault();
        Swal.fire({
            title: 'Error',
            text: 'O CPF deve conter 11 números',
        })
    }
    else{
        if(password.value.length < 8 || password.value.length > 25 || upperRegex.test(password.value) == false){
            event.preventDefault();
            Swal.fire({
                title: 'Error',
                text: 'A senha deve conter pelo menos 8 caracteres e no máximo 25 e uma letra maiúscula!',
            })  
        }
        else{
            event.returnValue = true;
        }
    }
}

function handleSignUpValidation(event){
    const cpf = document.querySelector('#cpf');
    const name = document.querySelector('#name');
    const birthDate = document.querySelector('#birth-date');
    const password = document.querySelector('#password');
    const passwordRepeat = document.querySelector('#password-repeat');

    const upperRegex = /[A-Z]/g;

    if(cpf.value.length != 14){
        event.preventDefault();
        Swal.fire({
            title: 'Error',
            icon: 'error',
            text: 'O CPF deve conter 11 números',
        })
    }
    else{
        if(name.value.length < 5){
            event.preventDefault();
            Swal.fire({
                title: 'Error',
                icon: 'error',
                text: 'O nome deve conter mais de 5 letras!',
            })
        }
        else{
            if(birthDate.value == ''){
                event.preventDefault()
                Swal.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'O campo data de nascimento não pode ser vazio!',
                })
            }
            else{
                if(password.value.length < 8 || password.value.length > 25 || upperRegex.test(password.value) == false){
                    event.preventDefault();
                    Swal.fire({
                        title: 'Error',
                        icon: 'error',
                        text: 'A senha deve conter pelo menos 8 caracteres e no máximo 25 e uma letra maiúscula!',
                    })  
                }
                else{
                    if(password.value != passwordRepeat.value){
                        event.preventDefault();
                        Swal.fire({
                            title: 'Error',
                            icon: 'error',
                            text: 'A senha deve ser igual a senha informada no campo anterior!',
                        }) 
                    }
                    else{
                        event.returnValue = true;
                    }
                }
            }
        }
    }
}