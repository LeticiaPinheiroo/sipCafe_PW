<!DOCTYPE html>
<html lang="en">
<head>
    @vite("resources/css/app.css")
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SipCafé - PW</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrQkTy0K3AOT5+RYCM9K+W2miL9XDf4z6kX3n/E9Y5D4V9W0jHHP4oK59D9zFkUe0k6jQy0R8F9tbw4gFQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .theme-toggle {
            cursor: pointer;
        }

        .kaushan-script-regular {
            font-family: "Kaushan Script", cursive;
            font-weight: 400;
            font-style: normal;
        }

        #linha {
        width: 100%;
        border-bottom: 12px solid #006D84;
        }

        /*posição do card de confirmação de dados*/
        .fixed-bottom-right {
        position: fixed;
        bottom: 1rem;
        right: 1rem;
        z-index: 50;
        display: none;
        }

        .show {
        display: block;
        }
    </style>
</head>
<body class="bg-gray-200 dark:bg-gray-900">

<nav class="bg-rose-600 border-gray-200 dark:bg-orange-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="../../img/sipCafeLogoo.png" class="h-14" alt="Flowbite Logo" />
        <span class="self-center text-2xl text-white font-semibold whitespace-nowrap dark:text-white kaushan-script-regular">SipCafé</span>
    </a>
    <div class="flex items-center md:hidden">
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-700 dark:text-white dark:hover:bg-orange-600 dark:focus:ring-orange-700" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="hidden w-full md:flex md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-rose-600 dark:bg-orange-600 md:dark:bg-orange-600 dark:border-gray-700 ml-auto">
        <li>
          <a href="/home" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-slate-900 md:p-0 dark:text-white md:dark:hover:text-slate-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Início</a>
        </li>
        <li>
          <a href="/sobreNos" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-slate-900 md:p-0 dark:text-white md:dark:hover:text-slate-900 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sobre Nós</a>
        </li>
        <li>
          <a href="/contato" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-slate-900 md:p-0 dark:text-white md:dark:text-slate-900" aria-current="page"">Contato</a>
        </li>
      </ul>
     <!--botao da troca de tema-->
      <div class="flex items-center ml-4">
        <button class="theme-toggle inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-rose-500 focus:outline-none focus:ring-2 focus:ring-rose-700 dark:text-gray-400 dark:hover:bg-orange-500  dark:focus:ring-orange-700" aria-label="Toggle theme">
          <span class="sr-only">Toggle theme</span>
          <i class="fas fa-sun hidden"></i>
          <i class="fas fa-moon"></i>
        </button>
      </div>
    </div>
  </div>
</nav>
<!--config da troca de tema-->
<script>
    const themeToggleBtn = document.querySelector('.theme-toggle');
    const sunIcon = themeToggleBtn.querySelector('.fa-sun');
    const moonIcon = themeToggleBtn.querySelector('.fa-moon');

    function toggleIcons() {
        sunIcon.classList.toggle('hidden');
        moonIcon.classList.toggle('hidden');
    }

    themeToggleBtn.addEventListener('click', () => {
        document.documentElement.classList.toggle('dark');
        if (document.documentElement.classList.contains('dark')) {
            localStorage.setItem('theme', 'dark');
            sunIcon.classList.remove('hidden');
            moonIcon.classList.add('hidden');
        } else {
            localStorage.setItem('theme', 'light');
            sunIcon.classList.add('hidden');
            moonIcon.classList.remove('hidden');
        }
    });

    if (localStorage.getItem('theme') === 'dark') {
        document.documentElement.classList.add('dark');
        sunIcon.classList.remove('hidden');
        moonIcon.classList.add('hidden');
    } else {
        document.documentElement.classList.remove('dark');
        sunIcon.classList.add('hidden');
        moonIcon.classList.remove('hidden');
    }
</script>

