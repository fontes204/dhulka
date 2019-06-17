var socket  = require( 'socket.io' );
var express = require('express');
var app     = express();
var server  = require('http').createServer(app);
var io      = socket.listen( server );
var port    = process.env.PORT || 3000;

server.listen(port, function () {
  console.log('Servidor rodando na porta %d', port);
});


io.on('connection', function (socket) {


  socket.on( 'update_count_utente', function( data ) {

      io.sockets.emit( 'update_count_utente', {
        count: data.count
      });
  });

  socket.on( 'chamar_utente', function( data ) {

    io.sockets.emit( 'chamar_utente', {
        codigo: data.codigo,
        especialidade: data.especialidade,
        estado: data.estado,
        paciente: data.paciente,
        horario: data.horario,
        medico: data.medico,
        cor: data.cor,
        prioridade: data.prioridade
    });
  });

  
});
