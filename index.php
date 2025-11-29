<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaPM - Plataformas Tecnológicas</title>
    <style>
        /* Variables de colores - Morado elegante y oscuro */
        :root {
            --primary-color: #4a1e6a;
            --secondary-color: #5d2a87;
            --accent-color: #7b3ca6;
            --dark-color: #32174d;
            --light-color: #f8f5fc;
            --text-color: #333;
            --text-light: #fff;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            --transition: all 0.3s ease;
        }

        /* Reset y estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--light-color);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .page {
            display: none;
            min-height: 100vh;
            padding-top: 80px;
        }

        .page.active {
            display: block;
        }

        .section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--dark-color);
            font-size: 2.5rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: var(--accent-color);
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: var(--primary-color);
            color: var(--text-light);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 600;
            text-align: center;
        }

        .btn:hover {
            background-color: var(--dark-color);
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        /* Header y navegación */
        header {
            background-color: var(--dark-color);
            color: var(--text-light);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text-light);
        }

        .logo span {
            color: var(--accent-color);
        }

        .nav-menu {
            display: flex;
        }

        .nav-menu li {
            margin-left: 30px;
        }

        .nav-menu a {
            font-weight: 500;
            transition: var(--transition);
            position: relative;
            padding: 5px 0;
        }

        .nav-menu a:hover {
            color: var(--accent-color);
        }

        .nav-menu a.active {
            color: var(--accent-color);
        }

        .nav-menu a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--accent-color);
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
        }

        /* Banner */
        .banner {
            background: linear-gradient(rgba(50, 23, 77, 0.85), rgba(50, 23, 77, 0.75)), url('https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            color: var(--text-light);
            text-align: center;
        }

        .banner-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .banner h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .banner p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.8;
        }

        /* Sección de contenido */
        .content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .content-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .content-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .card-img {
            height: 200px;
            overflow: hidden;
        }

        .card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .content-card:hover .card-img img {
            transform: scale(1.1);
        }

        .card-content {
            padding: 25px;
        }

        .card-content h3 {
            margin-bottom: 15px;
            color: var(--dark-color);
            font-size: 1.5rem;
        }

        .card-content p {
            margin-bottom: 20px;
            color: #666;
        }

        /* Sección de temas */
        .topics {
            background-color: #f9f9f9;
        }

        .topic-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .topic-tab {
            padding: 12px 25px;
            background-color: white;
            margin: 0 10px 10px;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
            box-shadow: var(--shadow);
        }

        .topic-tab.active {
            background-color: var(--primary-color);
            color: white;
        }

        .topic-tab:hover:not(.active) {
            background-color: var(--accent-color);
            color: white;
        }

        .topic-content {
            display: none;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .topic-content.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .chapter-nav {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            flex-wrap: wrap;
        }

        .chapter-btn {
            padding: 8px 20px;
            background-color: #f0f0f0;
            border-radius: 20px;
            cursor: pointer;
            transition: var(--transition);
            margin: 5px;
        }

        .chapter-btn.active {
            background-color: var(--primary-color);
            color: white;
        }

        .chapter-btn:hover:not(.active) {
            background-color: var(--accent-color);
            color: white;
        }

        .chapter-content {
            display: none;
        }

        .chapter-content.active {
            display: block;
        }

        .topic-content h2 {
            color: var(--dark-color);
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .topic-content h3 {
            color: var(--primary-color);
            margin: 25px 0 15px;
            font-size: 1.5rem;
        }

        .topic-content h4 {
            color: var(--secondary-color);
            margin: 20px 0 10px;
            font-size: 1.2rem;
        }

        .topic-content p, .topic-content ul {
            margin-bottom: 15px;
        }

        .topic-content ul {
            padding-left: 20px;
            list-style-type: disc;
        }

        .topic-content li {
            margin-bottom: 8px;
        }

        .content-image {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 10px;
            margin: 20px auto;
            display: block;
            box-shadow: var(--shadow);
        }

        .image-caption {
            text-align: center;
            font-style: italic;
            color: #666;
            margin-bottom: 20px;
        }

        .video-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            margin: 30px 0;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            border: none;
        }

        /* Sección de evaluaciones */
        .quiz-section {
            display: none;
        }

        .quiz-section.active {
            display: block;
        }

        .quiz-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .quiz-tab {
            padding: 12px 25px;
            background-color: white;
            margin: 0 10px 10px;
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            font-weight: 500;
            box-shadow: var(--shadow);
        }

        .quiz-tab.active {
            background-color: var(--primary-color);
            color: white;
        }

        .quiz-tab:hover:not(.active) {
            background-color: var(--accent-color);
            color: white;
        }

        .quiz-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: var(--shadow);
            max-width: 800px;
            margin: 0 auto;
        }

        .quiz-question {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .quiz-question:last-child {
            border-bottom: none;
        }

        .quiz-question h3 {
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .quiz-options {
            display: flex;
            flex-direction: column;
        }

        .quiz-option {
            margin-bottom: 10px;
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
        }

        .quiz-option:hover {
            background-color: #e9e9e9;
        }

        .quiz-option.selected {
            background-color: var(--accent-color);
            color: white;
        }

        .quiz-option.correct {
            background-color: #4CAF50;
            color: white;
        }

        .quiz-option.incorrect {
            background-color: #f44336;
            color: white;
        }

        .quiz-submit {
            text-align: center;
            margin-top: 30px;
        }

        .quiz-results {
            display: none;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
            text-align: center;
        }

        .quiz-results h3 {
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .score {
            font-size: 2rem;
            font-weight: bold;
            margin: 20px 0;
            color: var(--primary-color);
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--text-light);
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 1.3rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--accent-color);
        }

        .footer-section p, .footer-section a {
            margin-bottom: 10px;
            display: block;
            transition: var(--transition);
        }

        .footer-section a:hover {
            color: var(--accent-color);
            padding-left: 5px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
/* Estilos para Referencias */
.reference-category {
    display: none;
}

.reference-category.active {
    display: block;
    animation: fadeIn 0.5s ease;
}

.reference-category h4 {
    color: var(--primary-color);
    margin: 25px 0 15px;
    font-size: 1.3rem;
}

.reference-category ul {
    padding-left: 20px;
    list-style-type: disc;
}

.reference-category li {
    margin-bottom: 10px;
    line-height: 1.6;
}

.reference-category a {
    color: var(--secondary-color);
    transition: var(--transition);
}

.reference-category a:hover {
    color: var(--accent-color);
    text-decoration: underline;
}
        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background-color: var(--dark-color);
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 50px;
                transition: var(--transition);
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li {
                margin: 0 0 30px;
            }

            .hamburger {
                display: block;
            }

            .banner h1 {
                font-size: 2.5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .topic-tabs, .quiz-tabs {
                flex-direction: column;
                align-items: center;
            }

            .topic-tab, .quiz-tab {
                width: 80%;
                text-align: center;
                margin-bottom: 10px;
            }

            .chapter-nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .chapter-btn {
                margin: 5px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">Nova<span>PM</span></div>
            <div class="hamburger" id="hamburger">☰</div>
            <nav>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#" class="nav-link active" onclick="showPage('inicio')">Inicio</a></li>
                    <li><a href="#" class="nav-link" onclick="showPage('contenido')">Contenido</a></li>
                    <li><a href="#" class="nav-link" onclick="showPage('temas')">Temas</a></li>
                    <li><a href="#" class="nav-link" onclick="showPage('evaluaciones')">Evaluaciones</a></li>
                    <li><a href="#" class="nav-link" onclick="showPage('contacto')">Contacto</a></li>
                    <li><a href="#" class="nav-link" onclick="showPage('referencias')">Referencias</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Páginas principales -->
    <main>
                <!-- Página de Inicio -->
        <div class="page active" id="inicio">
            <section class="banner">
                <div class="container banner-content">
                    <h1>Plataformas Tecnológicas</h1>
                    <p>Explora el fascinante mundo de los sistemas operativos, su gestión de procesos, memoria y almacenamiento. Un curso completo para entender las bases de la computación moderna.</p>
                    <a href="#" class="btn" onclick="showPage('contenido')">Explorar Contenido</a>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <h2 class="section-title">Bienvenido a NovaPM</h2>
                    <div class="content-grid">
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sistemas Operativos">
                            </div>
                            <div class="card-content">
                                <h3>Sistemas Operativos</h3>
                                <p>Domina los conceptos fundamentales de los sistemas operativos modernos y su funcionamiento.</p>
                                <a href="#" class="btn" onclick="showPage('temas'); showTopic('so');">Comenzar</a>
                            </div>
                        </div>
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gestión de Procesos">
                            </div>
                            <div class="card-content">
                                <h3>Gestión de Procesos</h3>
                                <p>Comprende cómo los sistemas operativos administran y planifican la ejecución de procesos.</p>
                                <a href="#" class="btn" onclick="showPage('temas'); showTopic('procesos');">Aprender Más</a>
                            </div>
                        </div>
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1587202372634-32705e3bf49c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gestión de Memoria">
                            </div>
                            <div class="card-content">
                                <h3>Gestión de Memoria</h3>
                                <p>Aprende sobre la administración de memoria RAM, virtual y técnicas de optimización.</p>
                                <a href="#" class="btn" onclick="showPage('temas'); showTopic('memoria');">Estudiar Ahora</a>
                            </div>
                        </div>
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1597852074816-d933c7d2b988?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gestión de Almacenamiento">
                            </div>
                            <div class="card-content">
                                <h3>Gestión de Almacenamiento</h3>
                                <p>Descubre sistemas de archivos, RAID y tecnologías modernas de almacenamiento.</p>
                                <a href="#" class="btn" onclick="showPage('temas'); showTopic('almacenamiento');">Explorar</a>
                            </div>
                        </div>
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Evaluaciones">
                            </div>
                            <div class="card-content">
                                <h3>Evalúa tu Conocimiento</h3>
                                <p>Pon a prueba lo aprendido con nuestras evaluaciones interactivas y detalladas.</p>
                                <a href="#" class="btn" onclick="showPage('evaluaciones')">Realizar Test</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Página de Contenido -->
        <div class="page" id="contenido">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Contenido del Curso</h2>
                    <p style="text-align: center; margin-bottom: 40px; font-size: 1.1rem;">
                        Este curso cubre los temas fundamentales de los sistemas operativos, organizados en cuatro módulos principales. 
                        Cada módulo contiene información detallada, ejemplos prácticos y recursos multimedia para facilitar el aprendizaje.
                    </p>
                    
                     <div class="content-grid">
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sistemas Operativos">
                            </div>
                            <div class="card-content">
                                <h3>Módulo 1: Introducción a Sistemas Operativos</h3>
                                <p>Conceptos fundamentales, funciones principales, evolución histórica y clasificación de los sistemas operativos.</p>
                                <ul>
                                    <li>• Definición y características</li>
                                    <li>• Funciones principales</li>
                                    <li>• Clasificación y tipos</li>
                                    <li>• Evolución histórica</li>
                                </ul>
                                <a href="#" class="btn" onclick="showPage('temas'); showTopic('so');">Estudiar Módulo</a>
                            </div>
                        </div>
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gestión de Procesos">
                            </div>
                            <div class="card-content">
                                <h3>Módulo 2: Gestión de Procesos</h3>
                                <p>Administración de procesos, planificación, estados, comunicación entre procesos y algoritmos de scheduling.</p>
                                <ul>
                                    <li>• Concepto de proceso</li>
                                    <li>• Estados y transiciones</li>
                                    <li>• Planificación de CPU</li>
                                    <li>• Comunicación entre procesos</li>
                                </ul>
                                <a href="#" class="btn" onclick="showPage('temas'); showTopic('procesos');">Estudiar Módulo</a>
                            </div>
                        </div>
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1587202372634-32705e3bf49c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gestión de Memoria">
                            </div>
                            <div class="card-content">
                                <h3>Módulo 3: Gestión de Memoria</h3>
                                <p>Organización de memoria, asignación, paginación, segmentación, memoria virtual y algoritmos de reemplazo.</p>
                                <ul>
                                    <li>• Jerarquía de memoria</li>
                                    <li>• Asignación de memoria</li>
                                    <li>• Memoria virtual</li>
                                    <li>• Algoritmos de reemplazo</li>
                                </ul>
                                <a href="#" class="btn" onclick="showPage('temas'); showTopic('memoria');">Estudiar Módulo</a>
                            </div>
                        </div>
                        <div class="content-card">
                            <div class="card-img">
                                <img src="https://images.unsplash.com/photo-1597852074816-d933c7d2b988?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Gestión de Almacenamiento">
                            </div>
                            <div class="card-content">
                                <h3>Módulo 4: Gestión de Almacenamiento</h3>
                                <p>Sistemas de archivos, organización de datos, RAID, tecnologías de almacenamiento y gestión de E/S.</p>
                                <ul>
                                    <li>• Sistemas de archivos</li>
                                    <li>• Organización de discos</li>
                                    <li>• Tecnologías RAID</li>
                                    <li>• Almacenamiento en la nube</li>
                                </ul>
                                <a href="#" class="btn" onclick="showPage('temas'); showTopic('almacenamiento');">Estudiar Módulo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Página de Temas -->
        <div class="page" id="temas">
            <section class="section topics">
                <div class="container">
                    <h2 class="section-title">Temas del Curso</h2>
                    <div class="topic-tabs">
                        <div class="topic-tab active" onclick="showTopic('so')">Sistemas Operativos</div>
                        <div class="topic-tab" onclick="showTopic('procesos')">Gestión de Procesos</div>
                        <div class="topic-tab" onclick="showTopic('memoria')">Gestión de Memoria</div>
                        <div class="topic-tab" onclick="showTopic('almacenamiento')">Gestión de Almacenamiento</div>
                    
                    <!-- Contenido de Sistemas Operativos -->
                    <div class="topic-content active" id="so-content">
                        <h2>Introducción a los Sistemas Operativos</h2>
                        
                        <div class="chapter-nav">
                            <div class="chapter-btn active" onclick="showChapter('so', 1)">Capítulo 1: Conceptos Básicos</div>
                            <div class="chapter-btn" onclick="showChapter('so', 2)">Capítulo 2: Funciones Principales</div>
                            <div class="chapter-btn" onclick="showChapter('so', 3)">Capítulo 3: Clasificación</div>
                            <div class="chapter-btn" onclick="showChapter('so', 4)">Capítulo 4: Evolución</div>
                        </div>
                        
                        <!-- Capítulo 1: Conceptos Básicos -->
                        <div class="chapter-content active" id="so-chapter-1">
                            <h3>Definición de Sistema Operativo</h3>
                            <p>Un <strong>sistema operativo (SO)</strong> es un software fundamental que actúa como intermediario entre el usuario y el hardware del sistema de cómputo. Su función principal es gestionar los recursos del hardware y proporcionar un entorno en el que los programas puedan ejecutarse eficientemente.</p>
                            
                            <img src="https://i.imgur.com/0o82MAN.png" alt="Arquitectura de Sistema Operativo" class="content-image">
                            <p class="image-caption">Esquema sobre la Estructura básica de un Sistema Operativo</p>
                            
                            <p>El sistema operativo es el "puente" entre el usuario, las aplicaciones y el hardware. Sin un sistema operativo, una computadora sería simplemente un conjunto de componentes electrónicos sin capacidad de realizar tareas útiles.</p>
                            
                            <h4>Características Fundamentales</h4>
                            <ul>
                                <li><strong>Gestión de recursos:</strong> Administra el CPU, memoria, almacenamiento y dispositivos periféricos</li>
                                <li><strong>Interfaz de usuario:</strong> Proporciona medios para interactuar con el sistema</li>
                                <li><strong>Ejecución de programas:</strong> Carga y ejecuta aplicaciones de usuario</li>
                                <li><strong>Protección y seguridad:</strong> Controla el acceso a recursos del sistema</li>
                            </ul>
                            
                            <h3>Ejemplos de Sistemas Operativos</h3>
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin: 20px 0;">
                                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px;">
                                    <h4>Para computadoras:</h4>
                                    <ul>
                                        <li>Windows</li>
                                        <li>Linux</li>
                                        <li>macOS</li>
                                    </ul>
                                </div>
                                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px;">
                                    <h4>Para dispositivos móviles:</h4>
                                    <ul>
                                        <li>Android</li>
                                        <li>iOS</li>
                                    </ul>
                                </div>
                                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px;">
                                    <h4>Para sistemas embebidos:</h4>
                                    <ul>
                                        <li>FreeRTOS</li>
                                        <li>VxWorks</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Capítulo 2: Funciones Principales -->
                        <div class="chapter-content" id="so-chapter-2">
                            <h3>Funciones Principales del Sistema Operativo</h3>
                            
                            <h4>a) Gestión de Procesos</h4>
                            <p>Asigna y controla la ejecución de programas en la CPU. Coordina la ejecución de procesos concurrentes y la asignación de recursos.</p>
                            <p><strong>Ejemplo:</strong> En Windows, el Administrador de Tareas permite ver y gestionar procesos en ejecución.</p>
                            
                            <h4>b) Gestión de Memoria</h4>
                            <p>Controla el uso de la RAM, asegurando que cada programa tenga el espacio necesario. Implementa mecanismos de memoria virtual para optimizar el rendimiento.</p>
                            <p><strong>Ejemplo:</strong> En sistemas modernos, la memoria RAM se complementa con memoria virtual en el disco.</p>
                            
                            <h4>c) Gestión de Almacenamiento</h4>
                            <p>Organiza y administra los archivos en discos duros y SSD. Maneja sistemas de archivos como NTFS, FAT32, EXT4.</p>
                            <p><strong>Ejemplo:</strong> En Windows, el Explorador de Archivos permite gestionar archivos y carpetas.</p>
                            
                            <h4>d) Gestión de Dispositivos</h4>
                            <p>Administra los periféricos conectados al sistema, como teclado, ratón, impresoras, etc. Usa controladores de dispositivo (drivers) para la comunicación entre hardware y software.</p>
                            <p><strong>Ejemplo:</strong> El Administrador de Dispositivos en Windows permite gestionar hardware conectado.</p>
                            
                            <h4>e) Interfaz de Usuario</h4>
                            <p>Permite la interacción del usuario con el sistema operativo.</p>
                            <p><strong>Tipos:</strong></p>
                            <ul>
                                <li><strong>CLI (Command Line Interface):</strong> Interacción mediante comandos (Ejemplo: Terminal de Linux, CMD en Windows).</li>
                                <li><strong>GUI (Graphical User Interface):</strong> Interacción mediante ventanas, iconos y menús (Ejemplo: Escritorio de Windows, macOS).</li>
                            </ul>
                            
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/fsuroRYmagw?start=0" title="Sistemas Operativos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        
                        <!-- Capítulo 3: Clasificación -->
                        <div class="chapter-content" id="so-chapter-3">
                            <h3>Clasificación de los Sistemas Operativos</h3>
                            
                            <h4>a) Monotarea vs. Multitarea</h4>
                            <p><strong>Monotarea:</strong> Solo permite ejecutar un programa a la vez (Ejemplo: MS-DOS).</p>
                            <p><strong>Multitarea:</strong> Permite la ejecución de múltiples programas simultáneamente (Ejemplo: Windows, Linux).</p>
                            
                            <h4>b) Monousuario vs. Multiusuario</h4>
                            <p><strong>Monousuario:</strong> Solo un usuario puede acceder al sistema a la vez (Ejemplo: Windows en una PC personal).</p>
                            <p><strong>Multiusuario:</strong> Permite que varios usuarios accedan al sistema simultáneamente (Ejemplo: Unix, servidores de red).</p>
                            
                            <h4>c) Sistemas en Tiempo Real</h4>
                            <p>Diseñados para aplicaciones críticas que requieren tiempos de respuesta garantizados.</p>
                            <p><strong>Ejemplo:</strong> Sistemas en aviones, máquinas de control industrial.</p>
                            
                            <h4>d) Sistemas Embebidos</h4>
                            <p>Diseñados para dispositivos con funciones específicas.</p>
                            <p><strong>Ejemplo:</strong> SO en microcontroladores de electrodomésticos y automóviles.</p>
                            
                            <h4>e) Sistemas Operativos Móviles</h4>
                            <p>Optimizados para dispositivos portátiles con batería y pantallas táctiles.</p>
                            <p><strong>Ejemplo:</strong> Android, iOS</p>
                            
                            <img src="https://www.caracteristicasdel.com/wp-content/uploads/2021/02/Caracteristicas-de-los-Sistemas-Operativos.png" alt="Clasificación de Sistemas Operativos" class="content-image">
                            <p class="image-caption">Sistemas Operativos más relevantes en la actualidad</p>
                        </div>
                        
                        <!-- Capítulo 4: Evolución -->
                        <div class="chapter-content" id="so-chapter-4">
                            <h3>Evolución Histórica de los Sistemas Operativos</h3>
                            
                            <h4>Primera Generación (1945-1955)</h4>
                            <p>No existían sistemas operativos. Las computadoras se programaban directamente en lenguaje máquina mediante interruptores y luces.</p>
                            
                            <h4>Segunda Generación (1955-1965)</h4>
                            <p>Aparecen los primeros sistemas por lotes (batch). Los trabajos se agrupaban y procesaban secuencialmente.</p>
                            
                            <h4>Tercera Generación (1965-1980)</h4>
                            <p>Sistemas de tiempo compartido que permitían a múltiples usuarios interactuar simultáneamente con la computadora.</p>
                            
                            <h4>Cuarta Generación (1980-Presente)</h4>
                            <p>Sistemas operativos personales, interfaces gráficas, redes y sistemas distribuidos.</p>
                            
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/3plPtVRf0Os?si=PB4-354ieiv8GPok&amp;start=0" title="Evolución de Sistemas Operativos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <!-- Contenido de Gestión de Procesos -->
                    <div class="topic-content" id="procesos-content">
                        <h2>Gestión de Procesos</h2>
                        
                        <div class="chapter-nav">
                            <div class="chapter-btn active" onclick="showChapter('procesos', 1)">Capítulo 1: Conceptos</div>
                            <div class="chapter-btn" onclick="showChapter('procesos', 2)">Capítulo 2: Estados</div>
                            <div class="chapter-btn" onclick="showChapter('procesos', 3)">Capítulo 3: Planificación</div>
                            <div class="chapter-btn" onclick="showChapter('procesos', 4)">Capítulo 4: Comunicación</div>
                        </div>
                        
                        <!-- Capítulo 1: Conceptos -->
                        <div class="chapter-content active" id="procesos-chapter-1">
                            <h3>Introducción a los Procesos</h3>
                            <p>Un <strong>proceso</strong> es una instancia de un programa en ejecución, con su propio espacio de memoria y contexto.</p>
                            <p><strong>Ejemplo:</strong> Dos ventanas de Google Chrome corresponden a dos procesos diferentes.</p>
                            
                            <img src="https://www.tutonaut.de/wp-content/uploads/2014/10/WS-Virtuelle-Desktops-1.jpg?x84159" alt="Procesos en Ejecución" class="content-image">
                            <p class="image-caption">Multiples procesos ejecutándose en el multitarea de Windows</p>
                            
                            <h3>Diferencia entre Programa y Proceso</h3>
                            <p><strong>Programa:</strong> Conjunto de instrucciones escritas en un lenguaje de programación que indican a la computadora qué hacer.</p>
                            <p><strong>Proceso:</strong> Programa en ejecución que requiere CPU, memoria y otros recursos del sistema.</p>
                            
                            <h3>Componentes de un Proceso</h3>
                            <ul>
                                <li><strong>Contador de programa:</strong> Indica la siguiente instrucción a ejecutar</li>
                                <li><strong>Registros de CPU:</strong> Almacenan el estado actual de ejecución</li>
                                <li><strong>Espacio de memoria:</strong> Área asignada para código y datos</li>
                                <li><strong>Información de E/S:</strong> Dispositivos asignados al proceso</li>
                            </ul>
                        </div>
                        
                        <!-- Capítulo 2: Estados -->
                        <div class="chapter-content" id="procesos-chapter-2">
                            <h3>Ciclo de Vida de un Proceso</h3>
                            <ul>
                                <li><strong>Nuevo (New):</strong> Creación del proceso.</li>
                                <li><strong>Listo (Ready):</strong> Espera turno para la CPU.</li>
                                <li><strong>Ejecución (Running):</strong> CPU en uso.</li>
                                <li><strong>Bloqueado (Waiting):</strong> Espera evento o recurso.</li>
                                <li><strong>Terminado (Terminated):</strong> Finaliza ejecución.</li>
                            </ul>
                            
                            <img src="https://www.profesionalreview.com/wp-content/uploads/2022/09/Estados-de-un-proceso-sistema-operativo.jpg" alt="Estados de un Proceso" class="content-image">
                            <p class="image-caption">Diagrama de transición de estados de un proceso en un sistema operativo</p>
                            
                            <h3>Ejemplo Aplicado</h3>
                            <p>Abrir un programa en Windows/Linux y observar cómo cambia de estado en el Administrador de Tareas o con top en Linux.</p>
                            
                            <h3>Jerarquía de Procesos (Padre e Hijo)</h3>
                            <p><strong>Padre:</strong> Proceso que genera otro.</p>
                            <p><strong>Hijo:</strong> Proceso creado, puede depender o no del padre.</p>
                            <p><strong>Ejemplo:</strong> En Linux, init → genera systemd → genera otros procesos.</p>
                        </div>
                        
                        <!-- Capítulo 3: Planificación -->
                        <div class="chapter-content" id="procesos-chapter-3">
                            <h3>Gestión de Procesos por el Sistema Operativo</h3>
                            
                            <h4>Creación y Eliminación de Procesos</h4>
                            <p><strong>Creación:</strong> Llamadas al sistema (fork() en UNIX/Linux, CreateProcess() en Windows).</p>
                            <p><strong>Eliminación:</strong></p>
                            <ul>
                                <li><strong>Voluntaria:</strong> Usuario cierra la aplicación.</li>
                                <li><strong>Forzada:</strong> SO finaliza un proceso (ej. aplicación congelada).</li>
                            </ul>
                            <p><strong>Ejemplo:</strong> En Linux, al abrir una terminal se crea un proceso hijo de bash.</p>
                            
                            <h4>Importancia de la Asignación de Recursos</h4>
                            <ul>
                                <li><strong>CPU:</strong> Scheduler asigna tiempo de ejecución.</li>
                                <li><strong>Memoria:</strong> Se gestiona con segmentación/paginación.</li>
                                <li><strong>E/S:</strong> Acceso a discos, red y periféricos.</li>
                            </ul>
                            <p><strong>Ejemplo aplicado:</strong> Un videojuego requiere más CPU y GPU que un procesador de texto.</p>
                            
                            <h4>Algoritmos de Planificación</h4>
                            <p>Los algoritmos de planificación determinan qué proceso se ejecuta en la CPU:</p>
                            <ul>
                                <li><strong>FCFS (First-Come, First-Served):</strong> Por orden de llegada</li>
                                <li><strong>Round Robin:</strong> Tiempos compartidos iguales</li>
                                <li><strong>Prioridades:</strong> Según importancia del proceso</li>
                                <li><strong>Multinivel:</strong> Combinación de diferentes estrategias</li>
                            </ul>
                            
                            <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/jxGnKR3JoOw?si=4kvQM7-EIqm0WeJG&amp;start=13" title="Gestión de Procesos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        
                        <!-- Capítulo 4: Comunicación -->
                        <div class="chapter-content" id="procesos-chapter-4">
                            <h3>Comunicación entre Procesos</h3>
                            
                            <h4>Mecanismos de Comunicación</h4>
                            <p>Los procesos necesitan comunicarse para coordinar sus actividades:</p>
                            <ul>
                                <li><strong>Memoria compartida:</strong> Área de memoria accesible por múltiples procesos</li>
                                <li><strong>Passing de mensajes:</strong> Intercambio de datos mediante mensajes</li>
                                <li><strong>Sockets:</strong> Comunicación a través de red</li>
                                <li><strong>Pipes:</strong> Comunicación unidireccional entre procesos</li>
                            </ul>
                            
                            <h4>Problemas de Sincronización</h4>
                            <p>Cuando múltiples procesos acceden a recursos compartidos, pueden surgir problemas:</p>
                            <ul>
                                <li><strong>Condición de carrera:</strong> Resultado depende del orden de ejecución</li>
                                <li><strong>Interbloqueo (deadlock):</strong> Procesos esperando recursos mutuamente</li>
                                <li><strong>Inanición (starvation):</strong> Proceso nunca obtiene los recursos necesarios</li>
                            </ul>
                            
                            <h4>Mecanismos de Sincronización</h4>
                            <p>Para evitar problemas de sincronización, se utilizan:</p>
                            <ul>
                                <li><strong>Semáforos:</strong> Variables especiales que controlan el acceso</li>
                                <li><strong>Monitores:</strong> Estructuras que encapsulan datos y operaciones</li>
                                <li><strong>Exclusiones mutuas (mutex):</strong> Garantizan acceso exclusivo a recursos</li>
                            </ul>
                              <div class="video-container">
                                <iframe src="https://www.youtube.com/embed/TgXE2HUJnNA?si=uL8erNGSr53IDQ8G" title="Hilos en gestion de procesos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        </div>
                        </div>
                    
                    <!-- Contenido de Gestión de Memoria -->
                 
