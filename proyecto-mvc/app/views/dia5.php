<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Día 5 - Semana de Sistemas 2025</title>

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

    <!-- Header -->
    <header class="sticky top-0 z-50 border-b border-border bg-background/80 backdrop-blur-sm">
        <div class="container mx-auto px-4 py-6">
            <h1
                class="text-5xl font-bold bg-gradient-to-r from-primary text-center to-blue-500 bg-clip-text text-transparent mb-6">
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
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 bg-secondary text-foreground">
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

    <!-- main -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto space-y-12">

            <section class="text-center space-y-4">
                <h1 class="text-4xl font-bold bg-gradient-to-r from-primary to-blue-500 bg-clip-text text-transparent">
                    Día 5
                </h1>
                <p class="text-muted text-lg">Actividades y eventos del día 5</p>
            </section>

            <!-- desc -->
            <section class="bg-card border border-border rounded-lg p-8 space-y-6">
                <h2 class="text-2xl font-semibold text-foreground">Descripción del Día</h2>
                <p class="text-muted">

                </p>
            </section>

            <!-- info -->
            <section class="space-y-4">
                <h2 class="text-2xl font-semibold flex items-center gap-2 text-foreground">
                    Ponencias y Talleres
                </h2>

                <!-- info 1 -->
                <div class="bg-card border border-border rounded-lg p-6 space-y-3">
                    <h3 class="text-xl font-semibold text-primary">
                        
                    </h3>
                    <p class="text-muted">
                    </p>
                    <div class="text-sm text-muted">
                        <span class="font-medium">Ponente:</span> 
                    </div>
                </div>
                <!-- galeria -->
                <section class="space-y-6 text-center">
                    <h2 class="text-2xl font-semibold text-foreground">Galería Multimedia</h2>

                    <!-- fts -->
                    <div>
                        <h3 class="text-lg font-medium mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                <polyline points="21 15 16 10 5 21"></polyline>
                            </svg>
                            Imagenes
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div
                                class="bg-secondary border border-border rounded-lg p-2 aspect-video flex items-center justify-center">
                                <img src="ruta" alt="Foto 1" class="w-full h-full object-cover rounded">
                            </div>
                        </div>
                </section>
                <!-- info 2 -->
                <div class="bg-card border border-border rounded-lg p-6 space-y-3">
                    <h3 class="text-xl font-semibold text-primary">
                        
                    </h3>
                    <p class="text-muted">

                    </p>
                    <div class="text-sm text-muted">
                        <span class="font-medium">Ponente:</span> 
                    </div>
                </div>
            </section>

            <!-- galeria -->
            <section class="space-y-6">
                <h2 class="text-2xl font-semibold text-foreground">Galería Multimedia</h2>

                <!-- fts -->
                <div>
                    <h3 class="text-lg font-medium mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                            <polyline points="21 15 16 10 5 21"></polyline>
                        </svg>
                        Imagenes
                    </h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <div
                            class="bg-secondary border border-border rounded-lg p-2 aspect-video flex items-center justify-center">
                            <img src="ruta" alt="Foto 1" class="w-full h-full object-cover rounded">
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </main>
</body>

</html>