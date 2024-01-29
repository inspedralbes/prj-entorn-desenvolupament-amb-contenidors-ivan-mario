# Use an official Node runtime as a base image
FROM node:14-alpine

# Establecer el directorio de trabajo dentro del contenedor
WORKDIR /app

# Instalar create-react-app de forma global
RUN npm install -g create-react-app

# Crear un nuevo proyecto React
RUN npx create-react-app my-react-app

# Establecer el directorio de trabajo para el nuevo proyecto
WORKDIR /app/my-react-app

# Exponer el puerto en el que la aplicación se ejecutará
EXPOSE 3000

# Comando para ejecutar la aplicación cuando el contenedor se inicie
CMD ["npm", "start"]
