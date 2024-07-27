<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script type="module" src="/main.js">
      verificarDisponibilidad();
    </script>
    <link rel="icon" type="image/x-icon" href="./javascript.svg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Agencia de Viajes</title>
  </head>
  <body>
    <h1 id="title">Agencia de viajes</h1>
    <div id="filterForm">
    <form id="formStyle">
      <div id="filtroViaje" class="flotante">
        <select>
          <option value="ida">Ida</option>
          <option value="idayvuelta">Ida y Vuelta</option>
        </select>
      </div>
      <div id="estadia" class="flotante">
        <select>
          <option value="vuelo">Vuelo</option>
          <option value="VueloyHotel">Vuelo + Hotel</option>
        </select>
      </div>
      <div id="originInput" class="flotante">
        <input type="text"  list="opciones" placeholder="Origen">
      </div>
      <div id="destinationInput" class="flotante">
        <input type="text"  list="opciones" placeholder="Destino">
        <datalist id="opciones">
          <option value="Chile">Chile</option>
          <option value="Argentina">Argentina</option>
          <option value="Perú">Perú</option>
          <option value="Colombia">Colombia</option>
        </datalist>
      </div>
      <div id="fechaIda" class="flotante">
          <input type="text"  placeholder="Fecha de ida">
      </div>
      <div id="fechaVuelta" class="flotante">
          <input type="text"  placeholder="Fecha de vuelta">
      </div>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
          flatpickr("#fechaIda");
          flatpickr("#fechaVuelta");
        </script>
      <div id="pasajeros" class="flotante">
        <label for="pasajeros">Pasajeros:</label>
        <select >
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
        </select>
      </div>
      <button type="submit">Buscar</button>
    </form>
  </div>
    <div id="results">
    </div><br>
    <div id="paquetes">
    </div>
  <!-- <script>
    verificarDisponibilidad();
  </script> -->
  </body>
</html>