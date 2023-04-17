# Usar una imagen base de Node.js
FROM node:14

# Crear directorio de la aplicación
WORKDIR /app

# Copiar package.json y package-lock.json
COPY package*.json ./

# Instalar dependencias
RUN npm install express morgan mysql mysql2 axios

# Copiar el código fuente
COPY src/ ./

# Exponer el puerto en el que se ejecuta el microservicio
EXPOSE 3001

# Comando para iniciar la aplicación
CMD ["npm", "start"]
