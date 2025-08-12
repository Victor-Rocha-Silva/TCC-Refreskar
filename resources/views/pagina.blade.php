<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Refreskar - Ar Condicionado Automotivo em Tatuí</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* --- ESTILOS GERAIS E VARIÁVEIS DE COR --- */
        :root {
            --cor-principal: #0077cc; /* Azul mais moderno */
            --cor-fundo-claro: #f0f8ff; /* Azul bem clarinho */
            --cor-texto-escuro: #333;
            --cor-texto-claro: #ffffff;
            --cor-destaque: #ffc107; /* Amarelo para destaque */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            color: var(--cor-texto-escuro);
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: var(--cor-principal);
            font-size: 2em;
        }

        /* --- CABEÇALHO SUPERIOR COM CONTATO --- */
        .header-top {
            background-color: #333;
            color: var(--cor-texto-claro);
            padding: 10px 20px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }
        .header-top a {
            color: var(--cor-texto-claro);
            text-decoration: none;
            margin: 5px 15px;
            font-weight: bold;
        }
        .header-top a:hover {
            color: var(--cor-destaque);
        }

        /* --- SEÇÃO PRINCIPAL (HERO) --- */
        #hero {
            position: relative;
            height: 60vh;
            color: var(--cor-texto-claro);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            
            /* */
            background: url('https://images.unsplash.com/photo-1617097431333-57a1d3553483?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
        }

        #hero::before { /* Camada escura para facilitar a leitura do texto */
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
        }

        #hero * {
            position: relative;
            z-index: 2;
        }

        #hero .logo {
            max-width: 250px;
            margin-bottom: 20px;
        }
        
        #hero h1 {
            font-size: 2.8em;
            margin-bottom: 15px;
        }

        #hero p {
            font-size: 1.2em;
            max-width: 600px;
            margin-bottom: 30px;
        }

        .cta-button {
            background-color: var(--cor-principal);
            color: var(--cor-texto-claro);
            padding: 15px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.2em;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #005fa3;
        }

        /* --- SEÇÃO DE SERVIÇOS E HORÁRIOS --- */
        #servicos {
            background-color: var(--cor-fundo-claro);
        }

        .servicos-container {
            display: flex;
            gap: 30px;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            flex: 1;
            min-width: 300px;
            text-align: center;
        }

        .card h3 {
            color: var(--cor-principal);
            margin-bottom: 15px;
        }
        
        .card ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        .card ul li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        
        .card ul li i {
            color: var(--cor-principal);
            margin-right: 10px;
        }

        /* --- SEÇÃO DE CLIENTES --- */
        #clientes {
            text-align: center;
        }

        .logos-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        
        .logos-container img {
            max-height: 60px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        
        .logos-container img:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        #clientes p {
            font-style: italic;
            max-width: 700px;
            margin: 0 auto;
        }

        /* --- SEÇÃO DE DEPOIMENTOS --- */
        #depoimentos {
            background-color: var(--cor-fundo-claro);
        }

        .depoimento-container {
            display: flex;
            gap: 40px;
            align-items: center;
            flex-wrap: wrap;
        }

        .depoimento-card {
            flex: 1;
            background: white;
            padding: 30px;
            border-left: 5px solid var(--cor-principal);
            border-radius: 0 8px 8px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .depoimento-card blockquote {
            font-size: 1.1em;
            font-style: italic;
            border: none;
            padding: 0;
            margin: 0 0 15px 0;
        }
        
        .depoimento-card .autor {
            font-weight: bold;
            color: var(--cor-principal);
        }

        .mapa-container {
            flex: 1;
            min-width: 300px;
        }
        
        .mapa-container iframe {
            width: 100%;
            height: 350px;
            border: none;
            border-radius: 8px;
        }

        /* --- RODAPÉ --- */
        footer {
            background-color: #333;
            color: var(--cor-texto-claro);
            text-align: center;
            padding: 40px 20px;
        }
        
        footer .social-icons a {
            color: var(--cor-texto-claro);
            font-size: 1.8em;
            margin: 0 15px;
            transition: color 0.3s ease;
        }
        
        footer .social-icons a:hover {
            color: var(--cor-principal);
        }
        
        footer p {
            margin-top: 20px;
        }

        /* --- AJUSTES PARA CELULAR (RESPONSIVO) --- */
        @media (max-width: 768px) {
            #hero h1 {
                font-size: 2em;
            }
            .header-top {
                flex-direction: column;
            }
            .depoimento-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <header class="header-top">
        <div>
            <i class="fas fa-map-marker-alt"></i> Av. das Palmeiras, 123 - Tatuí, SP
        </div>
        <div>
            <a href="https://wa.me/5515999998888" target="_blank">
                <i class="fab fa-whatsapp"></i> (15) 99999-8888
            </a>
            <a href="tel:+551533334444">
                <i class="fas fa-phone"></i> (15) 3333-4444
            </a>
        </div>
    </header>

    <main>

        <section id="hero">
            <img src="https://i.imgur.com/example.png" alt="Logo Refreskar" class="logo">
            
            <h1>Seu Ar Condicionado Automotivo Gelando Como Novo</h1>
            <p>Serviço rápido, diagnóstico preciso e manutenção especializada em Tatuí e região.</p>
            
            <a href="https://wa.me/5515999998888?text=Olá!%20Gostaria%20de%20agendar%20um%20serviço%20para%20o%20meu%20ar%20condicionado." class="cta-button" target="_blank">
                Agendar Agora via WhatsApp
            </a>
        </section>

        <section id="servicos" class="container">
            <h2>Nossos Diferenciais</h2>
            <div class="servicos-container">
                <div class="card">
                    <h3><i class="fas fa-tools"></i> Principais Serviços</h3>
                    <ul>
                        <li><i class="fas fa-snowflake"></i> Carga de Gás Completa</li>
                        <li><i class="fas fa-wind"></i> Limpeza e Higienização do Sistema</li>
                        <li><i class="fas fa-filter"></i> Troca de Filtro de Cabine</li>
                        <li><i class="fas fa-microchip"></i> Diagnóstico Eletrônico de Falhas</li>
                        <li><i class="fas fa-cogs"></i> Reparo de Compressores e Mangueiras</li>
                    </ul>
                </div>
                <div class="card">
                    <h3><i class="fas fa-clock"></i> Horário de Atendimento</h3>
                    <p><strong>Segunda a Sexta:</strong></p>
                    <p>8:00h às 18:00h</p>
                    <br>
                    <p><strong>Sábados:</strong></p>
                    <p>8:00h às 12:00h</p>
                </div>
            </div>
        </section>
        
        <section id="clientes" class="container">
            <h2>Para Quem Já Fizemos Serviço</h2>
            <div class="logos-container">
                <img src="https://i.imgur.com/example-car.png" alt="Carros de Passeio">
                <img src="https://i.imgur.com/example-van.png" alt="Vans e Utilitários">
                <img src="https://i.imgur.com/example-truck.png" alt="Caminhões">
                <img src="https://i.imgur.com/example-tractor.png" alt="Máquinas Agrícolas">
            </div>
            <p>Atendemos carros de passeio, frotas de empresas, vans, caminhões e máquinas agrícolas com a mesma qualidade e atenção.</p>
        </section>
        
        <section id="depoimentos" class="container">
            <h2>O Que Nossos Clientes Dizem</h2>
            <div class="depoimento-container">
                <div class="depoimento-card">
                    <blockquote>"Meu ar não gelava nada. O pessoal da Refreskar identificou o problema e resolveu no mesmo dia. Ótimo serviço e preço justo. Recomendo!"</blockquote>
                    <p class="autor">- Joana S., Cliente de Tatuí</p>
                </div>
                <div class="mapa-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58674.57723326176!2d-47.88612805128713!3d-23.35515259922268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d5328445f523%3A0x7d6f466b8daff68a!2sTatu%C3%AD%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1723049842135!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        
    </main>

    <footer>
        <h2>Refreskar</h2>
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://wa.me/5515999998888" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
        <p>Av. das Palmeiras, 123 - Centro, Tatuí - SP, 18270-000</p>
        <p>&copy; 2025 Refreskar. Todos os direitos reservados.</p>
    </footer>

</body>
</html>