<div class="topic-content" id="memoria-content">
    <h2>Gestión de Memoria</h2>
    
    <div class="chapter-nav">
        <div class="chapter-btn active" onclick="showChapter('memoria', 1)">Capítulo 1: Conceptos Básicos</div>
        <div class="chapter-btn" onclick="showChapter('memoria', 2)">Capítulo 2: Asignación de Memoria</div>
        <div class="chapter-btn" onclick="showChapter('memoria', 3)">Capítulo 3: Memoria Virtual</div>
        <div class="chapter-btn" onclick="showChapter('memoria', 4)">Capítulo 4: Algoritmos</div>
    </div>
    
    <!-- Capítulo 1: Conceptos Básicos -->
    <div class="chapter-content active" id="memoria-chapter-1">
        <h3>Introducción a la Gestión de Memoria</h3>
        <p>La <strong>gestión de memoria</strong> es una de las funciones fundamentales del sistema operativo, encargada de administrar la memoria principal (RAM) y optimizar su uso entre los procesos en ejecución.</p>
        
        <img src="https://th.bing.com/th/id/R.c4b0fc0c48dbc2fc6be741f517e0ac4d?rik=FsM2To0aEEwOiA&riu=http%3a%2f%2fvirtual.umng.edu.co%2fdistancia%2fecosistema%2fovas%2fingenieria_informatica%2farquitectura_de_computadores%2funidad_2%2fmedios%2ffotografias%2fjpg%2fp9f1.jpg&ehk=gjU57MZ4rMVHbGnFB6%2fSEQ3sPNQ%2bd8oDf5ueDL%2f7VeA%3d&risl=&pid=ImgRaw&r=0" alt="Gestión de Memoria" class="content-image">
        <p class="image-caption">Representación de la jerarquía de memoria en sistemas informáticos</p>
        
        <h4>Objetivos de la Gestión de Memoria</h4>
        <ul>
            <li><strong>Asignación y liberación:</strong> Gestionar qué proceso tiene acceso a qué parte de la memoria</li>
            <li><strong>Protección:</strong> Garantizar que un proceso no interfiera en el espacio de memoria de otro</li>
            <li><strong>Optimización:</strong> Lograr un uso eficiente minimizando fragmentación</li>
            <li><strong>Compartición:</strong> Permitir que múltiples procesos accedan a la misma área de memoria</li>
        </ul>
        
        <h3>Jerarquía de Memoria</h3>
        <p>Los sistemas modernos utilizan una jerarquía de memoria para optimizar costo y rendimiento:</p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin: 20px 0;">
            <div style="background: #f0f0f0; padding: 15px; border-radius: 8px; text-align: center;">
                <h4>Memoria Caché</h4>
                <p>Muy rápida, pequeña y cerca del procesador</p>
            </div>
            <div style="background: #e0e0e0; padding: 15px; border-radius: 8px; text-align: center;">
                <h4>Memoria RAM</h4>
                <p>Memoria principal, volátil y de acceso rápido</p>
            </div>
            <div style="background: #d0d0d0; padding: 15px; border-radius: 8px; text-align: center;">
                <h4>Almacenamiento Secundario</h4>
                <p>Discos duros, SSD - no volátil pero más lento</p>
            </div>
        </div>
        
        <h3>Importancia de la Gestión Eficiente</h3>
        <p>Una gestión eficiente de memoria es crucial para:</p>
        <ul>
            <li>Evitar la fragmentación (interna y externa)</li>
            <li>Prevenir el agotamiento de recursos</li>
            <li>Optimizar el rendimiento del sistema</li>
            <li>Garantizar la estabilidad del sistema</li>
        </ul>
    </div>
    
    <!-- Capítulo 2: Asignación de Memoria -->
    <div class="chapter-content" id="memoria-chapter-2">
        <h3>Métodos de Asignación de Memoria</h3>
        
        <h4>Memoria Contigua vs No Contigua</h4>
        <p><strong>Memoria Contigua:</strong> Cada proceso recibe un bloque continuo de memoria</p>
        <p><strong>Ventajas:</strong> Simple y rápida implementación</p>
        <p><strong>Desventajas:</strong> Fragmentación interna y externa</p>
        
        <p><strong>Memoria No Contigua:</strong> El proceso puede ser cargado en bloques no consecutivos</p>
        <p><strong>Ventajas:</strong> Mejor aprovechamiento del espacio</p>
        <p><strong>Desventajas:</strong> Mayor complejidad en la gestión</p>
        
        <h4>Particionamiento Fijo</h4>
        <p>La memoria se divide en particiones de tamaño fijo asignadas a procesos específicos</p>
        <p><strong>Problema:</strong> Uso ineficiente si los procesos no usan toda la partición asignada</p>
        
        <h4>Particionamiento Dinámico</h4>
        <p>Las particiones se crean dinámicamente según las necesidades de cada proceso</p>
        <p><strong>Ventaja:</strong> Asigna particiones del tamaño exacto necesario</p>
        <p><strong>Desventaja:</strong> Puede generar fragmentación externa</p>
        
        <h4>Paginación</h4>
        <p>Divide la memoria en bloques de tamaño fijo llamados páginas</p>
        <ul>
            <li>Memoria física dividida en marcos de página</li>
            <li>Memoria lógica dividida en páginas</li>
            <li>Tabla de páginas para mapeo</li>
        </ul>
        
        <h4>Segmentación</h4>
        <p>Divide la memoria en segmentos de tamaño variable según unidades lógicas</p>
        <ul>
            <li>Código, datos, pila, heap</li>
            <li>Tabla de segmentos para mapeo</li>
            <li>Protección por segmentos</li>
        </ul>
        
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/cxOJnUsI9H4?si=_qScX_b-4gXnqrzC" title="Gestión de Memoria" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    
    <!-- Capítulo 3: Memoria Virtual -->
    <div class="chapter-content" id="memoria-chapter-3">
        <h3>Memoria Virtual</h3>
        
        <h4>Concepto de Memoria Virtual</h4>
        <p>Técnica que permite ejecutar procesos que requieren más memoria que la disponible físicamente, usando espacio en disco como extensión de la RAM.</p>
        
        <h4>Ventajas de la Memoria Virtual</h4>
        <ul>
            <li>Permite ejecutar programas más grandes que la memoria física</li>
            <li>Mejora la utilización de la CPU</li>
            <li>Facilita la multiprogramación</li>
            <li>Proporciona aislamiento entre procesos</li>
        </ul>
        
        <h4>Mecanismo de Paginación por Demanda</h4>
        <p>Las páginas se cargan en memoria solo cuando son referenciadas</p>
        <ul>
            <li>Bit de presencia indica si la página está en memoria</li>
            <li>Fallo de página cuando se referencia una página no cargada</li>
            <li>Intercambio de páginas entre memoria y disco</li>
        </ul>
        
        <h4>Thrashing</h4>
        <p>Ocurre cuando el sistema pasa más tiempo intercambiando páginas que ejecutando procesos útiles</p>
        <p><strong>Causas:</strong> Múltiples procesos activos con alta demanda de memoria</p>
        <p><strong>Solución:</strong> Reducir el grado de multiprogramación o aumentar memoria física</p>
        
        <h4>Tabla de Páginas</h4>
        <p>Estructura que mapea páginas virtuales a marcos físicos</p>
        <ul>
            <li>Almacenada en memoria principal</li>
            <li>Registro base de tabla de páginas (PTBR)</li>
            <li>TLB (Translation Lookaside Buffer) para acelerar acceso</li>
        </ul>
        
        <img src="https://image3.slideserve.com/6149882/slide7-l.jpg" alt="Memoria y paginacion" class="content-image">
        <p class="image-caption">Diagrama visual de memoria y paginación</p>
    </div>
    
    <!-- Capítulo 4: Algoritmos -->
    <div class="chapter-content" id="memoria-chapter-4">
        <h3>Algoritmos de Reemplazo de Páginas</h3>
        
        <h4>FIFO (First-In, First-Out)</h4>
        <p>Reemplaza la página que lleva más tiempo en memoria</p>
        <p><strong>Ventaja:</strong> Simple de implementar</p>
        <p><strong>Desventaja:</strong> Puede eliminar páginas frecuentemente usadas</p>
        
        <h4>LRU (Least Recently Used)</h4>
        <p>Reemplaza la página que no se ha usado por más tiempo</p>
        <p><strong>Ventaja:</strong> Buen rendimiento en la práctica</p>
        <p><strong>Desventaja:</strong> Requiere hardware especializado para implementación eficiente</p>
        
        <h4>Óptimo</h4>
        <p>Reemplaza la página que no se usará durante el período más largo</p>
        <p><strong>Ventaja:</strong> Rendimiento teórico ideal</p>
        <p><strong>Desventaja:</strong> Imposible de implementar en la práctica (requiere conocimiento del futuro)</p>
        
        <h4>Algoritmo del Reloj (Segunda Oportunidad)</h4>
        <p>Variante de FIFO que da una segunda oportunidad a las páginas referenciadas</p>
        <p><strong>Ventaja:</strong> Mejor que FIFO, más simple que LRU</p>
        
        <h3>Fragmentación de Memoria</h3>
        
        <h4>Fragmentación Interna</h4>
        <p>Ocurre cuando hay espacio no utilizado dentro de una partición asignada</p>
        <p><strong>Ejemplo:</strong> Proceso que solicita 50KB pero recibe partición de 64KB</p>
        
        <h4>Fragmentación Externa</h4>
        <p>Ocurre cuando hay suficiente memoria libre en total, pero fragmentada en bloques pequeños</p>
        <p><strong>Solución:</strong> Compactación de memoria</p>
        
        <h3>Técnicas de Optimización</h3>
        <ul>
            <li><strong>Memoria compartida:</strong> Múltiples procesos acceden a la misma área</li>
            <li><strong>Copy-on-write:</strong> Duplicación diferida de páginas</li>
            <li><strong>Paginación anticipada:</strong> Carga páginas antes de ser referenciadas</li>
        </ul>
        
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/MQugdBgKzn0?si=hV2RaRFoQggOM18D&amp;start=60" title="Algoritmos de Memoria" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Contenido de Gestión de Almacenamiento -->
<div class="topic-content" id="almacenamiento-content">
    <h2>Gestión de Almacenamiento</h2>
    
    <div class="chapter-nav">
        <div class="chapter-btn active" onclick="showChapter('almacenamiento', 1)">Capítulo 1: Sistemas de Archivos</div>
        <div class="chapter-btn" onclick="showChapter('almacenamiento', 2)">Capítulo 2: Organización de Discos</div>
        <div class="chapter-btn" onclick="showChapter('almacenamiento', 3)">Capítulo 3: RAID</div>
        <div class="chapter-btn" onclick="showChapter('almacenamiento', 4)">Capítulo 4: Tecnologías</div>
    </div>
    
    <!-- Capítulo 1: Sistemas de Archivos -->
    <div class="chapter-content active" id="almacenamiento-chapter-1">
        <h3>Sistemas de Archivos</h3>
        <p>Un <strong>sistema de archivos</strong> es la estructura que utiliza un sistema operativo para organizar y almacenar archivos en dispositivos de almacenamiento.</p>
        
        <img src="https://informaticoalrescate.com/wp-content/uploads/2019/03/sistema-de-archivos-esquema.jpg" alt="Sistemas de Archivos" class="content-image">
        <p class="image-caption">Esquema de Sistemas de Archivos</p>
        
        <h4>Componentes de un Sistema de Archivos</h4>
        <ul>
            <li><strong>Metadatos:</strong> Información sobre archivos (nombre, tamaño, fecha)</li>
            <li><strong>Estructura de directorios:</strong> Organización jerárquica de archivos</li>
            <li><strong>Métodos de acceso:</strong> Formas de leer y escribir datos</li>
            <li><strong>Mecanismos de protección:</strong> Control de acceso a archivos</li>
        </ul>
        
        <h3>Tipos de Sistemas de Archivos</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin: 20px 0;">
            <div style="background: #f5f5f5; padding: 15px; border-radius: 8px;">
                <h4>Windows</h4>
                <ul>
                    <li>NTFS</li>
                    <li>FAT32</li>
                    <li>exFAT</li>
                </ul>
            </div>
            <div style="background: #f5f5f5; padding: 15px; border-radius: 8px;">
                <h4>Linux</h4>
                <ul>
                    <li>EXT4</li>
                    <li>XFS</li>
                    <li>Btrfs</li>
                </ul>
            </div>
            <div style="background: #f5f5f5; padding: 15px; border-radius: 8px;">
                <h4>macOS</h4>
                <ul>
                    <li>APFS</li>
                    <li>HFS+</li>
                </ul>
            </div>
        </div>
        
        <h4>Características de Sistemas de Archivos Modernos</h4>
        <ul>
            <li><strong>Journaling:</strong> Registro de transacciones para recuperación ante fallos</li>
            <li><strong>Compresión:</strong> Reducción del espacio utilizado</li>
            <li><strong>Cifrado:</strong> Protección de datos sensibles</li>
            <li><strong>Cuotas:</strong> Límites de espacio por usuario</li>
        </ul>
    </div>
    
    <!-- Capítulo 2: Organización de Discos -->
    <div class="chapter-content" id="almacenamiento-chapter-2">
        <h3>Organización de Discos</h3>
        
        <h4>Estructura Física de Discos</h4>
        <p>Los discos duros tradicionales (HDD) están compuestos por:</p>
        <ul>
            <li><strong>Platos:</strong> Discos magnéticos giratorios</li>
            <li><strong>Cabezales:</strong> Lectura/escritura de datos</li>
            <li><strong>Pistas:</strong> Círculos concéntricos en los platos</li>
            <li><strong>Sectores:</strong> Divisiones de las pistas (generalmente 512 bytes)</li>
            <li><strong>Cilindros:</strong> Conjunto de pistas alineadas verticalmente</li>
        </ul>
        
        <h4>Planificación de E/S de Disco</h4>
        <p>Algoritmos para optimizar el acceso a discos:</p>
        
        <h5>FCFS (First-Come, First-Served)</h5>
        <p>Atiende las solicitudes en orden de llegada</p>
        <p><strong>Ventaja:</strong> Justo y simple</p>
        <p><strong>Desventaja:</strong> Puede ser ineficiente</p>
        
        <h5>SSTF (Shortest Seek Time First)</h5>
        <p>Atiende la solicitud más cercana al cabezal actual</p>
        <p><strong>Ventaja:</strong> Reduce tiempo de búsqueda</p>
        <p><strong>Desventaja:</strong> Puede causar inanición</p>
        
        <h5>SCAN (Elevador)</h5>
        <p>El cabezal se mueve en una dirección atendiendo solicitudes hasta el final, luego cambia dirección</p>
        <p><strong>Ventaja:</strong> Equitativo y eficiente</p>
        
        <h5>C-SCAN (Circular SCAN)</h5>
        <p>Similar a SCAN pero solo atiende solicitudes en una dirección</p>
        <p><strong>Ventaja:</strong> Más uniforme que SCAN</p>
        
        <h4>SSD vs HDD</h4>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin: 20px 0;">
            <div style="background: #e8f4fd; padding: 15px; border-radius: 8px;">
                <h5>SSD (Solid State Drive)</h5>
                <ul>
                    <li>Sin partes móviles</li>
                    <li>Mayor velocidad</li>
                    <li>Menor consumo</li>
                    <li>Mayor resistencia a golpes</li>
                    <li>Mayor costo por GB</li>
                </ul>
            </div>
            <div style="background: #f0f0f0; padding: 15px; border-radius: 8px;">
                <h5>HDD (Hard Disk Drive)</h5>
                <ul>
                    <li>Partes móviles mecánicas</li>
                    <li>Menor velocidad</li>
                    <li>Mayor consumo</li>
                    <li>Menor resistencia</li>
                    <li>Menor costo por GB</li>
                </ul>
            </div>
        </div>
        
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/2bkHm7Flshg?si=XwVVYPuGDW1504Qt" title="Organización de Discos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    
    <!-- Capítulo 3: RAID -->
    <div class="chapter-content" id="almacenamiento-chapter-3">
        <h3>Tecnología RAID</h3>
        <p><strong>RAID</strong> (Redundant Array of Independent Disks) es una tecnología que combina múltiples discos físicos en una unidad lógica para mejorar rendimiento y/o redundancia.</p>
        
        <h4>Niveles de RAID Comunes</h4>
        
        <h5>RAID 0 (Striping)</h5>
        <p>Divide datos en bloques distribuidos entre discos</p>
        <p><strong>Ventaja:</strong> Máximo rendimiento</p>
        <p><strong>Desventaja:</strong> Sin redundancia - falla un disco = pérdida total</p>
        
        <h5>RAID 1 (Mirroring)</h5>
        <p>Duplicación exacta de datos en discos espejo</p>
        <p><strong>Ventaja:</strong> Alta redundancia</p>
        <p><strong>Desventaja:</strong> 50% de eficiencia de almacenamiento</p>
        
        <h5>RAID 5 (Striping with Parity)</h5>
        <p>Datos y paridad distribuidos entre todos los discos</p>
        <p><strong>Ventaja:</strong> Balance entre rendimiento y redundancia</p>
        <p><strong>Desventaja:</strong> Rendimiento de escritura reducido</p>
        
        <h5>RAID 10 (1+0)</h5>
        <p>Combinación de mirroring y striping</p>
        <p><strong>Ventaja:</strong> Alto rendimiento y redundancia</p>
        <p><strong>Desventaja:</strong> Alto costo (mínimo 4 discos)</p>
        
        <h4>Comparativa de Niveles RAID</h4>
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
                <thead>
                    <tr style="background-color: var(--primary-color); color: white;">
                        <th style="padding: 10px; border: 1px solid #ddd;">Nivel</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Mínimo Discos</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Redundancia</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Rendimiento</th>
                        <th style="padding: 10px; border: 1px solid #ddd;">Uso Típico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;">RAID 0</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">2</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Ninguna</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Excelente</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Caché, temporales</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;">RAID 1</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">2</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Excelente</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Bueno</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Sistemas críticos</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;">RAID 5</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">3</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Bueno</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Bueno</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Servidores de archivos</td>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border: 1px solid #ddd;">RAID 10</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">4</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Excelente</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Excelente</td>
                        <td style="padding: 10px; border: 1px solid #ddd;">Bases de datos</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Capítulo 4: Tecnologías -->
    <div class="chapter-content" id="almacenamiento-chapter-4">
        <h3>Tecnologías Modernas de Almacenamiento</h3>
        
        <h4>Almacenamiento en la Nube</h4>
        <p>Modelo de almacenamiento donde los datos se guardan en servidores remotos accesibles a través de Internet</p>
        <p><strong>Ventajas:</strong></p>
        <ul>
            <li>Acceso desde cualquier lugar</li>
            <li>Escalabilidad ilimitada</li>
            <li>Copias de seguridad automáticas</li>
            <li>Reducción de costos de infraestructura</li>
        </ul>
        <p><strong>Desventajas:</strong></p>
        <ul>
            <li>Dependencia de conexión a Internet</li>
            <li>Preocupaciones de seguridad y privacidad</li>
            <li>Costos recurrentes</li>
        </ul>
        
        <h4>NAS (Network Attached Storage)</h4>
        <p>Dispositivo de almacenamiento conectado a la red que proporciona acceso a archivos a nivel de red</p>
        <p><strong>Características:</strong></p>
        <ul>
            <li>Protocolos: NFS, SMB/CIFS</li>
            <li>Fácil de configurar y usar</li>
            <li>Ideal para compartir archivos en red local</li>
        </ul>
        
        <h4>SAN (Storage Area Network)</h4>
        <p>Red dedicada de alta velocidad que conecta servidores con unidades de almacenamiento</p>
        <p><strong>Características:</strong></p>
        <ul>
            <li>Protocolos: Fibre Channel, iSCSI</li>
            <li>Acceso a nivel de bloque</li>
            <li>Alto rendimiento y escalabilidad</li>
            <li>Complejo y costoso</li>
        </ul>
        
        <h4>Tendencias Futuras</h4>
        <ul>
            <li><strong>NVMe (Non-Volatile Memory Express):</strong> Protocolo optimizado para SSD</li>
            <li><strong>Almacenamiento persistente en memoria:</strong> Tecnologías como Intel Optane</li>
            <li><strong>Computación en el almacenamiento:</strong> Procesamiento dentro de los dispositivos</li>
            <li><strong>Almacenamiento definido por software:</strong> Abstracción del hardware subyacente</li>
        </ul>
        
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/V7qg1WGSdvc?si=ueLD44LezCnlToBA&amp;start=6" title="Tecnologías de Almacenamiento" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
     </section>
