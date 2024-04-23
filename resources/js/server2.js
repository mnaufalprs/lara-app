// const {WebSocketServer} = require('ws')
// const socketServer = new WebSocketServer({port: 443})

// socketServer.on('connection', ws =>{
//     console.log('New Client connected')
// })

// import express from 'express';
// // const express = require('express');
// const app = express();
// import http from 'http';
// // const http = require('http');
// const server = http.createServer(app);
// import { Server } from 'socket.io';
// // const { Server } = require("socket.io");
// const io = new Server(server);

// app.get('/realtimeAnalytic', (req, res) => {
//   res.sendFile(__dirname + './realtime_analytic/index.blade.php');
// });

// io.on('connection', (socket) => {
//   console.log('a user connected');
// });

// server.listen(3000, () => {
//   console.log('listening on *:3000');
// });

// import express from 'express'; 
// import { createServer } from "http"; 
// import { Server as SocketServer } from 'socket.io';
// import path from 'path';

// const __dirname = path.dirname(new URL(import.meta.url).pathname);

// const app = express(); 
// const httpServer = createServer(app); 
// const io = new SocketServer(httpServer, {   
//     cors: { origin: "*"} 
// });

// app.use('/socket.io', express.static(path.join(__dirname, 'node_modules', 'socket.io', 'client-dist')));

// app.get('/realtimeAnalytic', (req, res) => {     
//     res.send('<h1>Hello world</h1>');   
// });     

// io.on('connection', (socket) => {     
//     console.log('Connection');   

//     socket.on('disconnect', () => {             
//         console.log('Disconnect');     
//     }); 
// });

// httpServer.listen(3000, () => {   
//     console.log('Server is running'); 
// });

import express from 'express'; 
import { createServer } from "http"; 
import { Server as SocketServer } from 'socket.io';
import mysql from 'mysql';

const app = express(); 
const httpServer = createServer(app); 
const io = new SocketServer(httpServer, {   
    cors: { origin: "*"} 
});  

var connection = mysql.createConnection({
     host: 'localhost',
     user: 'root',
     password: '',
     database: 'project_webapp'
});

connection.connect(function (err) {
     if (err) {
         console.error('Error connecting to MySQL database: ' + err.stack);
         return;
     }
     console.log('Connected to MySQL database');
});

async function getData() {
     return new Promise((resolve, reject) => {
         connection.query('SELECT * FROM data_livetests', (error, results, fields) => {
             if (error) {
                 reject(error);
             } else {
                 resolve(results);
             }
         });
     });
}

io.on('connection', async (socket) => {
     console.log('Connection');
 
     try {
         // Mengirim data pertama kali saat koneksi berhasil
         const data = await getData();
         socket.emit('data', data);
         
         // Membuat fitur realtime update
         const updateInterval = setInterval(async () => {
             const newData = await getData();
             socket.emit('data', newData);
         }, 1000); // Update setiap 5 detik (sesuaikan dengan kebutuhan)
         
         // Menangani koneksi yang terputus
         socket.on('disconnect', () => {
             console.log('Disconnect');
             clearInterval(updateInterval); // Membersihkan interval saat koneksi terputus
         });
     } catch (error) {
         console.error('Error fetching data from MySQL database: ' + error);
     }
});

httpServer.listen(3000, () => {
    console.log('Server is running');
});
