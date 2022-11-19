const senha = document.querySelector('.password');
const btn = document.querySelector('.btnpass');

btn.onclick = () =>
{
    if (senha.type == 'password')
    {
        senha.type = 'text'
        btn.src = '/imgs/ocultar.png'
    }
    else
    {
        senha.type = 'password'
        btn.src = '/imgs/mostrar.png'
    }
}