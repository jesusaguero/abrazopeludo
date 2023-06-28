@extends('layouts.app')
@section('content')
    <!-- SECCIÓN DE CONSULTAS -->
    <div class="accordion" id="preguntas-accordion">
        <div class="card">
            <div class="card-header" id="pregunta-1">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#respuesta-1" aria-expanded="true" aria-controls="respuesta-1">
                        ¿¿Cuáles son las categorías de productos que ofrecen en la compra online?
                    </button>
                </h2>
            </div>
            <div id="respuesta-1" class="collapse show" aria-labelledby="pregunta-1" data-parent="#preguntas-accordion">
                <div class="card-body">
                En nuestra tienda online, ofrecemos tres categorías de productos relacionados con mascotas: medicina, alimentos y accesorios. Puedes encontrar una amplia variedad de productos de alta calidad en cada una de estas categorías para satisfacer las necesidades de tus gatos y perros.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="pregunta-2">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#respuesta-2" aria-expanded="false" aria-controls="respuesta-2">
                        ¿Cuáles son los métodos de pago aceptados para las donaciones?
                    </button>
                </h2>
            </div>
            <div id="respuesta-2" class="collapse" aria-labelledby="pregunta-2" data-parent="#preguntas-accordion">
                <div class="card-body">
                Aceptamos pagos de donaciones tanto a través de Yape como con tarjeta de débito. Si deseas realizar una donación para apoyar nuestra labor en la protección y cuidado de las mascotas, puedes seleccionar la opción de pago que más te convenga al realizar tu contribución.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="pregunta-3">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#respuesta-3" aria-expanded="false" aria-controls="respuesta-3">
                        ¿Cómo puedo adoptar una mascota a través de su negocio?
                    </button>
                </h2>
            </div>
            <div id="respuesta-3" class="collapse" aria-labelledby="pregunta-3" data-parent="#preguntas-accordion">
                <div class="card-body">
                Nos complace que estés interesado en adoptar una mascota. Para iniciar el proceso de adopción, te pedimos que llenes un formulario de adopción en nuestro sitio web. Este formulario nos ayudará a conocer tus preferencias y asegurarnos de encontrar la mascota adecuada para ti. Después de recibir tu formulario, nos pondremos en contacto contigo para continuar con el proceso de adopción.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="pregunta-4">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#respuesta-4" aria-expanded="false" aria-controls="respuesta-4">
                        ¿Cuáles son los beneficios de comprar productos para mascotas en Abrazo Peludo?
                    </button>
                </h2>
            </div>
            <div id="respuesta-4" class="collapse" aria-labelledby="pregunta-4" data-parent="#preguntas-accordion">
                <div class="card-body">
                Al comprar en Abrazo Peludo, te garantizamos productos de alta calidad para tus mascotas. Nuestros productos son cuidadosamente seleccionados para brindarles una alimentación adecuada, medicamentos seguros y accesorios funcionales. Además, al realizar una compra, estarás apoyando nuestra labor en la protección y bienestar de los animales.
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="pregunta-5">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#respuesta-5" aria-expanded="false" aria-controls="respuesta-5">
                        ¿Cómo puedo realizar un seguimiento de mi pedido realizado en línea?
                    </button>
                </h2>
            </div>
            <div id="respuesta-5" class="collapse" aria-labelledby="pregunta-5" data-parent="#preguntas-accordion">
                <div class="card-body">
                Después de realizar tu pedido, recibirás un correo electrónico de confirmación con los detalles de tu compra. También proporcionaremos un número de seguimiento que podrás utilizar para rastrear el estado de tu pedido. Si tienes alguna pregunta adicional sobre tu pedido, nuestro equipo de atención al cliente estará encantado de ayudarte.
                </div>
            </div>
        </div>
    </div>
    
    <!-- SECCIÓN DE CONSULTAS -->
@endsection