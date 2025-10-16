<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Información</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        background: 'hsl(0 0% 7%)',
                        foreground: 'hsl(0 0% 95%)',
                        card: 'hsl(0 0% 10%)',
                        primary: 'hsl(189 94% 43%)',
                        secondary: 'hsl(240 5% 15%)',
                        muted: 'hsl(240 5% 60%)',
                        border: 'hsl(240 5% 20%)',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-background text-foreground min-h-screen">
    <!-- header -->
    <header class="sticky top-0 z-50 border-b border-border bg-background/80 backdrop-blur-sm">
        <div class="container mx-auto px-4 py-6">
            <h1
                class="text-5xl font-bold bg-gradient-to-r from-primary to-blue-500 bg-clip-text text-transparent text-center mb-6">
                Semana de Sistemas 2025
            </h1>
            <nav class="flex flex-wrap gap-2 justify-center">
                <a href="/proyecto-mvc/public/layout"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Inicio
                </a>
                <a href="/proyecto-mvc/public/dia1"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Día 1
                </a>
                <a href="/proyecto-mvc/public/dia2"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Día 2
                </a>
                <a href="/proyecto-mvc/public/dia3"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Día 3
                </a>
                <a href="/proyecto-mvc/public/dia4"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Día 4
                </a>
                <a href="/proyecto-mvc/public/dia5"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Día 5
                </a>
                <a href="/proyecto-mvc/public/mi-informacion"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 bg-secondary text-foreground">
                    Mi Información
                </a>
                <a href="/proyecto-mvc/public/visitas"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Visitas
                </a>
            </nav>
        </div>
    </header>

    <!-- main -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto space-y-8">
            <div class="bg-card border border-border rounded-lg overflow-hidden">
                <div class="p-8 space-y-8">
                    <!-- ft de perfil -->
                    <div class="flex justify-center">
                        <div class="w-40 h-50 bg-secondary border-2 border-primary rounded-full overflow-hidden">
                            <img src="../resources/ft.jpg" alt="Foto de perfil"
                                class="w-full h-full object-cover">
                        </div>
                    </div>

                    <!-- info personal -->
                    <div class="space-y-6">
                        <div class="text-center">
                            <h2 class="text-2xl font-bold mb-2">César Josué Zuleta Villalobos</h2>
                            <p class="text-muted">Estudiante de Ingeniería en Sistemas Informáticos</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4 pt-6">
                            <!-- email -->
                            <div class="bg-secondary border border-border rounded-lg p-4 flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-muted mb-1">Email</p>
                                    <p class="font-medium">zv23005@ues.edu.sv</p>
                                </div>
                            </div>

                            <!-- tel -->
                            <div class="bg-secondary border border-border rounded-lg p-4 flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-muted mb-1">Teléfono</p>
                                    <p class="font-medium">+503 7284 9434</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Biografía -->
                    <div class="pt-6 border-t border-border space-y-3">
                        <h3 class="text-lg font-semibold">Sobre mí</h3>
                        <p class="text-muted leading-relaxed">
                            Soy estudiante de Ingeniería en Sistemas Informáticos en la Universidad de El Salvador.
                            Me apasiona la programación, la música y el aprendizaje constante.
                            Disfruto de compartir conocimientos con los demás y participar en proyectos
                            que promuevan la innovación tecnológica.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
