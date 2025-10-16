<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana de Sistemas 2025</title>
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
            <h1 class="text-5xl font-bold bg-gradient-to-r from-primary text-center to-blue-500 bg-clip-text text-transparent mb-6">
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
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Mi Información
                </a>
                <a href="/proyecto-mvc/public/visitas"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Visitas
                </a>
            </nav>
        </div>
    </header>

    <!--main-->
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto space-y-12">
            <section class="text-center space-y-6 py-12">
                <h1
                    class="text-3xl md:text-3xl font-bold bg-gradient-to-r from-primary to-blue-500 bg-clip-text text-transparent">
                    Bienvenidos a la Semana de Sistemas 2025
                </h1>
                <p class="text-xl text-muted max-w-2xl mx-auto">
                    Un evento dedicado a la innovación tecnológica, el aprendizaje continuo y el networking entre
                    profesionales del área de sistemas.
                </p>
            </section>

            <section class="bg-card border border-border rounded-lg p-8 space-y-6">
                <h2 class="text-3xl font-bold text-foreground">¿En qué consiste el evento?</h2>
                <p class="text-muted leading-relaxed">
                    La Semana de Sistemas 2025 es un evento de cinco días repleto de conferencias, talleres prácticos y
                    oportunidades de networking. Durante esta semana, expertos de la industria compartirán sus
                    conocimientos
                    sobre las últimas tendencias en tecnología, desarrollo de software, inteligencia artificial y más.
                </p>

                <div class="grid md:grid-cols-3 gap-6 pt-6">
                    <div class="text-center space-y-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                        <h3 class="font-semibold">5 Días Intensivos</h3>
                        <p class="text-sm text-muted">Del 10 al 14 de Marzo de 2025</p>
                    </div>

                    <div class="text-center space-y-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                        <h3 class="font-semibold">Talleres Prácticos</h3>
                        <p class="text-sm text-muted">Aprende haciendo con expertos</p>
                    </div>

                    <div class="text-center space-y-3">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="font-semibold">Networking</h3>
                        <p class="text-sm text-muted">Conecta con profesionales del sector</p>
                    </div>
                </div>
            </section>

            <section class="bg-secondary/50 border border-border rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Explora el Evento</h3>
                <p class="text-muted mb-4">
                    Utiliza el menú de navegación superior para explorar las actividades de cada día,
                    conocer más sobre mi y registra tu visita al blog.
                </p>
            </section>
        </div>

    </main>
</body>

</html>