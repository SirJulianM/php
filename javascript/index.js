const d = document, 
displayValorAnterior = d.getElementById('valor-anterior'), 
displayValorActual = d.getElementById('valor-actual'),
botonesNumeros = d.querySelectorAll('.numero'),
botonesOperadores = d.querySelectorAll('.operador');
console.log(d);

const display = new Display(displayValorAnterior, displayValorActual);

botonesNumeros.forEach(boton => {
    boton.addEventListener('click', () => display.agregarNumero(boton.innerHTML));
})

botonesOperadores.forEach(boton => {
    boton.addEventListener('click', () => display.computar(boton.value));
});

