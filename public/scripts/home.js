$(()=>{ 
  // SE APP INSTALADO, ACESSO DIRETO
  if($.cookie('instalado') == 'SIM') {
    window.location.href = 'result'
  }
})

// FIXA ACESSO DIRETO CASO USUARIO TENHA PERDIDO COOKIE
function acesso(){
  $.cookie('instalado', 'SIM')
}