import { defineConfig } from 'vite'

// https://vitejs.dev/config/
export default defineConfig({
  build: {
    watch: {
      include: 'src/**'
    },
    rollupOptions: {
      input: '/src/main.js',
      output: {
        dir: 'assets/frontend/',
        entryFileNames: 'index.js',
        assetFileNames: 'index.css'
      }
    }
  }
});