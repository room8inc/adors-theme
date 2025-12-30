import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  build: {
    outDir: 'dist',
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'assets/js/main.js'),
        style: resolve(__dirname, 'assets/css/style.css'),
      },
      output: {
        entryFileNames: 'assets/js/[name].js',
        assetFileNames: (assetInfo) => {
          if (assetInfo.name.endsWith('.css')) {
            return 'assets/css/[name][extname]';
          }
          return 'assets/[name][extname]';
        },
      },
    },
    manifest: true,
    emptyOutDir: true,
  },
  server: {
    host: 'localhost',
    port: 3000,
    strictPort: true,
    hmr: {
      host: 'localhost',
    },
  },
});

