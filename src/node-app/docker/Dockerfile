FROM node:16.13.2-alpine as build
WORKDIR /app
ENV PATH /app/node_modules/.bin:$PATH
COPY package.json ./
COPY package-lock.json ./
RUN npm install -g npm && \
    npm install
COPY . ./
RUN npm run build:server
RUN npm run build:client

ENV PORT 3000
ENV HOST localhost

EXPOSE 3000

