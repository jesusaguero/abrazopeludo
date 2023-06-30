<!-- Crear -->
<div class="modal fade" id="donacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">REALIZAR DONACIÓN</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('donaciones.store') }}" method="post">
          @csrf
          <div class="mb-3">
              <label for="" class="form-label">MEDIO DE PAGO</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="medio" value="Yape" id="medio">
                  <label class="form-check-label" for="medio">
                      Yape
                  </label>
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="medio" value="Tarjeta" id="medio">
                  <label class="form-check-label" for="medio">
                      Tarjeta
                  </label>
              </div>
          </div>
          <div class="mb-3">
              <label for="" class="form-label">MONTO</label>
              <input type="number" step="0.01" class="form-control" name="monto">
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Donar</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- Crear -->



<!-- Crear -->
<div class="modal fade" id="create-producto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">PUBLICAR PRODUCTO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">CATEGORIA</label>
                <select class="form-select form-select-sm mb-3" name="opcion" aria-label=".form-select-lg example">
                    <option selected disabled>Categorías</option>
                    <option value="1">Medicina</option>
                    <option value="2">Alimentos</option>
                    <option value="3">Accesorios</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">ESTADO</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" value="Usuario" id="">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Disponible
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radio" value="Voluntario" id="">
                    <label class="form-check-label" for="flexRadioDefault1">
                        No disponible
                    </label>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">NOMBRE</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">PRECIO</label>
                <input type="number" step="0.01" class="form-control" name="precio">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">DESCRIPCIÓN</label>
                <input type="text" class="form-control" name="descripcion">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">STOCK</label>
                <input type="number" class="form-control" name="cantidad">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Publicar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Crear -->