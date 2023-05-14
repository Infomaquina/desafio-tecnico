$(()=>{

  // REMOVER FEEDBACK AO DIGITAR
  $("#nome").on("input", ()=>{
    $("#nome").removeClass("is-invalid")
    $("#resultado").empty()
  })

  // AÇÃO AO CLICAR NO BOTÃO BUSCAR
  $("form").on("submit", (e)=>{
    e.preventDefault()
    $("#resultado").empty()

    user = $("#nome").val()

    // CERTIFICA CAMPO PREENCHIDO
    if(user.length == 0){
      sonora('error')
      $("#nome").addClass("is-invalid")
      return
    }

    //SE OFF-LINE
    if(navigator.onLine == false){
      sonora('error')    
      Swal.fire({
        title: 'Você está Offline!',
        text: "Verifique sua conexão",
        backdrop: "rgba(0,0,0,0.8)",
        timer: 2000,
      })
      return
    }

    //LOADING
    Swal.fire({
      title: 'Buscando...',
      allowOutsideClick: false,
      backdrop: "rgba(0,0,0,0.8)",
      timer: 1000,
      didOpen: () => {
        Swal.showLoading()
      },
      showClass: {
        popup: 'animate__animated animate__fadeIn'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOut'
      }
    })

    // BUSCA RESULTADOS
    $.ajax({
      url: "Result/search",
      type: "POST",
      data: {user: user},
      dataType: "json",
      success: (d)=>{
        sonora('ok') 
        console.log('erro'+d);
        
        //SE NÃO HOUVER RESULTADOS
        if(d.length == 0){
          sonora('error')
          $("#nome").addClass("is-invalid")
          return
        }       

        //RESETA CARDS
        $("#resultado").empty()

        //PRIMEIRO RESULTADO É O NUMERO MAXIMO DE ESTRELAS
        let max = d[0].stargazers_count

        //CRIA CARDS E PREENCHE RESULTADO    
        $.each(d,(i,v)=>{

          if(v.stargazers_count != 0){
            barra = `            
              <div class="progress-bar bg-primary fw-bold animate__animated animate__slideInLeft animate__delay-1s animate__slow-1s" style="width: ${100*v.stargazers_count/max}%">${v.stargazers_count}</div>
            `
          }else{
            barra = `            
              <div class="progress-bar bg-secondary fw-bold" style="width:100%">0</div>
            `
          }

          $("#resultado").append(`  
          <div class="col-12 col-sm-6 col-lg-4 my-3">          
            <div class="card h-100 shadow bg-light my-3 animate__animated animate__flipInX">
              <div class="card-body">
                <h5 class="card-title" title="PROJETO">
                  <i class="fa-solid fa-file-code me-2"></i>${v.name}
                </h5>
                  <p class="card-text" title="DESCRIÇÃO">${v.description}</p>
                  <p class="card-text">
                    <div class="progress" role="progressbar" style="height: 30px" title="ESTRELAS">
                      ${barra}
                    </div>
                  </p>
              </div>
              <div class="card-footer text-end">
                <a href="${v.html_url}" target="_blank" class="btn btn-primary" title="LINK">
                  <i class="fa-solid fa-arrow-up-right-from-square me-2"></i>Visitar
                </a>
              </div>
            </div>
          </div>
          `)
        })
      },
      error: ()=>{
        sonora('error')
        $("#nome").addClass("is-invalid")
        return        
      }
    })

  });
})