@extends('layouts.plantilla')

@section('titulo', 'Perfil - Turista sin Maps')

@section('contenido')
<div class="profile-container">
    <div class="profile-info">
        <h1>
            <span class="profile-icon">👤</span> 
            Nombre del Usuario <!-- Nombre estático -->
            <span class="edit-icon-name">✎</span>
        </h1>
        <p>Entusiasta viajero y explorador que ha dedicado gran parte de su vida a descubrir nuevas culturas y destinos alrededor del mundo...</p>
        <a href="{{ route('historialReservaciones') }}" class="btn btn-primary history-button">Historial de Reservación</a>
        <button>Cerrar Sesión</button> <!-- Botón simplificado sin funcionalidad -->
    </div>
</div>
@endsection
