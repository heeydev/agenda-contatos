import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    server: {
        hmr: {
            host: 'agenda.contatos'
        },
        host: 'agenda.contatos'
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});