</div>
                      

        <!-- Página de Evaluaciones -->
        <div class="page" id="evaluaciones">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Evaluaciones</h2>
                    
                    <div class="quiz-tabs">
                        <div class="quiz-tab active" onclick="showQuiz('sistemas-operativos')">Sistemas Operativos</div>
                        <div class="quiz-tab" onclick="showQuiz('gestion-procesos')">Gestión de Procesos</div>
                        <div class="quiz-tab" onclick="showQuiz('gestion-memoria')">Gestión de Memoria</div>
                        <div class="quiz-tab" onclick="showQuiz('gestion-almacenamiento')">Gestión de Almacenamiento</div>
                    </div>

                    <!-- Quiz de Sistemas Operativos -->
                    <div class="quiz-section active" id="quiz-sistemas-operativos">
                        <div class="quiz-container">
                            <h3>Evaluación: Sistemas Operativos</h3>
                            <p>Responde las siguientes preguntas para evaluar tu comprensión de los conceptos de sistemas operativos.</p>
                            
                            <div class="quiz-question">
                                <h3>1. ¿Qué es un sistema operativo?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'so1')">a) Un programa que permite navegar por Internet</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so1')">b) Software que actúa como intermediario entre el usuario y el hardware</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so1')">c) Un dispositivo de almacenamiento</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so1')">d) Un tipo de memoria RAM</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>2. ¿Cuál de las siguientes NO es una función principal de un sistema operativo?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'so2')">a) Gestión de procesos</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so2')">b) Gestión de memoria</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so2')">c) Creación de contenido multimedia</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so2')">d) Gestión de almacenamiento</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>3. ¿Qué tipo de sistema operativo permite ejecutar múltiples programas simultáneamente?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'so3')">a) Monotarea</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so3')">b) Multitarea</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so3')">c) Monousuario</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so3')">d) Tiempo real</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>4. ¿Cuál de estos es un ejemplo de sistema operativo móvil?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'so4')">a) Windows 10</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so4')">b) Linux Ubuntu</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so4')">c) Android</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so4')">d) macOS</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>5. ¿Qué función del sistema operativo se encarga de administrar la CPU?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'so5')">a) Gestión de memoria</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so5')">b) Gestión de almacenamiento</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so5')">c) Gestión de procesos</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'so5')">d) Interfaz de usuario</div>
                                </div>
                            </div>
                            
                            <div class="quiz-submit">
                                <button class="btn" onclick="submitQuiz('sistemas-operativos')">Enviar Evaluación</button>
                            </div>
                            
                            <div class="quiz-results" id="quiz-results-so">
                                <h3>Resultados de la Evaluación</h3>
                                <div class="score" id="score-so">0/5</div>
                                <p id="result-message-so"></p>
                                <button class="btn" onclick="resetQuiz('sistemas-operativos')">Intentar Nuevamente</button>
                            </div>
                        </div>
                    </div>

                    <!-- Quiz de Gestión de Procesos -->
                    <div class="quiz-section" id="quiz-gestion-procesos">
                        <div class="quiz-container">
                            <h3>Evaluación: Gestión de Procesos</h3>
                            <p>Responde las siguientes preguntas sobre gestión de procesos en sistemas operativos.</p>
                            
                            <div class="quiz-question">
                                <h3>1. ¿Qué es un proceso en un sistema operativo?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gp1')">a) Un programa instalado en el sistema</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp1')">b) Un programa en ejecución</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp1')">c) Un archivo de configuración</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp1')">d) Un dispositivo de hardware</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>2. ¿Cuál de estos estados NO forma parte del ciclo de vida de un proceso?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gp2')">a) Nuevo</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp2')">b) Listo</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp2')">c) Ejecución</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp2')">d) Compilado</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>3. ¿Qué algoritmo de planificación asigna tiempos iguales a cada proceso?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gp3')">a) FCFS (First-Come, First-Served)</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp3')">b) Round Robin</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp3')">c) Por prioridades</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp3')">d) SJF (Shortest Job First)</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>4. ¿Qué ocurre cuando múltiples procesos esperan recursos que tienen otros procesos?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gp4')">a) Condición de carrera</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp4')">b) Interbloqueo (deadlock)</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp4')">c) Fragmentación</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp4')">d) Paginación</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>5. ¿Qué mecanismo permite a los procesos comunicarse compartiendo un área de memoria?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gp5')">a) Pipes</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp5')">b) Sockets</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp5')">c) Memoria compartida</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gp5')">d) Semáforos</div>
                                </div>
                            </div>
                            
                            <div class="quiz-submit">
                                <button class="btn" onclick="submitQuiz('gestion-procesos')">Enviar Evaluación</button>
                            </div>
                            
                            <div class="quiz-results" id="quiz-results-gp">
                                <h3>Resultados de la Evaluación</h3>
                                <div class="score" id="score-gp">0/5</div>
                                <p id="result-message-gp"></p>
                                <button class="btn" onclick="resetQuiz('gestion-procesos')">Intentar Nuevamente</button>
                            </div>
                        </div>
                    </div>

                    <!-- Más quizzes para los otros temas -->
                                         <!-- Quiz de Gestión de Memoria -->
                    <div class="quiz-section" id="quiz-gestion-memoria">
                        <div class="quiz-container">
                            <h3>Evaluación: Gestión de Memoria</h3>
                            <p>Responde las siguientes preguntas sobre gestión de memoria en sistemas operativos.</p>
                            
                            <div class="quiz-question">
                                <h3>1. ¿Qué es la memoria virtual?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gm1')">a) Memoria RAM de alta velocidad</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm1')">b) Técnica que usa espacio en disco para extender la memoria RAM</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm1')">c) Memoria caché del procesador</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm1')">d) Memoria de solo lectura</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>2. ¿Qué tipo de fragmentación ocurre cuando hay espacio libre entre bloques de memoria asignados?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gm2')">a) Fragmentación interna</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm2')">b) Fragmentación externa</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm2')">c) Fragmentación dinámica</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm2')">d) Fragmentación estática</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>3. ¿Qué algoritmo de reemplazo de páginas elimina la página que no se ha usado por más tiempo?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gm3')">a) FIFO (First-In, First-Out)</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm3')">b) LRU (Least Recently Used)</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm3')">c) Óptimo</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm3')">d) Random</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>4. ¿En qué consiste la técnica de paginación?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gm4')">a) Dividir memoria en segmentos de tamaño variable</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm4')">b) Dividir memoria en páginas de tamaño fijo</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm4')">c) Asignar memoria contigua a los procesos</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm4')">d) Usar solo memoria física sin virtual</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>5. ¿Qué problema ocurre cuando un proceso necesita más memoria de la disponible físicamente?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gm5')">a) Thrashing</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm5')">b) Deadlock</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm5')">c) Race condition</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm5')">d) Fragmentación</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>6. ¿Qué es la memoria caché?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gm6')">a) Memoria de almacenamiento permanente</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm6')">b) Memoria pequeña y rápida cerca del procesador</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm6')">c) Memoria virtual en disco duro</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm6')">d) Memoria de solo lectura</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>7. ¿Qué ventaja tiene la segmentación sobre la paginación?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'gm7')">a) Es más simple de implementar</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm7')">b) Permite protección por segmentos</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm7')">c) No produce fragmentación</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'gm7')">d) Es más rápida</div>
                                </div>
                            </div>
                            
                            <div class="quiz-submit">
                                <button class="btn" onclick="submitQuiz('gestion-memoria')">Enviar Evaluación</button>
                            </div>
                            
                            <div class="quiz-results" id="quiz-results-gm">
                                <h3>Resultados de la Evaluación</h3>
                                <div class="score" id="score-gm">0/7</div>
                                <p id="result-message-gm"></p>
                                <button class="btn" onclick="resetQuiz('gestion-memoria')">Intentar Nuevamente</button>
                            </div>
                        </div>
                    </div>

                    <!-- Quiz de Gestión de Almacenamiento -->
                    <div class="quiz-section" id="quiz-gestion-almacenamiento">
                        <div class="quiz-container">
                            <h3>Evaluación: Gestión de Almacenamiento</h3>
                            <p>Responde las siguientes preguntas sobre gestión de almacenamiento en sistemas operativos.</p>
                            
                            <div class="quiz-question">
                                <h3>1. ¿Qué es un sistema de archivos?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'ga1')">a) Un programa para editar archivos</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga1')">b) La estructura para organizar y almacenar archivos</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga1')">c) Un tipo de disco duro</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga1')">d) Un protocolo de red</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>2. ¿Qué sistema de archivos es comúnmente usado en Windows?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'ga2')">a) EXT4</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga2')">b) NTFS</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga2')">c) APFS</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga2')">d) HFS+</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>3. ¿Qué nivel de RAID proporciona mirroring (duplicación) de datos?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'ga3')">a) RAID 0</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga3')">b) RAID 1</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga3')">c) RAID 5</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga3')">d) RAID 10</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>4. ¿Qué ventaja principal tienen los SSD sobre los HDD?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'ga4')">a) Mayor capacidad</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga4')">b) Menor costo</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga4')">c) Mayor velocidad</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga4')">d) Mayor durabilidad mecánica</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>5. ¿Qué es el journaling en un sistema de archivos?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'ga5')">a) Un diario de actividades del sistema</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga5')">b) Una técnica para mejorar la recuperación ante fallos</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga5')">c) Un método de compresión de archivos</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga5')">d) Un tipo de cifrado de datos</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>6. ¿Qué tecnología permite acceder a archivos a través de una red?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'ga6')">a) NAS (Network Attached Storage)</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga6')">b) SAN (Storage Area Network)</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga6')">c) RAID</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga6')">d) SSD</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>7. ¿Qué sistema de archivos es típicamente usado en distribuciones Linux?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'ga7')">a) NTFS</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga7')">b) FAT32</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga7')">c) EXT4</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga7')">d) APFS</div>
                                </div>
                            </div>
                            
                            <div class="quiz-question">
                                <h3>8. ¿Qué característica de NTFS permite establecer permisos de acceso?</h3>
                                <div class="quiz-options">
                                    <div class="quiz-option" onclick="selectOption(this, 'ga8')">a) Compresión</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga8')">b) Cifrado</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga8')">c) Listas de control de acceso (ACL)</div>
                                    <div class="quiz-option" onclick="selectOption(this, 'ga8')">d) Journaling</div>
                                </div>
                            </div>
                            
                            <div class="quiz-submit">
                                <button class="btn" onclick="submitQuiz('gestion-almacenamiento')">Enviar Evaluación</button>
                            </div>
                            
                            <div class="quiz-results" id="quiz-results-ga">
                                <h3>Resultados de la Evaluación</h3>
                                <div class="score" id="score-ga">0/8</div>
                                <p id="result-message-ga"></p>
                                <button class="btn" onclick="resetQuiz('gestion-almacenamiento')">Intentar Nuevamente</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

