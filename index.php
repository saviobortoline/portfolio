<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sávio Bortoline</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <nav class="bg-gray-900 bg-opacity-50 fixed inset-x-0 z-10" style="background-color: #121212;">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-20 items-center justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center pl-6">
                    <span class="text-white text-3xl font-bold">Sávio Bortoline</span>
                </div>
                <div class="flex flex-1 items-center justify-end sm:items-stretch sm:justify-end">
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-8">
                            <a href="#" class="px-5 py-3 text-lg font-medium text-white border-b-2 border-transparent hover:border-green-500 hover:text-green-500" aria-current="page">Home</a>
                            <a href="#" class="px-5 py-3 text-lg font-medium text-gray-300 border-b-2 border-transparent hover:border-green-500 hover:text-green-500">Projects</a>
                            <a href="#contact" class="px-5 py-3 text-lg font-medium text-gray-300 border-b-2 border-transparent hover:border-green-500 hover:text-green-500">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="relative isolate overflow-hidden bg-black py-24 sm:py-32 flex items-center justify-center">
        <div class="absolute top-[20%] flex justify-center w-full">
            <img src="https://avatars.githubusercontent.com/u/118234357?v=4" alt="Profile"
                class="w-64 h-64 rounded-full border-4 border-green-500 m-2.5">
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
            <div class="mx-auto max-w-2xl lg:mx-0 mt-96">
                <h2 class="text-4xl font-bold tracking-tight sm:text-6xl text-white">
                    Eu sou <span class="text-gradient-green-blue">Sávio Bortoline</span>
                </h2>
                <p class="mt-6 text-lg leading-8 text-white">
                    <b>Desenvolvedor Backend e Frontend</b>
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-300">
                    Sou apaixonado por tecnologia e desenvolvo sites e aplicações para ajudar empresas a prosperar online. Minhas ferramentas preferidas são:
                </p>
                <p class="mt-6 text-lg leading-8 text-green-400">
                    <b>Wordpress, PHP e React Native.</b>
                </p>
            </div>
            <div class="mt-12">
                <a href="#contact" class="inline-block px-6 py-3 text-base font-semibold text-white bg-green-700 rounded-full hover:bg-green-600">ENTRAR EM CONTATO</a>
            </div>
        </div>
    </div>

    <section class="relative py-24 sm:py-32 text-center text-white" style="background-color: #121212;">
        <h1 class="absolute top-8 left-1/2 transform -translate-x-1/2 text-xl font-semibold tracking-tight mb-2 text-green-500">Portfolio</h1>
        <h2 class="absolute top-11 left-1/2 transform -translate-x-1/2 text-3xl font-bold tracking-tight sm:text-4xl mb-8 mt-6 text-lg leading-8 text-white">Meus Projetos</h2>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative z-10 mt-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <a href="https://projetofuturomilitar.com.br/" target="_blank" rel="noopener noreferrer" class="project-card rounded-lg p-6 shadow-md overflow-hidden block relative">
                    <img src="https://gustavocoimbra.com/wp-content/uploads/sites/27/2024/08/projeto-futuro-militar.png" alt="Projeto Futuro Militar" class="mx-auto mb-4 rounded-lg project-image">
                    <div class="project-content">
                        <h3 class="project-title">Website</h3>
                        <p class="project-description">Projeto Futuro Militar</p>
                    </div>
                </a>
                <!-- Adicione mais projetos conforme necessário -->
            </div>
        </div>
    </section>

    <section class="relative isolate overflow-hidden bg-black text-white py-8 flex flex-col items-center justify-center" id="contact">
        <h1 class="text-xl text-green-500 mb-4"><b>Contato</b></h1>
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight mb-8 text-white">Entre em contato</h2>
        <form action="https://api.web3forms.com/submit" method="POST" class="w-full max-w-4xl">
            <input type="hidden" name="access_key" value="595e7157-c115-4632-b9dd-0738aaa9beae">

            <div class="flex flex-wrap mb-6">
                <div class="w-full px-3">
                    <label for="nome" class="block text-sm font-bold mb-2">Nome</label>
                    <input id="nome" type="text" name="nome" placeholder="Seu nome" required
                        class="appearance-none block w-full bg-gray-800 text-white border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-700">
                </div>
            </div>

            <div class="flex flex-wrap mb-6">
                <div class="w-full px-3">
                    <label for="email" class="block text-sm font-bold mb-2">E-mail</label>
                    <input id="email" type="email" name="email" placeholder="Seu e-mail" required
                        class="appearance-none block w-full bg-gray-800 text-white border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-700">
                </div>
            </div>

            <div class="flex flex-wrap mb-6">
                <div class="w-full px-3">
                    <label for="mensagem" class="block text-sm font-bold mb-2">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" placeholder="Sua mensagem" rows="8" required
                        class="appearance-none block w-full bg-gray-800 text-white border border-gray-600 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-700"></textarea>
                </div>
            </div>

            <!-- reCAPTCHA Widget -->
            <div class="flex flex-wrap mb-6">
                <div class="w-full px-3">
                    <div class="g-recaptcha" data-sitekey="6LfwuiIqAAAAALAxRQi1nmUYW_algNUKqHYCcqbL"></div>
                </div>
            </div>

            <div class="flex items-center justify-center">
                <button type="submit" id="submitButton"
                    class="inline-block px-6 py-3 text-base font-semibold text-white bg-green-700 rounded-full hover:bg-green-600">
                    ENVIAR MENSAGEM
                </button>
            </div>
        </form>

    </section>

    <footer class="bg-green-900 text-center py-4" style="background-color: #121212;">
        <p class="text-sm text-white">© Sávio Bortoline 2024 - Todos os direitos reservados.</p>
    </footer>

    <!-- Botão de WhatsApp -->
    <a href="https://api.whatsapp.com/send/?phone=35988545668&text&type=phone_number&app_absent=0" target="_blank"
        class="fixed right-4 bottom-4 z-50 bg-green-800 hover:bg-green-600 text-white p-4 rounded-full shadow-md transition duration-300 flex items-center justify-center"
        style="width: 50px; height: 50px;">
        <i class="fab fa-whatsapp text-xl"></i>
    </a>
    <script>
        const form = document.getElementById('form');
        const result = document.getElementById('result');

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            const object = Object.fromEntries(formData);
            const json = JSON.stringify(object);
            result.innerHTML = "Please wait..."

            fetch('https://api.web3forms.com/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: json
                })
                .then(async (response) => {
                    let json = await response.json();
                    if (response.status == 200) {
                        result.innerHTML = "Form submitted successfully";
                    } else {
                        console.log(response);
                        result.innerHTML = json.message;
                    }
                })
                .catch(error => {
                    console.log(error);
                    result.innerHTML = "Something went wrong!";
                })
                .then(function() {
                    form.reset();
                    setTimeout(() => {
                        result.style.display = "none";
                    }, 3000);
                });
        });
    </script>
</body>

</html>