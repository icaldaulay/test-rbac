import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import fs from "fs";
import path from "path";

export default defineConfig({
    server: {
        host: "test-lmd-rbac.test",
        https: {
            key: fs.readFileSync(
                path.resolve(
                    process.env.HOME,
                    "Library/Application Support/Herd/certs/test-lmd-rbac.test-key.pem"
                )
            ),
            cert: fs.readFileSync(
                path.resolve(
                    process.env.HOME,
                    "Library/Application Support/Herd/certs/test-lmd-rbac.test.pem"
                )
            ),
        },
    },
    plugins: [
        laravel({
            input: ["resources/sass/app.scss", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