<!-- Página de Fuentes de Consulta -->
<div class="page" id="referencias">
    <section class="section">
        <div class="container">
            <h2 class="section-title">Fuentes de Consulta</h2>
            
            <div class="topic-content active">
                <h3>Recursos y Documentación en Español</h3>
                
                <div class="chapter-nav">
                    <div class="chapter-btn active" onclick="showReferenceCategory('recursos')">Recursos Utilizados</div>
                    <div class="chapter-btn" onclick="showReferenceCategory('videos')">Videos de Apoyo</div>
                    <div class="chapter-btn" onclick="showReferenceCategory('documentacion')">Documentación en Español</div>
                    <div class="chapter-btn" onclick="showReferenceCategory('bibliografia')">Bibliografía Recomendada</div>
                </div>
                
                <!-- Categoría: Recursos Utilizados -->
                <div class="reference-category active" id="recursos-category">
                    <h4>Recursos Utilizados en esta Plataforma</h4>
                    <p>Los siguientes recursos fueron fundamentales para el desarrollo del contenido educativo de NovaPM:</p>
                    
                    <div style="background: #f8f5fc; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>Contenido de Sistemas Operativos</h5>
                        <ul>
                            <li>Conceptos básicos y definiciones de sistemas operativos</li>
                            <li>Clasificación y evolución histórica de los SO</li>
                            <li>Funciones principales y arquitectura básica</li>
                        </ul>
                    </div>
                    
                    <div style="background: #f8f5fc; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>Gestión de Procesos</h5>
                        <ul>
                            <li>Estados y ciclo de vida de los procesos</li>
                            <li>Algoritmos de planificación (FCFS, Round Robin, Prioridades)</li>
                            <li>Comunicación y sincronización entre procesos</li>
                            <li>Problemas de concurrencia (deadlock, race condition)</li>
                        </ul>
                    </div>
                    
                    <div style="background: #f8f5fc; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>Gestión de Memoria</h5>
                        <ul>
                            <li>Jerarquía de memoria y técnicas de asignación</li>
                            <li>Memoria virtual y paginación</li>
                            <li>Algoritmos de reemplazo (FIFO, LRU, Óptimo)</li>
                            <li>Fragmentación y técnicas de optimización</li>
                        </ul>
                    </div>
                    
                    <div style="background: #f8f5fc; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>Gestión de Almacenamiento</h5>
                        <ul>
                            <li>Sistemas de archivos (NTFS, EXT4, APFS)</li>
                            <li>Organización física de discos</li>
                            <li>Tecnologías RAID y almacenamiento en la nube</li>
                            <li>Comparativa SSD vs HDD</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Categoría: Videos de Apoyo -->
                <div class="reference-category" id="videos-category">
                    <h4>Videos Educativos Utilizados</h4>
                    <p>Los siguientes videos fueron incorporados como material de apoyo visual para complementar el aprendizaje:</p>
                    
                    <div style="background: #f0f7ff; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🔗 Sistemas Operativos - Conceptos Fundamentales</h5>
                        <p><strong>Contenido:</strong> Explicación detallada sobre qué son los sistemas operativos, sus funciones principales y su importancia en la computación moderna.</p>
                        <p><strong>Enlace:</strong> <a href="https://www.youtube.com/embed/fsuroRYmagw?start=0" target="_blank">Ver video completo</a></p>
                    </div>
                    
                    <div style="background: #f0f7ff; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🔗 Evolución de los Sistemas Operativos</h5>
                        <p><strong>Contenido:</strong> Recorrido histórico desde los primeros sistemas por lotes hasta los sistemas operativos modernos.</p>
                        <p><strong>Enlace:</strong> <a href="https://www.youtube.com/embed/3plPtVRf0Os?si=PB4-354ieiv8GPok&amp;start=0" target="_blank">Ver video completo</a></p>
                    </div>
                    
                    <div style="background: #f0f7ff; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🔗 Gestión de Procesos - Algoritmos de Planificación</h5>
                        <p><strong>Contenido:</strong> Explicación de diferentes algoritmos de planificación de procesos como FCFS, Round Robin y por prioridades.</p>
                        <p><strong>Enlace:</strong> <a href="https://www.youtube.com/embed/jxGnKR3JoOw?si=4kvQM7-EIqm0WeJG&amp;start=13" target="_blank">Ver video completo</a></p>
                    </div>
                    
                    <div style="background: #f0f7ff; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🔗 Gestión de Memoria - Técnicas y Algoritmos</h5>
                        <p><strong>Contenido:</strong> Profundización en técnicas de gestión de memoria como paginación, segmentación y memoria virtual.</p>
                        <p><strong>Enlace:</strong> <a href="https://www.youtube.com/embed/cxOJnUsI9H4?si=_qScX_b-4gXnqrzC" target="_blank">Ver video completo</a></p>
                    </div>
                    
                    <div style="background: #f0f7ff; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🔗 Almacenamiento - RAID y Tecnologías Modernas</h5>
                        <p><strong>Contenido:</strong> Explicación de tecnologías de almacenamiento incluyendo diferentes niveles de RAID y comparativas.</p>
                        <p><strong>Enlace:</strong> <a href="https://www.youtube.com/embed/V7qg1WGSdvc?si=ueLD44LezCnlToBA&amp;start=6" target="_blank">Ver video completo</a></p>
                    </div>
                </div>
                
                <!-- Categoría: Documentación en Español -->
                <div class="reference-category" id="documentacion-category">
                    <h4>Documentación Especializada en Español</h4>
                    <p>Recursos online especializados en español que profundizan en cada uno de los temas tratados:</p>
                    
                    <div style="background: #f0f8f0; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🧠 Gestión de Memoria</h5>
                        <ul>
                            <li>
                                <a href="https://www.wikiciencias.net/gestion-de-memoria-en-sistemas-operativos-conceptos-esenciales-y-estrategias/" target="_blank">
                                    WikiCiencias - Gestión de Memoria en Sistemas Operativos
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Contenido destacado:</strong> Conceptos esenciales de gestión de memoria, jerarquía de memoria, técnicas de asignación, memoria virtual y algoritmos de reemplazo. Excelente recurso para comprender la administración eficiente de la memoria RAM.
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="background: #fff0f0; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>⚡ Gestión de Procesos</h5>
                        <ul>
                            <li>
                                <a href="https://saberpunto.com/tecnologia/procesos-definicion-y-funcionamiento-en-sistemas-operativos/" target="_blank">
                                    SaberPunto - Procesos: Definición y Funcionamiento en Sistemas Operativos
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Contenido destacado:</strong> Definición completa de procesos, estados del proceso, planificación de CPU, comunicación entre procesos y problemas de sincronización. Ideal para entender el ciclo de vida de los procesos.
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="background: #f0f0ff; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>💾 Gestión de Almacenamiento</h5>
                        <ul>
                            <li>
                                <a href="https://tecnored.top/gestion-del-almacenamiento-en-sistemas-operativos-enfoque-clave/" target="_blank">
                                    TecnoRed - Gestión del Almacenamiento en Sistemas Operativos: Enfoque Clave
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Contenido destacado:</strong> Sistemas de archivos, organización de discos, técnicas de E/S, RAID y tecnologías modernas de almacenamiento. Recurso fundamental para comprender la gestión de almacenamiento secundario.
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="background: #fff8f0; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🔗 Recursos Generales</h5>
                        <ul>
                            <li>
                                <a href="https://es.wikipedia.org/wiki/Sistema_operativo" target="_blank">
                                    Wikipedia - Sistemas Operativos
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    Artículo completo sobre conceptos fundamentales, historia, clasificación y funciones de los sistemas operativos.
                                </p>
                            </li>
                            
                            <li>
                                <a href="https://www.profesionalreview.com/category/sistemas-operativos/" target="_blank">
                                    Profesional Review - Sistemas Operativos
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    Análisis técnico, comparativas y noticias sobre sistemas operativos modernos.
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="margin-top: 30px; padding: 15px; background: #e8f4f8; border-radius: 8px; border-left: 4px solid var(--primary-color);">
                        <h6>💡 Nota sobre las Fuentes</h6>
                        <p style="margin: 0; font-size: 0.9em;">
                            Estas referencias especializadas fueron seleccionadas por su enfoque específico en cada tema y su contenido detallado en español, complementando perfectamente el material presentado en esta plataforma educativa.
                        </p>
                    </div>
                </div>
                
                <div class="reference-category" id="bibliografia-category">
                    <h4>Bibliografía Académica y Documentación Oficial</h4>
                    <p>Fuentes académicas reconocidas y documentación oficial para estudio profundo de los temas:</p>
                    
                    <div style="background: #f5f8fc; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>📚 Libros de Referencia Universitaria</h5>
                        <ul>
                            <li>
                                <strong>"Sistemas Operativos: Una Visión Aplicada"</strong> - Jesús Carretero, Félix García, Pedro de Miguel
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Editorial:</strong> McGraw-Hill | <strong>Enfoque:</strong> Visión práctica y aplicada de los conceptos de sistemas operativos
                                </p>
                            </li>
                            
                            <li>
                                <strong>"Fundamentos de Sistemas Operativos"</strong> - Silberschatz, Galvin, Gagne
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Editorial:</strong> McGraw-Hill | <strong>Enfoque:</strong> Considerado la "biblia" de los sistemas operativos a nivel mundial
                                </p>
                            </li>
                            
                            <li>
                                <strong>"Sistemas Operativos Modernos"</strong> - Andrew S. Tanenbaum
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Editorial:</strong> Pearson | <strong>Enfoque:</strong> Enfoque moderno con casos de estudio de sistemas actuales
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="background: #f8f5fc; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🌐 Documentación Oficial y Recursos Online</h5>
                        <ul>
                            <li>
                                <a href="https://www.kernel.org/doc/html/latest/" target="_blank">
                                    Linux Kernel Documentation
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Fuente:</strong> The Linux Kernel Organization | <strong>Contenido:</strong> Documentación oficial del kernel de Linux
                                </p>
                            </li>
                            
                            <li>
                                <a href="https://docs.microsoft.com/en-us/windows/win32/procthread/processes-and-threads" target="_blank">
                                    Microsoft Docs - Processes and Threads
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Fuente:</strong> Microsoft | <strong>Contenido:</strong> Documentación oficial sobre gestión de procesos en Windows
                                </p>
                            </li>
                            
                            <li>
                                <a href="https://developer.apple.com/library/archive/documentation/System/Conceptual/ManPages_iPhoneOS/" target="_blank">
                                    Apple Developer Documentation
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Fuente:</strong> Apple | <strong>Contenido:</strong> Documentación de sistemas para macOS e iOS
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="background: #fcf5f8; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>🎓 Recursos Académicos y Publicaciones</h5>
                        <ul>
                            <li>
                                <a href="https://dl.acm.org/journal/tocs" target="_blank">
                                    ACM Transactions on Computer Systems (TOCS)
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Fuente:</strong> Association for Computing Machinery | <strong>Contenido:</strong> Publicaciones de investigación en sistemas computacionales
                                </p>
                            </li>
                            
                            <li>
                                <a href="https://www.usenix.org/publications" target="_blank">
                                    USENIX Conference Proceedings
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Fuente:</strong> USENIX Association | <strong>Contenido:</strong> Proceedings de conferencias sobre sistemas operativos
                                </p>
                            </li>
                            
                            <li>
                                <a href="https://ieeexplore.ieee.org/xpl/RecentIssue.jsp?punumber=32" target="_blank">
                                    IEEE Transactions on Computers
                                </a>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    <strong>Fuente:</strong> IEEE Computer Society | <strong>Contenido:</strong> Investigaciones en arquitectura de computadores y sistemas
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="background: #f5fcf5; padding: 20px; border-radius: 10px; margin: 20px 0;">
                        <h5>📖 Material de Estudio Universitario</h5>
                        <ul>
                            <li>
                                <strong>Apuntes de Sistemas Operativos - Universidad de Pamplona</strong>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    Material didáctico utilizado en la asignatura de Plataformas Tecnológicas
                                </p>
                            </li>
                            
                            <li>
                                <strong>Guías de Laboratorio - Ingeniería de Sistemas</strong>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    Prácticas y experimentos con sistemas operativos reales
                                </p>
                            </li>
                            
                            <li>
                                <strong>Presentaciones Académicas - Docente Ing. Eduardo Rueda Fajardo</strong>
                                <p style="font-size: 0.9em; color: #666; margin: 5px 0 15px 0;">
                                    Material de clase desarrollado para la asignatura
                                </p>
                            </li>
                        </ul>
                    </div>
                    
                    <div style="margin-top: 30px; padding: 15px; background: #e8f4f8; border-radius: 8px; border-left: 4px solid var(--primary-color);">
                        <h6>💡 Niveles de Estudio</h6>
                        <p style="margin: 0; font-size: 0.9em;">
                            <strong>Básico:</strong> Libros universitarios | <strong>Intermedio:</strong> Documentación oficial | <strong>Avanzado:</strong> Publicaciones académicas
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
        <!-- Página de Contacto CORREGIDA -->
        <div class="page" id="contacto">
            <section class="section">
                <div class="container">
                    <h2 class="section-title">Contacto</h2>
                    <div class="footer-content">
                        <div class="footer-section">
                            <h3>NovaPM</h3>
                            <p>Plataforma educativa sobre sistemas operativos desarrollada por Paula Mendoza y Michell Maldonado para la asignatura Plataformas Tecnológicas.</p>
                            <p><strong>Material basado en recursos académicos proporcionados por el docente de la asignatura.</strong></p>
                        </div>
                        <div class="footer-section">
                            <h3>Contacto</h3>
                            <p>Universidad de Pamplona</p>
                            <p>Facultad de Ingenierías y Arquitectura</p>
                            <p>Ingeniería de Sistemas</p>
                            <p>Asignatura: Plataformas Tecnológicas</p>
                            <p>Docente: Ing. Eduardo Rueda Fajardo</p>
                        </div>
                        <div class="footer-section">
                            <h3>Enlaces de Interés</h3>
                            <a href="#" onclick="showPage('inicio')">Inicio</a>
                            <a href="#" onclick="showPage('contenido')">Contenido</a>
                            <a href="#" onclick="showPage('temas')">Temas</a>
                            <a href="#" onclick="showPage('evaluaciones')">Evaluaciones</a>
                            <a href="#" onclick="showPage('referencias')">Fuentes de Consulta</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer SEPARADO -->
    <footer>
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; 2025 NovaPM - Proyecto académico del 3er corte desarrollado para Plataformas Tecnológicas - Universidad de Pamplona</p>
            </div>
        </div>
    </footer>
    </main>

    <script>
        // Respuestas correctas para todos los quizzes
        const correctAnswers = {
            // Sistemas Operativos
            'so1': 'b',
            'so2': 'c',
            'so3': 'b',
            'so4': 'c',
            'so5': 'c',
            
            // Gestión de Procesos
            'gp1': 'b',
            'gp2': 'd',
            'gp3': 'b',
            'gp4': 'b',
            'gp5': 'c',
                
    // Gestión de Memoria
    'gm1': 'b',
    'gm2': 'b',
    'gm3': 'b',
    'gm4': 'b',
    'gm5': 'a',
    'gm6': 'b',
    'gm7': 'b',
    
    // Gestión de Almacenamiento
    'ga1': 'b',
    'ga2': 'b',
    'ga3': 'b',
    'ga4': 'c',
    'ga5': 'b',
    'ga6': 'a',
    'ga7': 'c',
    'ga8': 'c'
        };

        // Navegación móvil
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');
        
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });
        
        // Mostrar páginas
        function showPage(pageId) {
            // Ocultar todas las páginas
            document.querySelectorAll('.page').forEach(page => {
                page.classList.remove('active');
            });
            
            // Mostrar página seleccionada
            document.getElementById(pageId).classList.add('active');
            
            // Actualizar navegación activa
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            event.target.classList.add('active');
            
            // Cerrar menú móvil si está abierto
            navMenu.classList.remove('active');
            
            // Scroll al inicio de la página
            window.scrollTo(0, 0);
        }
        
        // Mostrar contenido de temas
        function showTopic(topic) {
            // Ocultar todos los contenidos
            document.querySelectorAll('.topic-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Desactivar todas las pestañas
            document.querySelectorAll('.topic-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Mostrar contenido seleccionado
            document.getElementById(topic + '-content').classList.add('active');
            
            // Activar pestaña seleccionada
            event.target.classList.add('active');
            
            // Mostrar primer capítulo por defecto
            const firstChapter = document.querySelector(`#${topic}-content .chapter-btn`);
            if (firstChapter) {
                showChapter(topic, 1);
            }
        }
        
        // Mostrar capítulos dentro de los temas
        function showChapter(topic, chapterNumber) {
            // Ocultar todos los capítulos del tema actual
            document.querySelectorAll(`#${topic}-content .chapter-content`).forEach(chapter => {
                chapter.classList.remove('active');
            });
            
            // Desactivar todos los botones de capítulo del tema actual
            document.querySelectorAll(`#${topic}-content .chapter-btn`).forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Mostrar capítulo seleccionado
            document.getElementById(`${topic}-chapter-${chapterNumber}`).classList.add('active');
            
            // Activar botón de capítulo seleccionado
            event.target.classList.add('active');
        }
        
        // Mostrar diferentes quizzes
        function showQuiz(quizId) {
            // Ocultar todos los quizzes
            document.querySelectorAll('.quiz-section').forEach(quiz => {
                quiz.classList.remove('active');
            });
            
            // Desactivar todas las pestañas de quiz
            document.querySelectorAll('.quiz-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // Mostrar quiz seleccionado
            document.getElementById(`quiz-${quizId}`).classList.add('active');
            
            // Activar pestaña de quiz seleccionada
            event.target.classList.add('active');
        }
        
        // Selección de opciones en el quiz
        function selectOption(element, questionId) {
            // Deseleccionar otras opciones en la misma pregunta
            const parent = element.parentElement;
            parent.querySelectorAll('.quiz-option').forEach(option => {
                option.classList.remove('selected');
            });
            
            // Seleccionar la opción actual
            element.classList.add('selected');
            
            // Guardar la respuesta seleccionada
            element.dataset.selected = 'true';
            element.dataset.questionId = questionId;
        }
        function showReferenceCategory(category) {
    // Ocultar todas las categorías
    document.querySelectorAll('.reference-category').forEach(cat => {
        cat.classList.remove('active');
    });
    
    // Desactivar todos los botones
    document.querySelectorAll('.chapter-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    
    // Mostrar categoría seleccionada
    document.getElementById(category + '-category').classList.add('active');
    
    // Activar botón seleccionado
    event.target.classList.add('active');
}
        
        // Envío del quiz
       function submitQuiz(quizType) {
    let score = 0;
    let totalQuestions = 0;
    
    // Determinar el número de preguntas según el tipo de quiz
    switch(quizType) {
        case 'sistemas-operativos':
            totalQuestions = 5;
            break;
        case 'gestion-procesos':
            totalQuestions = 5;
            break;
        case 'gestion-memoria':
            totalQuestions = 7;
            break;
        case 'gestion-almacenamiento':
            totalQuestions = 8;
            break;
    }
    
    // Calificar cada pregunta del quiz actual
    const quizContainer = document.querySelector(`#quiz-${quizType} .quiz-container`);
    const questions = quizContainer.querySelectorAll('.quiz-question');
    
    questions.forEach((question, index) => {
        const questionNumber = index + 1;
        let questionId = '';
        
        // Determinar el prefijo según el tipo de quiz
        switch(quizType) {
            case 'sistemas-operativos':
                questionId = `so${questionNumber}`;
                break;
            case 'gestion-procesos':
                questionId = `gp${questionNumber}`;
                break;
            case 'gestion-memoria':
                questionId = `gm${questionNumber}`;
                break;
            case 'gestion-almacenamiento':
                questionId = `ga${questionNumber}`;
                break;
        }
        
        const selectedOption = question.querySelector('.quiz-option.selected');
        
        if (selectedOption) {
            const selectedAnswer = selectedOption.textContent.trim().charAt(0);
            
            // Marcar respuesta correcta/incorrecta
            if (selectedAnswer === correctAnswers[questionId]) {
                selectedOption.classList.add('correct');
                score++;
            } else {
                selectedOption.classList.add('incorrect');
                
                // Mostrar la respuesta correcta
                const correctOption = question.querySelector(`.quiz-option:nth-child(${correctAnswers[questionId].charCodeAt(0) - 96})`);
                if (correctOption) {
                    correctOption.classList.add('correct');
                }
            }
        }
    });
    
    // Mostrar resultados
    let quizSuffix = '';
    switch(quizType) {
        case 'sistemas-operativos':
            quizSuffix = 'so';
            break;
        case 'gestion-procesos':
            quizSuffix = 'gp';
            break;
        case 'gestion-memoria':
            quizSuffix = 'gm';
            break;
        case 'gestion-almacenamiento':
            quizSuffix = 'ga';
            break;
    }
    
    const resultsElement = document.getElementById(`quiz-results-${quizSuffix}`);
    const scoreElement = document.getElementById(`score-${quizSuffix}`);
    const messageElement = document.getElementById(`result-message-${quizSuffix}`);
    
    scoreElement.textContent = `${score}/${totalQuestions}`;
    
    // Mensaje según el puntaje
    const percentage = (score / totalQuestions) * 100;
    if (percentage >= 80) {
        messageElement.textContent = '¡Excelente! Dominas los conceptos de este tema.';
    } else if (percentage >= 60) {
        messageElement.textContent = '¡Buen trabajo! Tienes un buen conocimiento del tema.';
    } else if (percentage >= 40) {
        messageElement.textContent = 'No está mal, pero podrías repasar algunos conceptos.';
    } else {
        messageElement.textContent = 'Necesitas estudiar más los conceptos de este tema.';
    }
    
    resultsElement.style.display = 'block';
    resultsElement.scrollIntoView({ behavior: 'smooth' });
}
        
        function resetQuiz(quizType) {
    let quizSuffix = '';
    switch(quizType) {
        case 'sistemas-operativos':
            quizSuffix = 'so';
            break;
        case 'gestion-procesos':
            quizSuffix = 'gp';
            break;
        case 'gestion-memoria':
            quizSuffix = 'gm';
            break;
        case 'gestion-almacenamiento':
            quizSuffix = 'ga';
            break;
    }
    
    const quizContainer = document.querySelector(`#quiz-${quizType} .quiz-container`);
    
    // Limpiar selecciones y marcas
    quizContainer.querySelectorAll('.quiz-option').forEach(option => {
        option.classList.remove('selected', 'correct', 'incorrect');
    });
    
    // Ocultar resultados
    document.getElementById(`quiz-results-${quizSuffix}`).style.display = 'none';
}
    </script>
</body>
</html>