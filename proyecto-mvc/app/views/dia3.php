<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitas - Semana de Sistemas 2025</title>

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
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Día 5
                </a>
                <a href="/proyecto-mvc/public/informacion"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 text-muted hover:text-foreground hover:bg-secondary">
                    Mi Información
                </a>
                <a href="/proyecto-mvc/public/visitas"
                    class="px-4 py-2 rounded-md text-sm font-medium transition-all duration-200 bg-secondary text-foreground">
                    Visitas
                </a>
            </nav>
        </div>
    </header>

    <!-- main -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto space-y-12">

            <!-- Título -->
            <section class="text-center space-y-4">
                <h1 class="text-4xl font-bold bg-gradient-to-r from-primary to-blue-500 bg-clip-text text-transparent">
                    Registro de Visitas
                </h1>
                <p class="text-muted text-lg">Deja tus comentarios sobre el evento</p>
            </section>

            <!-- Formulario -->
            <section class="bg-card border border-border rounded-lg p-8 space-y-6">
                <form method="POST" action="/proyecto-mvc/public/visitas/registrar" class="space-y-6">

                    <div class="space-y-2">
                        <label for="nombre" class="text-sm font-medium text-foreground block">Nombre</label>
                        <input id="nombre" name="nombre" type="text" placeholder="Tu nombre completo"
                            class="w-full px-3 py-2 bg-secondary border border-border rounded-md text-foreground placeholder:text-muted focus:outline-none focus:ring-2 focus:ring-primary"
                            required />
                    </div>

                    <div class="space-y-2">
                        <label for="comentario" class="text-sm font-medium text-foreground block">Comentario</label>
                        <textarea id="comentario" name="comentario" rows="4" placeholder="Comparte tu experiencia sobre el evento..."
                            class="w-full px-3 py-2 bg-secondary border border-border rounded-md text-foreground placeholder:text-muted focus:outline-none focus:ring-2 focus:ring-primary resize-none"
                            required></textarea>
                    </div>

                    <button type="submit"
                        class="w-full px-4 py-2 bg-primary hover:bg-primary/90 text-background font-medium rounded-md transition-colors duration-200">
                        Registrar Visita
                    </button>
                </form>
            </section>

            <!-- Lista de visitas -->
            <section class="space-y-4">
                <h2 class="text-2xl font-semibold flex items-center gap-2 text-foreground">
                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Comentarios Recientes
                </h2>

                <?php if (isset($visitas) && count($visitas) > 0): ?>
                    <div class="space-y-4">
                        <?php foreach ($visitas as $visita): ?>
                            <div class="bg-card border border-border rounded-lg p-6 space-y-3">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-semibold text-lg"><?= htmlspecialchars($visita['nombre']) ?></h3>
                                    <span class="text-sm text-muted"><?= date('d/m/Y', strtotime($visita['fecha'])) ?></span>
                                </div>
                                <p class="text-muted"><?= htmlspecialchars($visita['comentario']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <p class="text-center text-muted">Aún no hay comentarios registrados.</p>
                <?php endif; ?>
            </section>

        </div>
    </main>

</body>

</html>