<section class="bg-gray-100 dark:bg-slate-800 shadow-sm" style="padding: 3%;">
    <div class="flex justify-center">
        <!-- Card de Formulário -->
        <div class="max-w-2xl w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-18" src="https://i.pinimg.com/564x/45/f8/ed/45f8edf36a9c48eb78b68aa575fa7fe7.jpg" alt="Imagem do Form" />
                <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400" />
            </a>
            <div class="p-5">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Formulário de contato</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Nós do SipCafé adoramos ouvir nossos clientes! Seja para tirar dúvidas, compartilhar sugestões ou simplesmente dizer um oi, estamos aqui para você. Preencha o formulário ao lado e entraremos em contato o mais breve possível. Sua opinião é muito importante para nós e nos ajuda a melhorar cada vez mais a sua experiência. Obrigado por escolher o SipCafe!</p>
                <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400" />

                <!--COMEÇO DO FORM-->
                <form class="max-w-md mx-auto"  action="{{ route('enviar_contato') }}" method="POST" id="contato-form">
                    <!-- coisa obrigatoria do laravel -> cross-site request forgery (csrf)-->
                    @csrf
                    <!--CAMPO EMAIL-->
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <!--CAMPO PRIMEIRO NOME-->
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="primeiro_nome" id="primeiro_nome" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="primeiro_nome" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Primeiro nome</label>
                        </div>
                        <!--CAMPO SOBRENOME-->
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" name="sobrenome" id="sobrenome" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="sobrenome" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sobrenome</label>
                        </div>
                    </div>
                    <!--CAMPO TELEFONE-->
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="tel" pattern="\d{2} \d{5}-\d{4}" name="telefone" id="telefone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="telefone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Número de telefone</label>
                        </div>
                        <!--CAMPO RADIO (FEMININO)-->
                        <div class="flex items-center mb-4">
                            <div class="flex items-center me-4">
                                <input id="sexo-Fem" type="radio" name="sexo" value="Feminino" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" checked>
                                <label for="sexo-Fem" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Feminino
                                </label>
                            </div>
                            <!--CAMPO RADIO (MASCULINO)-->
                            <div class="flex items-center">
                                <input id="sexo-Masc" type="radio" name="sexo" value="Masculino" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
                                <label for="sexo-Masc" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Masculino
                                </label>
                            </div>
                        </div> <!-- fim da divisao de duas colunas -->
                    </div>

                    <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                            <label for="comentario" class="sr-only">Deixe um comentário</label>
                            <textarea id="comentario" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Escreva um comentário" name="comentario" required ></textarea>
                        </div>
                    </div>
                    <!-- textinho no final -->
                    <p class="ms-auto text-xs text-gray-500 dark:text-gray-400">Sua contribuição nos ajuda a melhorar continuamente a sua experiência. Obrigado por compartilhar seu feedback conosco! <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Termos da comunidade</a>.</p>
                    <!-- botão de enviar -->
                    <button type="submit" class=" mt-4 text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-rose-600 dark:hover:bg-rose-700 dark:focus:ring-rose-800">Enviar</button>
                </form> <!-- Fim Direita (Form) --> 
            </div>
        </div>  <!-- fim do card do forms --> 

             <!-- Card de var_dump -->
@if(isset($varDumpOutput))
    <div id="var-dump-card" class="fixed bottom-4 right-4 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 p-4 rounded-lg shadow-lg max-w-md overflow-auto hidden">
        <h5 class="text-lg font-bold mb-2 text-gray-900 dark:text-white">Dados Submetidos</h5>
        <pre id="var-dump-content" class="text-sm text-gray-700 dark:text-gray-300">{{ $varDumpOutput }}</pre>
        <button id="btn-fechar-card" class="bg-green-500 text-white px-4 py-2 mt-4 rounded-lg hover:bg-green-600">
            <i class="far fa-circle-check"></i> Confirmar
        </button>
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contato-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Impede o envio do formulário
            const card = document.getElementById('var-dump-card');
            const varDumpContent = document.getElementById('var-dump-content');
            const formData = new FormData(form); // Obtém os dados do formulário
            let formDataText = ''; // Inicializa uma string vazia para os dados do formulário

            // Itera sobre os campos do formulário
            formData.forEach((value, key) => {
                formDataText += `${key}: ${value}\n`; // Adiciona cada par chave-valor à string
            });

            // Atualiza o conteúdo do card com os dados do formulário
            if (card && varDumpContent) {
                varDumpContent.textContent = formDataText; 
                card.classList.remove('hidden'); // Remove a classe 'hidden' para exibir o card
            }

            // Limpa os campos do formulário
            form.reset();
        });

        // Seletor para o botão de fechar
        const btnFecharCard = document.getElementById('btn-fechar-card');

        // Evento de clique para o botão de fechar
        btnFecharCard.addEventListener('click', function() {
            // Oculta o card de dados fornecidos
            document.getElementById('var-dump-card').classList.add('hidden');
        });
    });
</script>



    </div>
</section>

<!-- inicio do rodapé -->
<section>
    <footer class="bg-zinc-50 text-center dark:bg-neutral-700 lg:text-left">
        <div class="bg-black/5 p-4 text-center text-surface dark:text-white">
            © 2024 Copyright:
            <a href="">Leticia Pinheiro - 3ºDS - Manhã</a>
        </div>
    </footer>
</section>

</body>
</html>