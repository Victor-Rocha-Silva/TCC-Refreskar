<!DOCTYPE html>
<html lang="pt-br">php

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refreskar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        :root {

            --brand-primary: #50B2EA;
            --brand-light-blue: #e0f2ff;
            --brand-dark: #212529;
            border: 39px;
            border-color: red;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--brand-dark);
        }

        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1621682391036-6138f0d8329d?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            padding: 60px 0;
            color: white;
        }

        .hero-section .logo-container {
            background-color: white;
            padding: 10px 20px;
            border-radius: 12px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .hero-section .logo-text {
            color: var(--brand-primary);
            font-weight: bold;
            font-size: 2rem;
        }

        .hero-section .logo-text span {
            color: #dc3545;
        }

        .hero-box {
            background-color: var(--brand-primary);
            border-radius: 1rem;
        }

        .section-light-blue {
            background-color: var(--brand-light-blue);
        }

        .section-gray {
            background-color: #f8f9fa;
        }

        .info-box {
            background-color: var(--brand-primary);
            color: white;
            border-radius: 1rem;
        }

        .btn-primary {
            background-color: #1384c5ff;
            transition: all 0.5s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #50B2EA;
            transform: scale(1.05);
        }

        .client-logo-box {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 200px;
            background-color: white;
            border-radius: 0.5rem;
            padding: 1rem;
            transition: all 0.5s ease-in-out;
        }

        .client-logo-box:hover {
            background-color: #f0f0f0;
            transform: scale(1.05);
        }

        .client-logo-box:: {
            height: 500px;
        }

        .testimonial-card {
            background-color: white;
            border: 0;
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
        }

        .map-container iframe {
            border-radius: 1rem;
            border: 1px solid #dee2e6;
        }

        /* --- Rodapé --- */
        .footer {
            background-color: var(--brand-dark);
        }

        .footer .social-icon {
            color: white;
            font-size: 1.8rem;
            transition: color 0.5s ease;
        }

        .footer .social-icon:hover {
            color: var(--brand-primary);
        }
    </style>

</head>

<body>

    <header class="hero-section text-center">
        <div class="container">
            <div class="logo-container mb-5">
                <h1 class="logo-text m-0">(REFRESKAR)</h1>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="hero-box p-4 p-md-5">
                        <h2 class="h3">O que a Refreskar faz?</h2>
                        <p class="lead my-3">
                            Somos especialistas em diagnóstico, manutenção e higienização de sistemas de ar condicionado
                            automotivo, garantindo o máximo de conforto e qualidade do ar para você e sua família.
                        </p>
                        <a href="#" class="btn btn-light btn-lg mt-3">Agendar serviço</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="section-light-blue py-5">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <div class="info-box p-4 p-md-5 text-center">
                            <h3 class="h2 mb-4">O horário de atendimento</h3>
                            <p class="h4 fw-normal">8:00H às 12:00H</p>
                            <p class="h4 fw-normal">14:00H às 18:00H</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://placehold.co/600x400/33a2e5/white?text=Técnico+Refreskar"
                            class="img-fluid rounded-3 shadow" alt="Técnico realizando serviço">
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-primary btn-lg">Agendar Agora</a>
                </div>
            </div>
        </section>

        <section class="section-gray py-5">
            <div class="container">
                <h2 class="text-center mb-5">Para quem fizemos serviço</h2>
                <div class="row g-3 justify-content-center">
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo-box shadow-sm">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABNVBMVEU1Njv////YGCM3NTshOD2xIivdFiKGLDEtNzkyNkI5NTbdGB81NjgyMzgwLzUxMjgaGCAvMDLu7u8mJSxHSU4pKjBram0kJSgfHiUfICMvLTTPz89+fn4AAAD39/f+/v+8vLygoaPU1NTXAAvl5ebd3d2zsrVRUVPXAAB7fIEpKizR0dKpq6pCQkTPAADFxsZsbG9aWV0TERyHiI2WlZpUU1k+PUOanJtiYWdqbGwWGBuBgYBSUlHjAADtpaj0//8JBRQcHBsAABEgHirqhX7qsK7WND7hX2vZjo/VLDHy59vy+/HFIx/lqanaV1reZ3LaSFXmiYjspbDmdHXhmJzvy8rmubnehnr92OHsr7XnkY3fZGD45OL12tjrvrPbIy3gSkvplJ3PKD3ZdnrKSk3goZL1v8m8gUzXAAARVUlEQVR4nO1dC2PaRrbWwF3fB3ogCSFhsCRASCAjCxmMMTgm3dukm+Q6bZrG2zRxk253+/9/wj1n9ADXbLKNo1GS1WcshB4jfZozM+ecOTPiuBIlSpQoUaJEiRIlSpQoUaJEiRIlSpQoUaJEiS8LgqaJCaT0O4XwxyDRD/zDqZBIkpoGEAskKEXT6SjFJEazuQBE0UmGxr+C5NgowrObNKU4WbiCoUlFMWy1CQuY48Dneb4AgkJgMmEIHLu6XARDccSIIMDx/AIYqjY7hsQ609kLqsFKSGM0fdYMxQlTgsTyZMYMdZctQzLQ2RKs+gpjhmSqMWUoNlkTJArbTFTHzBmSDtNM1Bz2DEOWLYZ0wp4gUVgqb1q3AIYkYqi8GYMiGHbYNYlCowiC5JRdVaPNCmE4ZsdQPyyEoauyIsjONLwJmxlDeVUIQeIy02rUsBiGY2Z5aFjFMGRWl7I2DTN0WLkWmfovtrEQGDGUmZuGMcwGI4ZS1OsNBgMHoMQwKSyKO3GA880USgaHYjAIZVaat2Ag6kZ9B4wtqO8FHLN9Qn1Xmgb9hz9DZ2dbVCm2fnLxH4f/8Up2TFUQqrgQ4g24gg+pmh5RTU5LkqEfmlr11iW5QjzfJUqUKFHiA1F9F24ckPy46wVZOtkETb/RSN+GqtMjslZdpwtdj5f4nXypWgyVfnZDxlABWWamzHCc5s3s8BCVthQ9xOHhYRsR3oZt4/82XNtFjG+jm+AUMZtNp6vVqtM5OzuLGqy8bNr0IynRfxRmm43xK0jF+GcAhwYThoWZvszMe5V1r+gG52yCavSCTF9CHDbFUFoURZCVL7iYDieK5j4LgrxeSIcTwtRZtPg83yisrQjZMPSLau4JGbHpGm0V5MsnxJqz0UvrhQlpj01NKhbXVrBSaLqFMYzYKDStwtoKVgqNV1gxZKXQFNdWLFh0qvG8XlhbYdYZEASGRXWpgULDREh5OSqKIKOQRN7vFkXQDJj0i/J6UT3b5JBNTcrz/MmiuT1eZxuTHWhuY0EHC20huoUFJD/aVdZnbBQaYIhDrfbF/f19/MLvBGK6Q8x+xVv+MPbru+prr7BhTx8d0CLtCJcbsHEjMsHuFqnLNkI/V/Cy92ULKVf1T3cIqc8qSogBqkZvh5AyC9ZjACnYIaSMTEM22BVa7TCLKOUZ4KtdQsqqJpV8XW8h9C203g99N3y62Ab8Xp7tEFJGsXqCcTIb2+00XG+DweD3ncG0OzjpEG4nfcBJz+82bvT4IsauPdgR9MeouReCwjw0jHTS1o7ywQaMAkql4mzfkImQFmj7khEjF1RhpZDNoNHd6jAbnLKZZmCXOswIbBw01WJGGiIYjXISqkURZKV0F+fMD1tMCBbY3LNSSRsFDeJi1NoXKKTWORtPN68XJaRjNqYvz+9yLLCAwmj6K94vZsw2IWeMYoL5ompSRjLKcWIxEwuQQyZBXgi1GCFV2IXmq4XopMo5M4bFWPdOwG5+D60IwynkGU7RorGfKclcMRwKC+DHDstAKHMwkzXGA2FVrRGddaaz0/HYdV0bR/iE1Nl7eHhI/b8bh7CzG8q7ETuWe+3QHk+bDV8roCtNkEQZR1/heC38/NNhXdlQ7l0jvN8JerquagyHb70T7xyZ98HAlIuZpLREiRIlmCGZo/vuCSVJCMKnFkMSxLhTGtAYaGogqmK1KszvmNbHhtaNZ4wZ3MnNzvPLqWMqYVQ35oo5+BgS8dGgJjN53i16h/eTyEPHVj6xcLVsksSTOz32tKeVupgV/lPKwnRgpbK8i1YlBGA8dM5CStBpfFKhTtppHCIyvdOM2kJkuyNdbnFT1x0VYUO8A0JruQQToIW6vxRP5iBwgmYYKnazJ1skXEPDI3blCiKdOWI7p2RIBTce3z82bvbPC5pKj77pBRZELTZk1Hy9w1DHR6sOYDWC5y4m655+Pm737DOeE7x4S7SvejP7sNceez7Pq9WR2+613bPkrQbVqqadr7phG0zKdjheBZsZgauaGq3cELbb0/PEwIelpM4npzYeH9qnUZ4TCG+6LnBgh5FUh94s7pKKhHSI/mgeJr1UZtNvTdNg365P702oT2+47axu6hHVtK09VhjIMUM/cLfjhe0cp5zn+XQmz5HICdV43UnqnpnOiXFLoqw27g5nvsVmgbcsBbd850kUgjq5Gfhs0ik+eL3zO++JnaMTXEtm8jShARM7Sa2aXLYFYpvs3cqf7R80E+Xgdvy2g+2hcHvq+gEyT0ccK042p3Z+nW3VVDCxx/LmSGAHsue9wy7H/iYixxp3ziZJOL4iCtvpbR5KR+Sk81jgXd73F1a2OS+GanJljE/Sshs57LoOlJlqPX3Ipt3dzGE+GGcjbKCJkSeOYsKZSmBospFkurO/mWHS6mr1r9Izxmq63fJbvmjMutNJNM+xeUnfRGKCEiJnU5t0WlDBQ+shpP2LTsMwuLRDfNryl+kNe3CU3PJ5L+p4vt9qRckOqLdS+bea0KrIfPL0bJUzkmc16K6aQf1+XctVh00FKVT5zdinWSutCROvuNWAakhI7tFdwqHdhLkWj7eBpk2dN0/DrEBOtewVIDPaY68ntFyVq28XW7PXbeQZWCPwydVW2mbAxyBrntKxwTiONZ28xmoApXQHzosLeRh03MMbtY0ZCGlYt6LFFzIz6rcmiXFzVNPT24Y74uX0hQ8dP2EopfNITMTN5DU94C97icSewY7Wor2pSJK1Xiub1j2eHDh7Pp4Ejcvv+7xyi6TdCOZhi6+mFJwsDiTLBmiQs9zGu9nkD2Rn1vuhhDM+TA8Stp/OpjTQ2ZIEY9pWtsNcBnlFD20EE7XutHhszEQ1qfpt0FCkNBAdI33UpIV31axEWuMI6sZ5ct9zQUolggZ3iWkEZDyqWdBacrQat1PJdnJjmAkmFC0hfeFDNhJJmCdbJtAy6uPN4852NMV0dK11ZohVPq1iBwYnpk/kTANCQlLP2AboqaBpB54ny6qqnqaPMCeG1VTnwJh5P6HgpGWimoYTmShZ9W0h3ezIRPugKmlZuDEcJEVJdjqgqneSkx1B0sIBNJ+EtJe8JB6fbuVzLgyN5Mo4MUUreczZtOFVI3nxGurk2Ss9UEjTN7LBo087ys2O1phmOgHeceobIZaSVkRKIHGt9MeMV0+Sx5PfGwOyyT7OpU2XdzN9nhK3pVGl751Bb5XAb3bsDAWgYnD7rWaH+5D0jgHHdn5Ritlt+5vGXclCkzN1B2N50wYbPUyZsg47bgxmUrox9Ta9ZaN7g4c5o5au8PvZKazTVn6mk5zeNjJMG/cs1iWdZaGtb00DtgDrR9tS1jkta76Vbhoz3osrDnW0UWWdUz4RRdnbHiurjIM8vXJ8PCR7EiCpeHQ2rKcM+Wa81+PRHxevN3GvEA/gnsQRokY0c0PbnS1UUPxognBUnIJoLGauHbrdqdfKdGtQgRqrLmy2YXtkqLm6dHhZxjHWcedsMuB60495Y2/yYs0bP5J7A6UUsC9Wq9C+0oOyaItqvA92bl2U56X9eDM9KU+CJUqUKMEQgij+UcVQ+sA+0GK6TvVg1IlaOy4t6vruG5I4LzrZfiiCrr834lDXwcrg5h96l3dAbBcNbo2z4v2pac13tVcCNRy3OuOkhmm+b+5DVTFd3Wc1C+Q20L+ggEV7qNFuGAGFVoJmXOJ10DlFCUSYkyRs2LWN4Yj6J9pRuEOAQxqEjHzs2KHijjEBmojv9aaaqEhTPbaI2/IdxdVlSQBplbI9eQPzY/qVgv40tTmdzjXhZNQ0RrMT3wOVc9Q4GY2M5kRTR9NplBhWoJObFjWqFgtOOFk0GmAwdiMZz48M3NqYTydqo9tdaKArjTDVORjbYdNfLLxgsZgLsOC0+Wg6kvIeRwqKFqjHzSVkYtSg1uL0GCijAehRV8UKVrskjB33ie0IFlCvR0wdewFGxw4JqRURxtMQj1tgh4VgQNiod5+psRthQr+UY9gFRkz3GFL1qIliRjlH9IGWCPcV+dFk4oPltrKJqbaxRwFuA7uHek1q7dqQnaewFvftthS6IdKA4eR4QMIVHD6YQXnugtkRobGMZ2EiLuw2VwpRIrBdFLcODM8gOdiqgC2MHT69nN/NmTCUAUuHmAfwqKM2sc4DuLkDyBr5qzZ2MPAOUXBSBBqAgMbyDMjNVMqwR8ID2DU6gGNacH4XGIYHIACdc+AyN+HHGMUEiamwSwZWKmyFVMYHIbE8Fgw9ERqGpUkszIMpXnWO9wMM5+ixMCTBJA5Kn4t9nDjSJoJHEC7TPFxCbdVRFeKocIwNDMfokwp0i9hgMtp1OGFaR48+MjwYECeIn9HpsZt00OXJEMqh5Wkj2/ah7FimYqYMQ8oQnTVgwwFD44T6FXlex2x1YYuO5fA+lMP6NsOQMnTxXDNmeHyTIeyCE0+mCcNm3gzRP+HhLFyBQw4PdC+CXLvFUIKShN1K2JnGp75h4sGNTv8MAlcH4ez8LxyjYT5ThiCY1YRhiAw7GcPlCBaEHHewxnHzf78qnRJych/qAz4kgwOo35o38nBJGWpQxgzIqCl2NQEdJwzhwXQm6CcjMcMVSJ+FNecsZSipIKU8lDos0JEBDO8jw5ZMNYzjJhb1kJhB3hoAOpwUG91HsNKFlkJGhrSYQb0+iJAh9cbgvrkQT8LQPcZ8sZvoK0SGCyDd6SZ1aZRIaVW0aKkzp/B89Ba0DO4SG5WlQ/1BUCqUjslizj21i96vQUOmPmFzuoTnigzt5ZRYZAK/VNBienSflmT6TANVyBpgW9obENvAsKou7ZAyZwYIZhcZSlXIw1aEMq2cydDEkMESOOu6i+nK8giv63gstJr5YnGyD/LnR51R4POBBxW45wW48OAXepwkLZosAvQ08rDlnKtWhXOvIfOLhdjwAkH0zr1A9heTZkPl6LnB+bkgnZzMeZlvThawxGQDmSZbPTmBK/D78+Ykkpm881BIY0sl6l4SpHQBCma8wsXKZnY4/RIkuirFh1OFVKTH4JY4EYHuircK2eY0/hT3sOBXokSJEh+CfMYufULg/uNLB/enLx1c7RNAfzjML3GuUjyGXz948HAvr9Q/AYb9bwj5y73cks+TYT9FrVKp9fsVukxQoVvp8tHjJ1/f+7/c7iJHhrVfLi8u4HNx+bTW//bi8tFe/7vLi0v4XHz/Q//7l8/6lb3L73+69/zih703e5+jlD4y14kH422//3q9fl7p/5AGHbweEnJ1VHtIyM9HLwjp53cXeTJ8+ODqpblWHlxd1Y6erdfkol97/tuD6/X6twdXf31KyC/92itCvh6+Jj8e5XcXuUppf/joCXk5hKagYq5N8uJepX80vFyTCmz6CyGv+v2f1utXRwSOye8u8q1La9+uCZS2ytEPRLkkr2uVvcoQZBIYDy8IeVQ7erl+UnlLyD8+UymFmvInQr4BXm+erC//ipRgk7n+8QgYXpPXFVyaR88IeVrL8SZyZTj82Vo/hK9L8uTNW7L+rl+pPXqyfnm0V+kr5LpfGa7JC9i5fvSZMgQe1+QxNntQdz77BZp1YPickGe1Sv+tSa6Gtb8RcgH5qORJMNc83KtA9TKEnFxbhKyt9dWQyu2rypva0zW5vHfvV0J+HZrk+ii3xrCSL0Ns7i6GtbfEevzzixePyWNge4Vyu1d7aJLXf//m9dqswNqDz5Zh/1uy/nXYv4ISCO3DC2gmasPH1uO9GsgvlD7IV8jCV+v11/3PluGz68ff9f/2+voBFMb+P66v39bevPjxCktmv//L9dr87e/3Ks9fXz+tfa4M0fADA+3e8Igq2UPIqtoRLlEJHR5BvlbeoF6Qa0WTb10KJOlyD1fi/710AxRGfAb5XT7FJ2Af5ox/A4Z7Xzq4//zSwf3Xlw7uv790cP/zpaPobpMSJUqUKFGiRIkS/wr+H9DCyJq1qCv4AAAAAElFTkSuQmCC"
                                class="img-fluid" alt="Logo Cliente 1">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo-box shadow-sm">
                            <img src="data:image/png;base64,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"
                                class="img-fluid" alt="Logo Cliente 2">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo-box shadow-sm">
                            <img src="data:image/png;base64,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"
                                class="img-fluid" alt="Logo Cliente 3">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo-box shadow-sm">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAwFBMVEX///8AAACXv6S31MD5+fkmhEXx8fH29vb8/PzZ2dnr6+vT49d0dHSSkpKJiYl7so3Kysqs0Ljj4+O7u7tkZGTR0dHP49YWFhYoKChFRUWvr68fgkEzMzO1tbXc3NxZWVmampqBgYGnp6cODg49PT1ubm6NjY3v9vFQUFDBwcGfn5+Dg4Pk8OgtLS05OTkdHR1vrIMzjFHC3Mtio3dLmWUxiU5NmWbo8+yRvp+DuZWuzrhaonN1rIYKfzmTvqBNnWiwtuSKAAASr0lEQVR4nO2ba3uiytKGGTk1CIooHiAgoIggiYpnTTL//1/tqm48ZtYkO7PWevd7Xf18cJpj+qaqq6obRhC4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uL6isvZtpf/Xff+amk3xe2qt6w+3sv3wRpYkqBrKlgQhy2OdnqP5cRjGbf18jZPTc7HlhqFr051Kloexc70xuyjTb/+YlNEb2V8gbH3vyQi7VfduW4sG/d6NGopgvYzH46eGlA2fe+MMTmkMx/15rzd/HhgWu8rsjXq9kSm4wxe4uj/OBUE3p8/z3nw8YUT25HJRYl348ukT29cxg3+KMF3cEbZfftxrpgg+bSSNJ/h9seyof3O4H0p42YRuTMxRtXsU68Nzc6KAOY3bi3oTlVEnt3cyfm/Iv4kwmz8AImGbdYv+ji1nfH8CRTRZJ69754Nr18HsysNdTQIX6cbdvkT9NmH6u1hyR6hNHwGvhEwvloL9GvWfnvqjivlC+BfCZ9C5v2gEF0kufSK95+c57hxrvzcFIyTUZSR8QIRcttN6WjXpzuoQbUp3hFJe9WnU7/fnvybMhOz5x6DhZpmfjC4AF8LR6Hpur/rXgJEY/BgNZvSi6rYXEybtdhwNeqPw94DCobbDLhZorhSbaQF/mNBtqVsn0AQksmOHSHWIpOktoV2NnRez3W7nzx8In4bJJBDU2URTJEURnMEF4Ez41JicnbhvhEOG24EBRqKJo6iKQjT2N6aKYHfoI4lsRVCcfKb/GuzGht0Cu43dTbvY+S42C2wKRavA5nkbiKFZ70p4anFDmLGnPvJxRATjB8L+xApsHS7SdSduRFHos84Ogwthz1LUmBm/b+pSxsLWEEOIblcXMSO+BBXhj/4wih1d+gxQaIqFCPZJj8jZLYGjOMI2EREmbZVgRLQyKaElFCI+AsSW6scbQr/yKurAzssDYa6ws6TMGOPImT8xlqF2IQzhsPXEnA+ekjq8EBLLGPTpRSwcPWmCEp19oz/o5Db51IakhV3t7s82I+IRt1sIU+5hR9kiuI3PQSwF3IZD6f4m48fsD8bCLwn9CjB+SCg3hNqVsIGnXgnd5/uLgJBY13j7Yz7Opc8IoXArMDQCgXRsSQgL28KBOif+Sk083sKQVNJRiztJS/5A6P6a0GVP+UPGvCF07gmvNgwerkFCOPUGEQbk7xGBMD2U2OMDEhwQ5h2N2NqjpWqHVCDvNbiHuICf3R6NuMeStNheCSsvndAN7XEcMkKdjZ6xq+vu+MuErPHiKro7uBLCXxzOL8F3Hn9KWHvHHq/x5wAeScQDNk9oxPIEyHW0b53mlSPCdXEIpjeZNGN/rY8dVfP5LwkdmjKf29BUkq8S6vRefR/uoDauhAqEF9s1plWSND8jJOUCzEFOImzWmmcCYYUExarEEhTDzH6BxHhqumih0U+XmwRVthj4mjP5kA8ZYUYN9wR1imR92YZa7/xYVOdqQ6Ux9QNFIIr7cuM7vyEUigX63uEVeiKugKBoopvuF2C+3euBgBujx7a2u+pU6XBAoy4vJY8UnsdE/1K9PRJWY2foZmE1ir5AaLPbTV3rfBFGGhzR48i3nMpzP7WhsGuim5ZI0EXL0dEH2yWGzJ/gtkeE7W7ByOQAbkpaOK9I1+LlLr+t2hjh2c69ywD6AqE0eLwICKu6G2o55qVz91PClJqrWKJDLpqAcURLpkvqi2ipLo7J4oSxqEZh0aPJqnm5i9S+BvV+75eE5/FJTxl8kVBwr49sztxcI3Hvx506v0/6SCi1fjIiMFcTR5f4Ewfico9uu4RD9fWRCNJiBTuPmAaLE8IfttfbSP656BqEl2zh3xLezAj6Lj0yBUIWPn5gEW6xlB4hIXOJKeTDy0XPMaV91iCv3tSw8Bycj1SPhETEbkvrA+SDPYbUkjrgz1dw23IJzfpPDKGHU4rENPTQgbm5nXto0RPMZp+NoMoWMAPOoJ6GiroiFJQJZRhNM0JTBxKGI3oKteELPR3DhtqhTaxL1eqiQZs9omcYh3acvJwdoh99Ns2nMb9cY/w4vUKPa2iz7hpDzWmFBQ36arHFgblfFxVxukD4lldUN7H9dqZDjGxbUKCF1InmuSoo7XaWtW9WH+w8MiYWnay4kRHDyXZGT8F6VrFok07ZHR+bGk3legwXZfQRtWdJVQISzTVnRjTxlU/4LoTohacFEsolBhW02epUR6J39EpMIvtltyJOFwgveufKFCdPkMqxKWUsOAysv/6b/65uCVe7O8ITVi0iJdw2d0hYImENCU+UsKxuwqq2xLcsK66in/FpzV9JUlGf1JZ/omocQpCR1kj4TgnXZ0LS2iDhGm14uBKukLD1QAiu+XwOc+Pss5K/kuqbYRia7hdP/yahdFyCDdPlClLdXmYYQLQGQqkmtzC5AyFpopeKG0ygdIjSU6k+rNLM468apVp4Gv9+reVPRPNhbSkSYedBpEkZhge1droEQ6VND2OpDJEmXa27aDgkXkNWJE35PA6VeHAHOHa/3OGqIB/8w4TU/7pvYKjitETXfINY2l2CoYoVhpPSg+xQILHw/iaijWFcptvNOZYKqjW5rqQ9zayv+9y/Q1gsMEXUvL0EMQfyYXrAEdbygLi7hZom3cvgtaUHXrx7BWJSk6HMKzbLm3yoOO6sMx1MO1Hs/De9rbz06Z8l7K63YI3TBsJNawOFS/2E/riQ34lU22xhhJ7Qi2teE6MsFAfSYgM2FuXTw70U27aV/zJkKAZU6/P58J8LpkAI0QQmgLs3wNo1vQMOQ/BPcEIRrOvB3KIuQ126W3kQVY8ejMBiDRVC+oqnVpKoWJtcN6CpKsolF5CPpxGiawHoklsIvUIiH+4M+7/3FIBwt0Cna72ddmAiGef8bzDsWhsgLtcyDLu9ByVMuYTBumu+gb++y1AL1Ldvl7mFHs4ajUbUxn4pObZnEGtU3Z8kw+l0mDQyNC3JGnjE1Oiyq4UbUUYyzBahz5BULTTwCiMPmNuSCV6SK1IWDYfZdwlp39Ot90og+0GG6K5lcMJXb7FLD/ISrLmW96m0l+EJlGsYoeQkN3ektvF2F8KI1YgOrjfRzNHLFS0cXpLIswG1GqkmCqF6vSRUWKR5oUC2eYnJ05DWmyqLzVaIc5ffr1b8JeGRND0wiShDooPICZXbuwdOCCw10t1idGl5UIh3T95CSN89eALiZklPXV/vUi3XGkrVGhm6ff9yYQAG1p/PZ51nlD2rIqT50Ll94TIynAthf4iVRO+bhGV9DSZJFx7E0+NSrkGJhmPtIHslpP9NTSJreAJosho4sQdpYoFPoLW8GYYw7aYzgL6vsrdIA+3x9QmdSbBdOCmqFpE76k220Dr3VyTBmZDp24TgiS0CJtvigIS+1zz5HU22LoqTB/m/fJNf0/pKhmbN847g1PKq2L3Kl4oGpbCJXuKzmR3Oun2EnhpRZ35xzoy5LIwnwgq9/CYfKo1q2vdSzaZHpnJHOPoe4X6/BpPAgAOTlEtvtdsB1hEKcMgNLdnbFmTlbWpEXHonCC4ejNiDDMMSQpBc3N6HeWfviZqGvu+yhz8iDeKicl54sgXCehqSat16ZN0QVuusg0zX42p9O7gj/OY43ENXVwX03SulJmAS0YPcUKzkt5Zw8uRm2t3AEygW+ARaHjt1I0JN8EAoxDe1KZ20EQ0mUESBdsRMA25aDVdJCKitO8qVUIqpCft0hbya+rtEOt9yGGfa53PBXxLK8ma/e9/IMimgedwtEOsoy14hLuXlMQXsUwqeuRTTk+ftYWzK6zpgPhJWHKh2tUc3KPWU2bAPhMxNx0rViK9Vm6SzMPNsxnnuGsxhE6UifHG+P/eADi9FCIzyFpoQKYEFSrQmGFIC1nW32MpADId+7mBAyuJuJUMaqclw2cOXCvZ5vc1gmVkx71eMkFBlK7wWm2/Bv1fC4L54Z3t16e6W3xJEjG0XR9VeWMuQ2WsbIIbw6r0X1H9bS0gjgOk1yQGJwbBeLUX4bffhVtW62Yitu18Cx3nZCAkJi6Yhi6o4S74SPrwEp6b7GwjrYKJV/R1M0q2/Qd/rCxmG4dGT38oWeO6haILrdkvE2iFxHazndaEm2KwevsU495W9KqtC6Y8eBNOkfyGsvDORaFSJyV8SjvBzjtHfYUMwkbyvg0mW0t6DYYjWXBQ0joCnLltd8N81RFp5WZZedeqmAMzl/v5bDEG6OOUIq6vzq2hN16smJdTpoujAwt8nS7ghrN4jzzuRYRgR/hhGqP45IfR90yrBkCdwUnlbUmJ0ylMdIum6FNFwKWxvu5An5RZYzzvBFEpeiw+E7aercynnFzG9HA/dELIs0U/OTnolrDLqPFfhmSg5QEZQtf4xIWQFsA6UMhBNwEkX3f0GMTzIDSKylDAsvX2xxENoU1EEJ90j/Lb7ekdYvXpmgy4i1bv6kWHrdvx0JWSvqUbU3HRt5poPq6WQIeRDO3+a9/vzXlv4Y0KYS0D0QP+sdYGwWS4wtIrQPNYAe9EFf/UYVvcENhbBkG8ixttVcUeosjAzZaVzzxeCingwHFfeywivIZN+bXJDeP4MqD8djtmDghrhjwnRCU9dHIZlC7De0V+35TtiHMCazS74o1eHjOLVKFYJxG9dzBXNO0LiU4yeK7GPnF40kj+8XagIK2dEQ+v3hPdvdn+wcar+KeGR+h9Ek2Udo0sNXXOFWHKJQXRfwiEPylWIQThCX0t4GG8YiDbvu9txyEbddW7xI9HP75rQFjSBM8LruhyrwW7XabI7xAEGrD8mxNh/KDGmFGjIFiXGYbbsor/WRHBNWTqh69LkAQX5OcreEt7ND1mWyAWnw3ytNwwU7PqcEZ5fxFWL4neriU5y+f7rOaEvXM6E317GQcI9uua6OF0J6eBkhNBcEtwWa5QQt+nDON5+MaTR4J6w0BHSdqgLdtjBCX4Ok6UsmQ467CNCJaaJwKheQCh5glsTZiTVjeCa6bQTVS8kJHbyl5dfPxJ6OMJw8CHhGl3Ra0JFUxG2kHBN1mfCfReblFC8++pLoSIPG0R3LE1n3ylAS7o7+dxnlW5dbKTajmU59mX7/uTvEb5fCVstasMLYe24/ki4/Ej4PyzmpSc0DIabipCOQyhYl+9f9NL/YSHhoqSxtHmNpUAgdzGWHkQaS1c0lmL2oLGVxtLa7v8HIVYz25J6HUxvvT0dd+Ie8yFWNysRDnkl5sN3zBYnsYk1ORbqi/uM/wvZn32e/K8IC+1l64A9htmft2qhufYwtfCaLRx9rSamE6xpFi3MGTUcuAd6qLwhVC3XkRzXty03c9p+4PiZqs0ajq1IgWL7lh4oCs7QHb8daFC9aPjBj6VqbqaSwJaCQCAWPSOILUI0t60qbTgu6L4v6DbRbTXQSaALuh60XVtQNYVkrkVs39c+mxljXbpp4krGEmuW5f6AlQuaa0mJmri9FukhgJVf9+wQGP1wmy2M2cSPjNhPZm7DCJ2kMYlNw/c7ph66IRybaFnHEkinEWfDzE4iwW5EodOYJa4ymejhVHLGgdOxAmPmqoppGH6Mq8i62YCWq/hxkOSSmQltd2ZMJoHWcZSBGfl5Yn7+DgjNtz5gXm9C8PRWTSRo4mhr4s51c43DcYWHsIxb416vuYDm8ubbRMdwTTNpAEauQaeUqZ/D/MdxplPXTEx48IYVD12VDHJLGxvmOBJ8w84yw4enESVaOG8bA8cfxk4ntCR9kmmzxIA0miW2PY1ixTWz4cxu+IIbwiOJcrcT6wM1g0Ta/vxNM5pns91CjzcLXJk4rZHrRJv0EN1ebc6HTtvzIfnm20QnSYy2AYZKQs2M2uoQsr8ZWVaUw4FYUS0wbWIEZAqEUdKJTMGNlDg3jGEWJ0kcTgYNI4sSw7JMw1JMS58kUWyTtqE7w0luuw0TiPO24OeGT0x4eB1nKGhJFLU/X5zarTwPXA4M49GfDaSLm22gqX5wLzsVfpfY9K4rUc7MNV0j8uOGAz4GpsjCfGK4cUNzh645McFl88ywyNR025PMchtCEAGE0Z6Fs7gNHfVtw5y1zZk/GWbKBPw9T0Lw0oY5SGAENMwoizsTw5/ERhQ2GmYW5YM8ikMj/8IKVVH/tq6FhmpLEAS0wLZVYmuaHhDFtummCpHG0XQ7UARbFzQt0G0JgodAYK8NMSQI4AoII0IAhxUNTsA7OBB28P/aQMsmgQMXQXSxnQAasAfOhH81TdHhT30KyMXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxcXFxfWv6D8DP0JV3FEYwwAAAABJRU5ErkJggg=="
                                class="img-fluid" alt="Logo Cliente 4">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo-box shadow-sm">
                            <img src="data:image/jpeg;base64,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"
                                class="img-fluid" alt="Logo Cliente 5">
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="client-logo-box shadow-sm">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPEBEPEhMWEBEXEBEQFxUXEg8VGA8VGBUWGBUVFRUZISggGBslGxMWITEhJSkrLi4uGyszODMuNygtLisBCgoKDg0OGhAQGyslHiYtLS0vLy0rNys2Ky8rKzc1MC4vLS4vLy0tLS8tLzItLS4tKy0wKy8tLTAvLS0tLSsvK//AABEIAOEA4QMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABgcBBAUCAwj/xABLEAABAwIBBQsICAMFCQAAAAABAAIDBBESBQYhMVEHExQVIkFSVHGS0TJhdIGTobLSNDVTcpGiscMjQrMkM2KCwiVEc4SUwdPh8f/EABsBAQACAwEBAAAAAAAAAAAAAAAEBQECAwYH/8QAOhEAAgECAwUFBwIFBAMAAAAAAAECAxEEEiEFEzFRkTJBUnGBFDNhobHB0ULwBiI0cuEVNdLxFlOS/9oADAMBAAIRAxEAPwC8UAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQBAEAQGtlOvjpoZJ5ThjYwvcfMOYDnJ1ALDdldm9OnKpJQjxZSuVc5q/KTi/fXUtPchkcbnN0f4i0gvO25tsChyqSkemoYKjRVrXfNnP4JP1ubvy/OtbvmScsPCui/A4JP1ubvy/Ol3zGWHhXRfgcEn63N35fnS75jLDwrovwOCT9bm78vzpd8xlh4V0X4HBJ+tzd+X50u+Yyw8K6L8Dgc/W5u/L86xd8xkh4V0X4M8Dn63N35fnS75m2SHhXRfgzwOfrc3fl+dYu+ZnJT8K6L8Dgc/W5u/L86XfMzkp+BdF+BwOfrc3fl+dLvmMlPwLovwOCT9bm78vzpd8xkp+FdF+DHA5+tzd+X51m75muSHhXRfgxwOfrc3fl+dLvmYyQ8K6L8Dgk/W5u/L86zd8zGWHhXRfgcEn63N35fnS75jLDwrovwOCT9bm78vzpd8xlh4V0X4HBJ+tzd+X50u+Yyw8K6L8Dgk/W5u/L86XfMZYeFdF+DZocrZQoDvsVS+Vo0ujkL3tcOfkuJ/EEFZjOUeDOVXC0aqtKKXxWhcma+XY8oUzKlnJvdr2XuYnjymk8+sEHnBB51MhLMrnmcTh5UKjg/+0dZbHAIAgCAIAgCAg+7DKW5NLRqdUQtPnAu79WBca/ZLLZSviL/BldQ2DWgag0D3KKegNqjppJniOJjpHnmaL+s7B5yspN8DSc4wWaTsjvxZj1zhctjYdjpBf8oI966bmRDe0sOnxb9Dl5WyJU0gxTRlrdWMEOafWNXrstZQlHiSKOJpVtIPXkdFmZdcQCGNsQD/AHjFtupHB7RoLvfQ0Mr5EqKMMMzQ3EXAWcHXta+rtC0lBx4kjD4mnWvkfA5wK5ykoq7JaifTAdije20b2zHTdSPJK7xnGWqdzGUxiW1xYXS4sMSCwxLJixjEhrYxiWTVo84kNLDEgGJAMSAYkBLtxZ5Aro/5RLG4DYTjB9zG/gpFDvKfbC1g/gyzFIKUIAgCAIAgCAgm7J9XN9Ji+F641+yWeyff+jK4Y/QOwKKegLlzOyWynpIrDlyMbK93O4uFwL7ADYf+1MpxtE8vja0qtV34LRHcXQiHznhbI1zHgOY4FrmkXDgdYIRq5mMnFprie2NAAA1AAfggbvqQrdLjDm01+lL+jFV7UrypRjl7y92FBSlO/wAPuQlrQNS85OpKbvJ3PTJJcDK0MhZTad0DwYgVJhjK0e+/ma5UeHQbCpUNor9UehjIZhYRe654vERqRjkYjGx9bKDnlzZtZCyZ5c2LI16vQB2qy2dJuUrvkcaq0NQuVqRmjGJZNRiQDEgGJATLcX8rKH34f1lUih3lPtj9Hr9izlIKQIAgCAIAgCAgm7J9XN9Ji+F641+yWeyff+jKyDtHqUU9CX3kX6NT/wDAi+AKfHgjyFb3kvN/U2Z5mxtc9xDWtBcSeYDWsSkopt8DSEJTkoxV2zg0WeNLLKIuWy5wtc4NDXHm1G4v5x+CgUtp0Kk8iuviyzq7HxFOnn0fNLj9CQqxKohm6R5NP96T9Gql212YebPQ7A7VT0+5B1589IEAQBAEAQBAEBq5QjkcBveEkHTe/uUzB140pPN3mso3ONNLOzyo7DbYkfiDZW8MRTn2WjjKmfDjI9EfiV2ucXE9DKe1vvWTXKe25RZ5x6h/2QWPq2sYf5h69H6oLE93FTpr/vw/uqRQ7yl2x+j1+xZ6kFIEAQBAEAQBAQTdk+rm+kxfC9ca/ZLPZPv/AEZWMAYRynYdGoAkqvqzqLsRv6npIpPiy/Mj24NBbVvEVuzAFZ075VfkeNr+9l5v6nF3Q6kR0Wk2DpY2nXp1u/VoUTaMJzoOMO9osNjZfabvuTKx4dH0vc5ee9ircvmj1qqRLJos+6ARR75NZ+9sxfw5tDsIxacO269PTrLIs3Gyv5nkauy8Q6kskdLu2q4X07yOZ7Z2UNSIRFLjLS8n+HKLXDbaxp1FV20060YqnrYt9kYKtQc3UVr270RbjSHpfld4Kn9krcvmXmVmeM4el+V3gnslXl8zO7kOMoel+V3gsey1eRndT5DjKLpe53gnstXkZ3M+Q4yi6Xud4J7LV5Dcz5DjKHpe53gnstXkY3U+Q4zh6Xud4J7LV5GN3IxxpD0vyu8Fn2Sty+hjKxxpD0/yu8E9krcvmjWxjjWDp/lf4J7HW8PzRi6Neepo3+VY+fC8H8QLrvCli4dm/VGjyPic6eCkPkylva1zh+l/epcKmKXahf1SOTjDuZoTRBup7XjzBw9xClwm3xi10+xzaPmtzBae4fqre2n/AHFJw/eUe2f0ev2LSUgpAgCAIAgCAICC7sn1c30mL4XrjX7JZ7J9/wCjKkxaPUop6I/Q+RPotP6PD8DVPjwR4+t7yXm/qRjdaeBQNJ6xH8L1yr9knbJ9/wCjK2zOraYVsXCWtdAcbSHxmQOcWkMGAA35RHMo1NrNqXuMjVdB7rtfB289S53ZtZP56OmP/LwH/Spm7hyXQ8z7bif/AGS/+mUdnTLTvrZ30waKcuZgDWGNoG9sDrMsMPKDuZV1RrM8vA9rgY1I0Iqr2tb3d+/n5FpZi0GTauiiIpoJJGMZFK51PHffQxpddzm8rXrUujGnKC0XQ81tOtjKGIks8km21aT4X04PQ2KA5EnqHUscFO6ZpeHN4G0WwGzuUWWNj51mO5lLKkr+RrVW06VJVpzkou2ufnw0vc9syPk+OWtfJTQCONsbz/Z4iGNEZc4hob5r6E3dNOTaVl8A8VjJwpRhUlmk2u09Xey7zapcm5LlgFSympzCWGQO4NGOSL3OEtvzHmWVCk45klbyOVTEbQp1tzKpPNe1s74v1sRnPiloH5LFVSwxMDpY8L2QMjcRiIPMCNRXCuqbpZoJdC42RUxcce6GInJtJ3Tlfu82jV3LaainjmhmiimnEjpBjhDyIsMbfLIsBiJ0X26FjCqEk1JXfkdf4hniqM41KcpRha2kra3fdfl32JFndkzJtNRzyGngjcYpI43CnZcSuY7e7FreSb8+jSu9WFOMG7LoVGz8RjK+JhFVJNXTazdyevF6+RXW53DTvrmtqWxujMTwBKGFpeSwNADtBdpNudRKCi5/zHo9surHDN0r3uuHLW/DuLSytmdQzQSxMpoYnuY4Ne2GNro3fyuBAvrsp0qMGrJI8lR2liIVIylOTSeqbbuRzc2yNRS0hZPBBJUsmlbI18cL5I7PIAdcEgaCB2LlQhFx1SuTtrYivCtenKSg0rWbSehzajNWlrssPih3uOkjp43yCDe2gvxObvfI0NcTrOuzdtim7jKpZcDdYyrQwalO7m27X5c9fkSStOQKF4pZY6aN5AuHQCQgHUZX4TbtcfOuj3cdHYgQ9trLeRcmvO3T/BG90rMmmgpzXUrREGuZvkbTyHNeQ0OYP5SCRoGixWlWmkrombOx1Sc91U15MrFRy6LT3D9Vb20/7ik4fvKPbP6PX7FpKQUgQBAEAQBAEBBd2T6ub6TF8L1xr9ks9k+/9GU8X6PUoh6M/RmQvotN6PD8DVYR4I8dW95Lzf1IpuxfVzfSYvheuVfsk/ZH9R6Mrzc5yZwnKMAIuyMmod2M8n85Yo1KN5ou9o1t1hpc3p1/xct6jmmOU6lpjeIODQNa8tcGOe1z3Owu1E/xrf5fMpabzvlY87OMPZYNNZszuu+zt+Cm88sn8Gr6qK1m76ZG/dk5Yt2YrepQKscs2j2Ozqu9w0JfC3TQsPca+iVHpR/pRqThOy/Mof4i9/D+37s4OWMk1+Sp58pNMQa6eUDSXnDLISLtIA2c64ThOlJz/epa4XE4TH0oYSWa6S+HZXM5Uuela8Ttc5hEzMD/AOHa7cJbo06NBXJ4ibv8Syp7FwsXBpP+V3WvxuWPmx9SM9Em/wBam0vcejPKbQ/3aX98fsVW/OCofRsoSW7w0ggYeVcEu8q+0qu3snBQ7j2y2fRjiniVfO/jpy4E+3KqLeqSoq8Jc57iGgAkubGDoaBtcXD1KbhI2g5fvQ8t/ElZVMTToX0XH4OX+LG7NRzVWQnRzMcycQOOFwIdjicXM0HpBg/Fb2lKhaS1/BEVWlQ2qpUmnByWq4Wktelyp8h/SqX0mn/qNUKHaXmj1mM9xU/tl9GfokygPDL8otc4DaAQD+GJv4q2ufN8rtmODkzI4p8pVc7RZlRDE/skY5wk/G7D2uK5xhabfMmVcRvMLCD4xb6Ph9yIblP0/Kf3j/WlXHD9qX77yy2v/T0fL7Ig2e7icpVhOn+0PHqFgPcAtJ9pk/Bq2Hh5FkZacTmwwnSeB0XxQru/ddCmoq20H/dL7lOKKehLT3D9Vb20/wC4pOH7yj2z+j1+xaSkFIEAQBAEAQBAQXdk+rm+kxfC9ca/ZLPZPv8A0ZSbzcepRD0qP0vkH6JTejw/A1WEeCPGVveS839SKbsX1c30qL4XrlX7JP2R/UejOduLZNtFUVZHlvbC37rBdxHa5wH+VaYeOjZ321VvKNPlr1/fzPtmnn7NWZRNK8RCFxnEZa14ecBJbclxB5LTfQlOs5TszOM2XCjht7G+bS/LX05nK3ZKDDUU9SNT4jEfvMN2+siQ91c8VHVMn/w9WvTnT5O/X/r5na3GvolR6Uf6ca3wnZfmRP4i9/D+37sjGT6N2Usp1FHLPKIhLVPsJCQMEhwgNdcAWOxRox3lRxbfeXVWssFgYV6cI5rRXDmtdVqcvPDI7KCqdTsc57RGx93Yb3dfYAOZcq0FTllRZbKxksXh1VkkndrT4FnZs/UjPRJv9an0vcejPH7Q/wB2f98fsUsw6BbTzevYqo+iPiXVlKodkfJLN7DTJG2GMBwJa57nDfCQCNrzrVrJujRVuJ86oQjtPaMs98sm3pxslp9kbGYuXn5QpXSyhgeJXxEMDgLANI0EnmdtW1Co6kbs47XwMMHXUKd7NJ6/tFUU+SnxZVFMxjnmKtYbNaXERtlaQ821DCQbqCoNVMq7n9z1lTExngd7JpZoPrl4dSyM+MoyUdXk6rDXbww1Ec7g0lrGSGFoxnUNNnDaWqbWk4yjLu1ueW2dRjXoVqV1meVx81fh9PUmItrUgpysNyn6flP7x/rSqLh+1L9956Da/wDT0fL7Ihmf9I+LKdS1zSC+YyM0H+I19i3B0tJto5xZc6itNk3AzjLDRafBa/CxY+ctM+HNwRSDC9lLRscOi4PiBH46FIkrUreRTYeSnj80eDcvuUuoh6MtPcP1VvbT/uKTh+8o9s/o9fsWkpBSBAEAQBAEAQEF3ZPq5vpMXwvXGv2Sz2T7/wBGUm7UexRD0qP0vkL6LTejw/A1WEeCPF1veS839SJbso/2c30mP4ZFyr9ksNj/ANR6M08n7qNDFFHHvNRdrGtNmU9iQACR/EWqrxS4M7T2PXnJvNHq/wAHKyJn5RU9ZXVDopcE74XRhrIMUYZGWuxAvAFyeYlc41oqTduJMrbLrVaNOmpK8b31et35G1nPuh0dZSTU7Ipg97MLS9kFmm40kh5I1cwSpXjKLVmMFsevQrxqSlGyfc3+D7ZvbotFTUsEDopy9kMcbi1kFnOa0AkEvBOrnCQxEYxSsxitiYitWnUUo2bbV2+9+Rvt3UKAG4hqAdu90/8A5Ft7VDkzl/47inpnj1f/ABIpX50QS5Vir8Em8tDAWlseM2a4aBitrcOdRpVU6qn3F7Q2dVhs+WFuszvrrbivhf5EuG6fQ2tvNRbZggt/UUj2uHJlL/4zi2754dX/AMSLyZ10pyqyvEcm8CLAWYIseLC4Xw4sOtw51H30d7ntoXMdl11s54XMszd73duK77X+R3Mtbo1FUU88IinxPhkY0uZBZrnMIBPLNtJXaeJhKLVmVmF/h/E0a0KjnGyabs3wT8jxkLdFoqamggMU2JkMbHFrILOc1oBIJeCdWspTxMIxSszGM2Fia1edRSjZttXb4N+Rr1G6BRmuhqxFMGsgmicMEOJznmMtPl2Isw6yjrxzqVmI7FxEcNKi5Ru2mtXbS/w+J8c88/qWuopaaOOZr3GIgvbEG8mRrjch5Opp5lmrXjONkMBsithq6qylFpX4X715I2M2d0ungpYYKhkzpY273ia2Nwc1uhhuXA3w2vo1rNOulFJnDGbHqTrSnTas9bP59xCcj5ySUVbJVwjEHPlxMdoEkb34sJtqOo302I5xr5Qm4yuixxGFjWoqnPuS15NIseDdVye5oc+OZjx/Lgjdp/wuDv1spKrxKGWyK6dk015kMz6z8dlFop4mGGnDg44i0vlI8nEBcNAOmwJ020rlUq5tO4scFs9UHnk7y+hDFyLEtPcP1VvbT/uKTh+8o9s/o9fsWkpBSBAEAQBAEAQEF3ZPq5vpMXwvXGv2Sz2T7/0ZSbtR7FEPSo/S+QvotN6PD8DVYR4I8XW95Lzf1ONuj5HkrMnyMiBdIxzZmtGt+G+Jo2nCXWG1aVYuUdCTs+tGlXTlwenUozJ1DLUzNp4ml0rnYQ2x5J1Ev6IHOTqUFJt2R6uVWNOGeb0/fA/QtHm5SRxxx7xC7CxrMRijJdhAFySNJNlPUIpcDx88VWlJyzPX4kK3TcnwRPoRHFHHifPiwxsbisxtr2GlQNpfy0m46F7sOrObqZpN8OLI5wJv2Y7g8F53NV+PzL/OuZ54OzoN7rVrvZ831NszHB2dFvdCbyfN9RmfMyaZg1sA/wAoRzqLi2FNvgzG8M6Le6FjeT5vqZzy5nptI03swG2uzAbLZTqPg2auo1xfzPPB2dFvdasb2fN9TOZmODR9Bvdam9n4n1F2ODR9Bvdam9n4n1MDgsfQb3WpvanifUxYcFj6De61N9U8T6jKjHBI+g3utWd9U8T6mMq5GnlinY2B5DGg8nSGgHygpGEqzdaKbff3/A0qRSjwIwrwjFp7h+qt7af9xScP3lHtn9Hr9i0lIKQIAgCAIAgCAgu7J9XN9Ji+F641+yWeyff+jKTdqPYoh6VH6XyF9FpvR4fgarCPBHi63vJeb+pvLJzPLY2glwABOs2Fz2lDN2ekMFe7q/l5P+/UfA1V20/cs9DsDtVPQl+N2/QtE2G0BeYcDTvw1XxnVYkaFIu88Upd3C3H1KvKt1NuF/5rZr8PQjIyPTPbwmVuDfaiQYDNHCIG43A6/KeMN8PhprPZaMlvZrtN6XtbX5v4Fx7ZXjLc03fLFa5XLM7LovieGZDpIWPmc907OEMijMbmGwOGxNtBIJt6tS1hg8PTi5tuSukrGzx2JqyVOKUXlbeZfux0ct5IilnqKiXSGMiaGb42IEka3POoaQpOJwtOpUlUn3JaXt1ZDweMqU6VOlT4tt3tm6LvIpnDQwQvZvLw9jmYi0PY8xu52lze1U+No0qclundNc72LzA16tWL3sbNPk1dc7MkVVVy0lLQilH94A5xDA7fHENOE9pJ8+jzKzqVKlCjSVBceOnH/sqadGnicRXeIfZ4a2stdfQ0zk/fJKiaqgMbgW3AliihaSBpc8uJudB5IPvXH2feTnOtCz80l6u/0JHtG7hTp4epdeTlJ+Ssvn9jZkzVgbLKcRMTIGShpe1ty4vFjIdTf4evz+ZdHs2iqkn+lJO17cb9/LQ4x2rWlTgrLM5NXtfhbu73qfbIuTKRlVE5hEhdE52DfIpRA9tr3I1+VoPmK3w2Hw8aycHdtcLp2/fcc8XicTPDyU1ZJ2vZxzJ/vU51FkyllxymOQRunwNdJNFG0agQDcue7Fi0AebmK4U8NQneeV2btq0l+W/Ql1cViKdqalHMo3aUW3+ErW7/AIn3qM3aWFtU+QyFkUkdsJbiLXNYcOnRrcRfYtpYChTVSUr2i10sjnDaOIqulGGW8k+PNN6/I9VWbNPHJNIS8wR07JsAIxEnHoxbOR79ehZns+jCcpO+VK9uv4MU9p16kIQVs8pON+7S3dz1Ixn3k2KGljmixCOaMPDXWJZZ0Z1845Y/BcvZ4U61KdO9pXdn3af5JmFxNSqqlOpbNB2uu/8Adiu1YnYtPcP1VvbT/uKTh+8o9s/o9fsWkpBSBAEAQBAEAQEF3ZPq5vpMXwvXGv2Sz2T7/wBGUmoh6QvDc2zriqqaKme4NqYmNjLSbGVrRZr2dLQBcawfNa8ulNNW7zzW0MJKlUc0v5X8vgTVditOflzLMFFC6ed4YwA2Gi7zzNYOclaykoq7OtGjOtJRgtTeifiaHargHsuFsc2rOxX+6v8A3mT/AL9R8DVXbT9yy+2D2p+hx5MuVLpI5TJy4wWtOFgsDrFrWPrVA8ZWc1Ny1XAu44GgoSpqOkuOrPtHnJVtLiJAbux6WRkB3SaLck9nPp510jtDEK+vyOctm4ZpLLwVuL4cnrqfOny/VR75hlPLdicSGnlari40GwA0bBsWkMdXhmtLjxN6mz8PPLmj2dF5fc9DOGq3x0m+Xc5oa4FjC14F7Xba3OVlY+upOV+PwMPZ2HyKGXRarV6epp19fLUPxyuxOtYaAA0bABoC41q860s03c70KFOjHLTVkbeT84KqnZvcclmabAta7DfXa40LtRx1ejHLF6HCvs/D15Z5x16GIcvVLN8/iYsbsbsTWOu7QARcaNQ/AbFiGOrxvrx111MzwGHll/l7Ois2tPQ9DOGqx75vl3b2IzdrLOaCTZwtY6zp16Vn2+vmzX1tbhx8zH+nYfJky6Xvxej+B5dl6pMrJt85bWlrbNaGtadYDbW/+eYLDx1d1FUvqunQysBh1TdPLo9Xrrfz4n0OclXZwxjS7H5EfJda126OT6lu9o19dflw8jT/AE3Dafy8Fbi9V8eZ8qrLtRK2Rj3gtkwl/IYMWGwGoaPJC0nja01KLfHjob08DQpyjKK1jw1feexnDVb5vu+crAI/JZZzQSQC21jrOlZ9vr5899bW9DH+nYfJu8ul78e/zOPnZlGWoie+V2IgNA0ABoxDQANAXSjiKlbERc3z+jN4YenQpuNNWISrk5lp7h+qt7af9xScP3lHtn9Hr9i0lIKQIAgCAIAgCAg27E0nJwOypiJ82hw/Uhca/ZLPZP8AUejKTUQ9INh5wbjzHaEB1oM6MoMbhbVzgeeV7rdhdchbKcl3keWEoSd3BdDnVdVJM7HK98rrWxPe55tsu4nQsN34neMYwVopLy0N4ZxVw/3uo/6if5lnNLmcvZqPgj0R8anKtTNhMs8spbctxyyPwX14bnR6lpP+ZWlr5nanCFPsRS8lY8Ctl+0f33LjuKfhXQkKTM8Nl+0f33LG4p+FdDZSM8Ml+0f33JuKfhXQ2zGeGS/aP77ljcU/Cuhm44ZL9o/vuTcU/CuguY4ZL9o/vuWdxT8K6GMxjhkv2j++5NxT8K6GHIwa2X7R/fcs7in4V0NHIwa2X7R/fcs7il4V0NHNnnhsv2j++7xWdxS8K6Gmd8xw2X7R/fd4puKXhXQZpcxw2X7R/fd4puKXhXQZnzPL6qRwsXuI2FziD6lmNGnF3UVfyMOTZ8l0MFqbh7ThrTzYoB67SeIUnD95R7Z4w9S0VIKQIAgCAIAgCA52cGSWVtNLSv0Ne21+g4EFrh2OAPqWso5lY60Kzo1FNdx+esuZGqKGUw1DCx19DtOCQdJjuce8c4ChSi4uzPW0a0K0c0Hf7eZzsQ2rU7WYxDagsxiG1BZjENqCzM4htQWZkPG1YMq5nGNqG6ZnGNqwbXYxjahm7GMbUF2MY2oYuzGMbUNWzBeNqyatsxiG1ZNdTGIbUFmMQ2oLMYhtQWYxDagszYyfRy1EgihY6WQ6mtFz2nmA850LKTeiNKk4045puyL+zGzc4upGwkh0rnGWUjUXkAWb5gAB6r86mU4ZVY8rjcT7RVzLhwXkSFdCIEAQBAEAQBAEB85oWSDC9oe3Y4Ag+ooZTad0avE1L1eH2UfgsZVyN99U8T6jial6vD7KPwTKuQ31TxPqOJqXq8Pso/BMq5DfVPE+o4mperw+yj8EyrkN9U8T6jial6vD7KPwTKuQ31TxPqOJqXq8Pso/BMq5DfVPE+o4nperw+yj8EyrkN9U8T6jiel6vD7KPwTKuQ31TxPqOJ6Xq8Pso/BMq5DfVPE+o4nperw+yj8EyrkN9U8T6jiel6vD7KPwTKuQ31TxPqOJ6Xq8Pso/BMq5DfVPE+o4mperw+yj8EyrkN9U8T6jial6vD7KPwTKuQ31TxPqOJqXq8Pso/BMq5DfVPE+o4mperw+yj8EyrkN9U8T6jial6vD7KPwTKuQ31TxPqOJqXq8Pso/BMq5DfVPE+psU9LHELRsbGNjWtbf8ESsaylKXFn2WTUIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCAIAgCA/9k="
                                class="img-fluid" alt="Logo Cliente 6">
                        </div>
                    </div>
                </div>

                <div class="row mt-5 text-center">
                    <div class="col-md-4">
                        <h4 class="text-primary">Serviço Rápido</h4>
                        <p>Atendimento ágil para você não perder tempo e voltar a rodar com conforto.</p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-primary">Peças de Qualidade</h4>
                        <p>Trabalhamos apenas com peças e componentes de primeira linha para garantir a durabilidade.
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h4 class="text-primary">Garantia</h4>
                        <p>Todos os nossos serviços contam com garantia, trazendo mais segurança para você.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="section-light-blue py-5">
            <div class="container">
                <h2 class="text-center mb-5">Depoimentos</h2>
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="card testimonial-card shadow-sm p-3 mb-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="..." class="rounded-circle testimonial-avatar" alt="Avatar cliente">
                                    <div class="ms-3">
                                        <h5 class="card-title mb-0">Joana Silva</h5>
                                        <p class="card-subtitle text-muted">Cliente Satisfeita</p>
                                    </div>
                                </div>
                                <p class="card-text">"Serviço impecável! Meu ar condicionado voltou a gelar como se
                                    fosse novo. O atendimento foi rápido e muito profissional. Recomendo a todos!"</p>
                            </div>
                        </div>
                        <div class="card testimonial-card shadow-sm p-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="..." class="rounded-circle testimonial-avatar" alt="Avatar cliente">
                                    <div class="ms-3">
                                        <h5 class="card-title mb-0">Marcos Andrade</h5>
                                        <p class="card-subtitle text-muted">Cliente Satisfeito</p>
                                    </div>
                                </div>
                                <p class="card-text">"Levei meu carro com um problema complexo no ar que outras oficinas
                                    não resolveram. A equipe da Refreskar diagnosticou e consertou em um dia.
                                    Excelente!"</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3662.9007180109215!2d-47.86274220898079!3d-23.355611202240627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d922fc7f8a15%3A0xfc8c605b932c8e24!2sR.%20Dr.%20Prudente%20de%20Moraes%2C%201661%20-%20Jardim%20Modena%2C%20Tatu%C3%AD%20-%20SP%2C%2018276-000!5e0!3m2!1spt-BR!2sbr!4v1752623297807!5m2!1spt-BR!2sbr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer py-4">
        <div class="container text-center">
            <a href="#" class="social-icon mx-2"><i class="bi bi-instagram"></i></a>
            <a href="#" class="social-icon mx-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="social-icon mx-2"><i class="bi bi-whatsapp"></i></a>
            <p class="text-white-50 mt-3 mb-0">&copy; 2025 Progam. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>