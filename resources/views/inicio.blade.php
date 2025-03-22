<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Importar fuentes de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(to bottom, #ffe6f0, #fff0f5); /* Gradiente rosado suave */
            font-family: 'Poppins', sans-serif;
            position: relative;
            overflow: hidden;
        }

        /* Fondo con corazones decorativos */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"><path d="M25 10 Q30 5, 35 10 Q40 15, 35 20 Q25 30, 15 20 Q10 15, 15 10 Q20 5, 25 10" fill="rgba(255, 102, 179, 0.1)"/></svg>') repeat;
            opacity: 0.3;
            z-index: -1;
        }

        .container {
            text-align: center;
            max-width: 90%;
            position: relative; /* Contenedor relativo para posicionar el botón */
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 15px; /* Bordes más redondeados */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 600px; /* Tamaño grande */
        }

        img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        /* Estilo del botón mejorado */
        button {
            padding: 25px 50px; /* Grande */
            font-size: 26px; /* Texto grande */
            background-color: rgba(255, 153, 204, 0.5); /* Fondo rosado translúcido */
            color: #fff; /* Texto blanco */
            border: 2px dashed #ff66b3; /* Borde punteado rosado */
            border-radius: 12px; /* Bordes redondeados */
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
            position: absolute; /* Posicionamiento absoluto */
            top: 65%; /* Centro del corazón (vertical) */
            left: 50%; /* Centro horizontal */
            transform: translate(-50%, -50%); /* Centrado exacto */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra suave */
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            filter: url(#glow); /* Efecto de brillo */
        }

        button:hover {
            background-color: rgba(255, 102, 179, 0.7); /* Rosado más oscuro al hacer hover */
            transform: translate(-50%, -52%); /* Ajuste al hacer hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        button:active {
            transform: translate(-50%, -50%);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        /* Mejoras de accesibilidad */
        button:focus {
            outline: 3px solid #ff66b3;
            outline-offset: 2px;
        }

        /* Texto adicional */
        .message {
            margin-top: 20px;
            font-family: 'Dancing Script', cursive;
            font-size: 30px;
            color: #ff66b3; /* Rosado oscuro */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .message::after {
            content: '♥';
            font-size: 24px;
            margin-left: 5px;
            color: #ff3366; /* Corazón rojo */
        }

        /* Responsividad */
        @media (max-width: 600px) {
            img {
                width: 350px; /* Tamaño ajustado para pantallas pequeñas */
            }

            button {
                padding: 18px 36px; /* Botón más pequeño */
                font-size: 20px;
                top: 65%; /* Mantiene la posición */
            }

            .message {
                font-size: 24px;
            }

            .message::after {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Definir filtro de brillo para el botón -->
        <svg style="position: absolute; width: 0; height: 0;">
            <defs>
                <filter id="glow">
                    <feGaussianBlur stdDeviation="2" result="glow"/>
                    <feMerge>
                        <feMergeNode in="glow"/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            </defs>
        </svg>

        <!-- Imagen con texto alternativo descriptivo -->
        <img src="{{ asset('img/1.jpg') }}" alt="Hello Kitty sosteniendo un corazón rojo">
        <!-- Botón con atributo aria-label para accesibilidad -->
        <a href="{{ route('flores') }}">
            <button aria-label="Ir a la página de flores">¡Sorpresa aquí!</button>
        </a>
        <!-- Texto adicional -->
        <div class="message">Para Katy con todo mi corazoncito</div>
    </div>
</body>
</html>