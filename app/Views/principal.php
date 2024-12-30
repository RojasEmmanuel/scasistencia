<?= $this->extend('layout/template')?>
<?= $this->section('content'); ?>

<div class="contenidoPagina">

    <div class="seccion-superior">
        <h1 class="saludo">Bienvenido al Panel de Administración 🚀</h1>
        <p class="descripcion">Aquí podrás consultar y administrar información sobre los eventos realizados en el Instituto Tecnológico de Pochutla.</p>
    
        <div class="detalles">

            <ul class="lista-herramientas">
                <li>✅ Registra un evento académico, social o cultural.</li>
                <li>✅ Notifica a la comunidad estudiantil.</li>
                <li>✅ Comparte el enlace de registro a los docentes.</li>
                <li>✅ Consulta, analiza y exporta los datos registrados.</li>
            </ul>

            <div class="btnLink">
                <button class="btn1" onclick="openModal()">Registrar Evento</button>
            </div>

            <br><br>
            <div class="containerNotificaciones">
                <h3 class="subtitulo">Eventos proximos</h2><br>
                <div class="event-grid">
                    <div class="card">
                        <button class="show-event-button" onclick="openModal2()">🔔Conferencia de Innovación Tecnológica</button>
                        <div class="card__conte">
                            Desfile conmemorativo por la revolucioón mexicana
                        </div>
                        <div class="card__date">
                            20 nov. 2024
                        </div>
                        
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card">
                        <button class="show-event-button" onclick="openModal2()">🔔Conferencia de Innovación Tecnológica</button>
                        <div class="card__conte">
                            Desfile conmemorativo por la revolucioón mexicana
                        </div>
                        <div class="card__date">
                            20 nov. 2024
                        </div>
                        
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="card">
                        <button class="show-event-button" onclick="openModal2()">🔔Conferencia de Innovación Tecnológica</button>
                        <div class="card__conte">
                            Desfile conmemorativo por la revolucioón mexicana
                        </div>
                        <div class="card__date">
                            20 nov. 2024
                        </div>
                        
                        <div class="card__arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
                                <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-overlay2" id="modalOverlay2">
                <div class="modal2">
                    <div class="modal-header2">
                        <h1 style="color: white;">Conferencia de Innovación Tecnológica</h1>
                    </div>
                    <div class="modal-body2">
                        <p><strong>Fecha:</strong> 25 de marzo de 2024</p>
                        <p><strong>Hora:</strong> 10:00 AM</p>
                        <p><strong>Lugar:</strong> Auditorio Principal</p>
                        <p><strong>Área:</strong> Ingeniería en Sistemas</p>
                        <p><strong>Tipo de Evento:</strong> Académico</p>
                        <p><strong>Responsable:</strong> Mtro. Juan Pérez López</p>
                        <p class="description"><strong>Descripción:</strong> En este evento se abordarán las últimas tendencias en innovación tecnológica, incluyendo inteligencia artificial, desarrollo de software y tecnología en la nube. Ideal para estudiantes, académicos y profesionales interesados en el futuro de la tecnología.</p>
                    </div>
                    <div class="modal-footer2">
                        <button onclick="closeModal2()">Cerrar</button>
            </div>
        </div>
    </div>

</div>
        
</div>

    <br><br>
    <div class="calendario">
        <h3 class="subtitulo">Calendario de Eventos</h3>
        <div class="calendar-header">
            <button id="prevMonth">◀</button>
            <span id="monthYear"></span>
            <button id="nextMonth">▶</button>
        </div>
        <table class="calendar">
            <thead>
                <tr>
                    <th>Lun</th>
                    <th>Mar</th>
                    <th>Mié</th>
                    <th>Jue</th>
                    <th>Vie</th>
                    <th>Sáb</th>
                    <th>Dom</th>
                </tr>
            </thead>
            <tbody id="calendarBody">
                <!-- Días del mes -->
            </tbody>
        </table>
    </div>
    
</div>    
<div class="modal-overlay" id="modalOverlay">
    <div class="modal">
        <button class="close-button" onclick="closeModal()">&times;</button>
        <h1>Registro de Eventos</h1>
        <form action="/submit-event" method="POST">
            <div class="contenedorForm">
                <div class="form0">
                    <div class="form-group">
                        <label for="nombre">Nombre del evento</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa el nombre del evento" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha</label>
                        <input type="date" id="fecha" name="fecha" required>
                    </div>
                    <div class="form-group">
                        <label for="hora">Hora</label>
                        <input type="time" id="hora" name="hora" required>
                    </div>
                    <div class="form-group">
                        <label for="lugar">Lugar</label>
                        <input type="text" id="lugar" name="lugar" placeholder="Ingresa el lugar" required>
                    </div>
                </div>

                <div class="form1">
                    <div class="form-group">
                        <label for="area">Área</label>
                        <input type="text" id="area" name="area" placeholder="Ingresa el área" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select id="tipo" name="tipo" required>
                            <option value="">Selecciona el tipo</option>
                            <option value="Académico">Académico</option>
                            <option value="Deportivo">Deportivo</option>
                            <option value="Cultural">Cultural</option>
                            <option value="Cívico">Cívico</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="responsable">Responsable</label>
                        <input type="text" id="responsable" name="responsable" placeholder="Ingresa el nombre del responsable" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" id="descripcion" name="descripcion" placeholder="Ingrese una descripción general del evento">
                    </div>
                </div>
            </div>
            <div class="form-group button-group">
                <button type="submit">Registrar Evento</button>
                <button type="button" class="cancel-button" onclick="closeModal()">Cancelar</button>
            </div>
        </form>
    </div>
</div>
<script>

    let today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();
    let selectedDate = today.getDate();

    const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    const daysInWeek = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"];

    document.getElementById("prevMonth").addEventListener("click", function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear);
    });

    document.getElementById("nextMonth").addEventListener("click", function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear);
    });

    function renderCalendar(month, year) {
        const firstDay = (new Date(year, month)).getDay();
        const daysInMonth = 32 - new Date(year, month, 32).getDate();

        const calendarBody = document.getElementById("calendarBody");
        calendarBody.innerHTML = "";

        document.getElementById("monthYear").textContent = `${monthNames[month]} ${year}`;

        let date = 1;
        let startDay = (firstDay + 6) % 7; // Ajuste para que el lunes sea el primer día
        for (let i = 0; i < 6; i++) {
            let row = document.createElement("tr");

            for (let j = 0; j < 7; j++) {
                let cell = document.createElement("td");
                if (i === 0 && j < startDay) {
                    cell.textContent = "";
                } else if (date > daysInMonth) {
                    break;
                } else {
                    cell.setAttribute("data-day", date);
                    // Marca el día actual
                    if (date === selectedDate && month === today.getMonth() && year === today.getFullYear()) {
                        cell.classList.add("today");
                    }
                    date++;
                }
                row.appendChild(cell);
            }

            calendarBody.appendChild(row);
        }
    }

    // Inicializa el calendario
    renderCalendar(currentMonth, currentYear);


    function openModal() {
        const overlay = document.getElementById('modalOverlay');
        overlay.style.display = 'flex';
    }

    function closeModal() {
        const overlay = document.getElementById('modalOverlay');
        overlay.style.display = 'none';
    }

    function openModal2() {
        document.getElementById('modalOverlay2').style.display = 'flex';
    }

    function closeModal2() {
        document.getElementById('modalOverlay2').style.display = 'none';
    }
</script>

<?= $this->endSection(); ?>
