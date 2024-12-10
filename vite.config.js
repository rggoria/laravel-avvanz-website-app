import { defineConfig } from "vite";
import path from "path";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    base: "/",
    plugins: [
        laravel({
            input: [
                "resources/css/about.css",
                "resources/css/app.css",
                "resources/css/develop.css",
                "resources/css/homepage.css",
                "resources/css/newsletter.css",
                "resources/css/privacy.css",
                "resources/css/privacy.css",
                "resources/css/resources.css",
                "resources/css/resources.css",
                "resources/css/testing1.css",
                "resources/css/testing2.css",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "resources"),
        },
    },
    // server: {
    //     hmr: {
    //         host: "localhost",
    //     },
    // },
});
